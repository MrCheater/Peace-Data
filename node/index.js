import fs from "fs";
import path from "path";
import http from "http";
import https from "https";
import cors from "cors";
import express from 'express'
import passport from 'passport'
import session from "express-session";
import cookieParser from "cookie-parser";
import bodyParser from "body-parser";
import flash from 'connect-flash'
import loggedin from 'connect-ensure-login'
import base32 from 'thirty-two'

import { Strategy as LocalStrategy } from 'passport-local'
import { Strategy as TotpStrategy } from 'passport-totp'

import utils from './utils'
import {
  findById,
  findByUsername,
  findKeyForUserId,
  saveKeyForUserId
} from './users'

const debug = process.env.NODE_ENV !== 'production'
const sessionSecret = debug ? 'SESSION_SECRET' : process.env.SESSION_SECRE

passport.serializeUser(function(user, done) {
  done(null, user.id);
});

passport.deserializeUser(function(id, done) {
  findById(id, function (err, user) {
    done(err, user);
  });
});


passport.use(new LocalStrategy(function(username, password, done) {
  process.nextTick(function () {
    findByUsername(username, function(err, user) {
      if (err) { return done(err); }
      if (!user) { return done(null, false, { message: 'Invalid username or password' }); }
      if (user.password != password) { return done(null, false, { message: 'Invalid username or password' }); }
      return done(null, user);
    })
  });
}));

passport.use(new TotpStrategy(
  function(user, done) {
    // setup function, supply key and period to done callback
    findKeyForUserId(user.id, function(err, obj) {
      if (err) { return done(err); }
      return done(null, obj.key, obj.period);
    });
  }
));

const app = express();

if(debug) {
  app.use(cors())
} else {
  app.use(cors({
    origin: 'https://peace.data:443/',
    optionsSuccessStatus: 204
  }));
}

app.set('views', __dirname + '/views');
app.set('view engine', 'ejs');
app.engine('ejs', require('ejs-locals'));
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: false }));
app.use(cookieParser());
app.use(session({
  secret: sessionSecret,
  name: 'SessionID',
  resave: false,
  saveUninitialized: true,
  cookie: {
    secure: debug ? false : true,
    httpOnly: true,
  }
}));
app.use(flash());
app.use(passport.initialize());
app.use(passport.session());

app.get('/', function(req, res){
  res.render('index', { user: req.user });
});

app.get('/account', loggedin.ensureLoggedIn(), ensureSecondFactor, function(req, res){
  res.render('account', { user: req.user });
});

app.get('/setup', loggedin.ensureLoggedIn(), function(req, res, next){
  findKeyForUserId(req.user.id, function(err, obj) {
    if (err) { return next(err); }
    if (obj) {
      // two-factor auth has already been setup
      const encodedKey = base32.encode(obj.key);

      // generate QR code for scanning into Google Authenticator
      // reference: https://code.google.com/p/google-authenticator/wiki/KeyUriFormat
      const otpUrl = 'otpauth://totp/' + req.user.email
        + '?secret=' + encodedKey + '&period=' + (obj.period || 30);
      const qrImage = 'https://chart.googleapis.com/chart?chs=166x166&chld=L|0&cht=qr&chl=' + encodeURIComponent(otpUrl);

      res.render('setup', { user: req.user, key: encodedKey, qrImage: qrImage });
    } else {
      // new two-factor setup.  generate and save a secret key
      const key = utils.randomKey(10);
      const encodedKey = base32.encode(key);

      // generate QR code for scanning into Google Authenticator
      // reference: https://code.google.com/p/google-authenticator/wiki/KeyUriFormat
      const otpUrl = 'otpauth://totp/' + req.user.email
        + '?secret=' + encodedKey + '&period=30';
      const qrImage = 'https://chart.googleapis.com/chart?chs=166x166&chld=L|0&cht=qr&chl=' + encodeURIComponent(otpUrl);

      saveKeyForUserId(req.user.id, { key: key, period: 30 }, function(err) {
        if (err) { return next(err); }
        res.render('setup', { user: req.user, key: encodedKey, qrImage: qrImage });
      });
    }
  });
});

app.get('/login', function(req, res){
  res.render('login', { user: req.user, message: req.flash('error') });
});

app.post('/login',
  passport.authenticate('local', { failureRedirect: '/login', failureFlash: true }),
  function(req, res) {
    res.redirect('/');
  });

app.get('/login-otp', loggedin.ensureLoggedIn(),
  function(req, res, next) {
    // If user hasn't set up two-factor auth, redirect
    findKeyForUserId(req.user.id, function(err, obj) {
      if (err) { return next(err); }
      if (!obj) { return res.redirect('/setup'); }
      return next();
    });
  },
  function(req, res) {
    res.render('login-otp', { user: req.user, message: req.flash('error') });
  });

app.post('/login-otp',
  passport.authenticate('totp', { failureRedirect: '/login-otp', failureFlash: true }),
  function(req, res) {
    req.session.secondFactor = 'totp';
    res.redirect('/');
  });

app.get('/logout', function(req, res){
  req.logout();
  res.redirect('/');
});

function ensureSecondFactor(req, res, next) {
  if (req.session.secondFactor == 'totp') { return next(); }
  res.redirect('/login-otp')
}

if(debug) {
  const httpServer = http.createServer(app);
  httpServer.listen(3001, 'localhost', () => {
    const { address, port } = httpServer.address()
    console.log(`HTTP Server running on port http://${address}:${port}`);
  });
} else {
  // SSL Certificate
  const httpsServer = https.createServer({
    key: fs.readFileSync(path.join(__dirname, '..', 'peace.data.key')),
    cert: fs.readFileSync(path.join(__dirname, '..', 'peace.data.crt')),
  }, app);

  httpsServer.listen(443, 'api.peace.data', () => {
    console.log(`HTTPS Server running on port https://api.peace.data`);
  });
}

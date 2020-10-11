# Peace-Data
#### VTB hackathon team

## Security Features
#### SSL Certificate 
![SSL Certificate](https://user-images.githubusercontent.com/5055654/95653059-5f31c400-0afe-11eb-8519-3bd99940ca86.png)
```js
const httpsServer = https.createServer({
    key: fs.readFileSync(path.join(__dirname, '..', 'peace.data.key')),
    cert: fs.readFileSync(path.join(__dirname, '..', 'peace.data.crt')),
}, app);

httpsServer.listen(443, 'api.peace.data', () => {
    console.log(`HTTPS Server running on port https://api.peace.data`);
});
```

#### Two-factor authentication + QR code for scanning into Google Authenticator
![Passport-TOTP-Example](https://user-images.githubusercontent.com/5055654/95653175-41189380-0aff-11eb-9e73-df4a0c6874bc.png)

![Passport-TOTP-Example (1)](https://user-images.githubusercontent.com/5055654/95653176-4249c080-0aff-11eb-9155-8a2879d8fa9f.png)

#### Secure Session
```js
// Send session cookie only over HTTPS
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
```

#### Whitelist Cors 
```js
// For https://api.peace.data:443/
app.use(cors({
    origin: 'https://peace.data:443/',
    optionsSuccessStatus: 204
}));
```

#### Rate Limiting
```js
app.use(rateLimit({
    windowMs: 15 * 60 * 1000, // 15 minutes
    max: 100 // limit each IP to 100 requests per windowMs
}));
```

#### ML Analitics



#### 

## :rocket: Getting Started

### Installation
Frontend: (Port 3000)
```sh
cd client
npm install
npm run dev
```

Backend Node.js: (Port 3001)
```sh
cd node
npm install
npm run dev
```

Backend Python: (Port 3002)
```sh
cd server
python3 -m http.server 3002
```


## Requirements
* Node.js 12.18.4 https://nodejs.org/en/download/
* Python 3.x https://www.python.org/downloads/


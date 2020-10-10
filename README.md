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

#### JWT + Asymmetric Encryption based on RS256
A public key and a private key will be used to encrypt and decrypt the JWT by the authentication server and application server.

If the application server registered with the asymmetric encryption, The public key will be given to the application server to use as the decryption key while authentication server will use the private key for the encryption.

`data=base64urlEncode(header)+”.”+base64urlEncode(payload);`

`hashedData=hash(data,secret);`

`signature=base64urlEncode(hashedData);`

Then we encode the Header, Payload and the signature separately in base 64 and combine them with “.”.
```
Header:-eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9
Payload:-eyJ1c2VySWQiOiJiMDhmODZhZi0zNWRhLTQ4ZjItOGZhYi1jZWYzOTA0NjYwYmQifQ
Signature:- -xN_h82PHVTCMA9vdoHrcZxH-x5mb11y1537t3rGzcM
```
A complete JWT will be look like this
``` eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VySWQiOiJiMDhmODZhZi0zNWRhLTQ4ZjItOGZhYi1jZWYzOTA0NjYwYmQifQ.-xN_h82PHVTCMA9vdoHrcZxH-x5mb11y1537t3rGzcM
To identify how JWT works lets consider there is a authentication server, Application server and a user.
```

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


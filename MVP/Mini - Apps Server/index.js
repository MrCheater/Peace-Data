const express     =  require('express')
const rateLimit   =  require('express-rate-limit');
var merchant      =  require('./modules/merchant')
const app         =  express()
const port        =  3004


const limiter = rateLimit({
  windowMs: 1000,
  max: 3,
  message: JSON.stringify({"Error": "Вы слишком часто пользуетесь нашими услугами"})
});

app.post("/ml_data", async function (req, res) {
	res.set('Access-Control-Allow-Origin', '*')
	console.log("Done");
	res.send("Hello World!");
});

app.get("/verify_transaction", async function (req, res) {
	res.type('json');
	var results = await merchant.createMerchantTransaction(req.headers['accesstoken'], req.headers['apptoken'], req.headers['amount']);
	var Response = {}
	if (results[0] == true) { Response['status']= 'success'; Response['Token'] = results[3]; } else { Response['status'] = 'error' }
	Response['Message']    = results[1];
	Response['StatusCode'] = results[2];
	res.send(Response);
});

var server = app.listen(port, () => {
  console.log(`VTB API Port : ${port}`)
});

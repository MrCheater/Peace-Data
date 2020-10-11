var request   =  require('request');
var moment    =  require('moment')
const mysql   =  require('mysql2');
var md5       =  require('md5');

const connection = mysql.createConnection({
    host                     :  "server",
    user                     :  "username",
    password                 :  "password",
    database                 :  "db_name"
});

const statusCode = {
    "success"           : 200,
    "flud"              : 429,
    "bad_request"       : 400,
    "unauthorized"      : 401,
    "payment"           : 402,
    "forbidden"         : 403
}

var createMerchantTransaction = async function(AccessToken, AppToken, Amount) {
   return new Promise(function(resolve) {
    connection.query("SELECT * FROM users, merchant WHERE MD5(CONCAT('user:', users.u_id)) = '" + AccessToken + "' AND MD5(CONCAT('merchant:',merchant.m_id)) = '" + AppToken + "'",
        async function(err, results, fields) {
            if (typeof results !== 'undefined' && results.length > 0) {

            	console.log(results);

            	var user_id            =  results[0]['u_id'];
            	var merchant_id        =  results[0]['m_id']
            	var merchant_user_id   =  results[0]['m_connect'];
            	var amount             =  parseInt(Amount);
            	var currentTime        =  await moment().format('YYYY-MM-DD hh:mm:ss');
            	var TransactionToken   =  md5(user_id + merchant_user_id + amount + currentTime);

            	if (user_id !== merchant_user_id) {
            	if (amount > 0) {	
            	connection.query("INSERT INTO `transactions` (`t_id`, `t_from`, `t_to`, `t_merchant_id`, `t_amount`, `t_timestamp`, `t_status`) VALUES (NULL, '" + user_id + "', '" + merchant_user_id + "', '" + merchant_id + "', '" + amount + "', '" + currentTime + "', 'wait');",
            	async function(err, results, fields) {
            	if (err) throw err;
            	    return resolve([true, "Операция выполнена успешно. Ожидание подтверждения пользователя", statusCode['success'], TransactionToken]);
            	}) } else {
            		return resolve([false, "Сумма транзакции должна быть больше 0 Рублей", statusCode['bad_request']]);
            	} } else {
            		return resolve([false, "Владелец приложения не может осуществить перевод самому себе", statusCode['bad_request']]);
            	} } else {
                    return resolve([false, "Отказано в доступе. Не верные ключи авторизации", statusCode['unauthorized']]);
            }
        }
    );
});
}

module.exports = {createMerchantTransaction}
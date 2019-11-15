const express = require('express');
const app = express();
const http = require('http').Server(app);
//Database
// const MongoClient = require('mongodb').MongoClient;
// const url = "mongodb://127.0.0.1:27017/eventerdb";
//
// MongoClient.connect(url, function searchUser (err, db) {
//   if (err) throw err;
//   var dbo = db.db("eventerdb");
//   var query = { username: "Noach",
//                 password: "aserehe",
//                 email: "email@email.com"
//                 };
//   dbo.collection("customers").find(query).toArray(function(err, result) {
//     if (err) throw err;
//     console.log(result);
//     db.close();
//   });
// });


//
app.use(express.static(__dirname));

app.get('/', function(req, res) {
    res.sendFile(__dirname + '/html/index.html');
});

app.get('/login.html', function(req, res) {
    res.sendFile(__dirname + '/html/login.html');
});

app.get('/register.html', function(req, res) {
    res.sendFile(__dirname + '/html/register.html');
});

//eomain
app.get('/eomain.html', function(req, res) {
    res.sendFile(__dirname + '/html/eomain.html');
});



//Footer
app.get('/aboutus.html', function(req, res) {
    res.sendFile(__dirname + '/html/aboutus.html');
});

app.get('/followus.html', function(req, res) {
    res.sendFile(__dirname + '/html/followus.html');
});

app.get('/contact.html', function(req, res) {
    res.sendFile(__dirname + '/html/contact.html');
});

const server = http.listen(3000, function() {
    console.log('Server starts in *:3000');
});

const express = require('express');
const app = express();
const http = require('http').Server(app);

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



const server = http.listen(3000, function() {
    console.log('Server starts in *:3000');
});
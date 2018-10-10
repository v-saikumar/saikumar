const express = require('express');
const bodyParser= require('body-parser');
const path = require('path');
var mongo = require('mongodb'); 
var MongoClient = require('mongodb').MongoClient;
var url = "mongodb://localhost:27017/mydatabase";

const app = express();

app.use(bodyParser.urlencoded({extended: true}));



MongoClient.connect(url, function(err, db) {
  if (err) throw err;
  console.log("Database connected successfully !");
  db.close();
});

app.get('/',function(req,res){
	res.sendFile((__dirname + '/index.html'));
});

app.post('/quotes',function(req,res){
	console.log(req.body);
});

app.listen(3000,function(){
	console.log('server started onport 3000...');
});
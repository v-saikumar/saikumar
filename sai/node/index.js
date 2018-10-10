const express = require('express');
const path = require('path');
const mongoose = require('mongoose');
mongoose.connect('mongodb://localhost/mydatabase');
let db = mongoose.connection;


// Ckeck DB connection
db.once('open',function(){
	console.log('connected to server...');
});
// Check for DB errors
db.on('error',function(err){
	console.log(err);
});

// init App
const app = express();

// Bring models
let Article = require('./models/articles')

// Load view engine
app.set('views', path.join(__dirname,'views'));
app.set('view engine', 'pug');

// Home  route
app.get('/', function(req,res){

	Article.find({},function(err,articles){
		if(err){
			console.log(err);
		}else{
			res.render('index',{
			title: 'Hello',
			articles: articles
			});
		}
	});

	// let articles = [{
	// 	id: 1,
	// 	title: 'Article One',
	// 	author: 'Sai Kumar',
	// 	body: 'This is article one'
	// },
	// {
	// 	id: 1,
	// 	title: 'Article Two',
	// 	author: 'Johne de',
	// 	body: 'This is article two'
	// },
	// {
	// 	id: 3,
	// 	title: 'Article Three',
	// 	author: 'brad travcy',
	// 	body: 'This is article Three'
	// }
	// ];
	
});

// Add route
app.get('/articles/add', function(req,res){
	res.render('add_articles',{
		title: 'Add Articles'
	});
});
// start server
app.listen(8080,function(){
	console.log('server started on port 8080....')
});
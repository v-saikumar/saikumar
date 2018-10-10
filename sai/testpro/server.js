var mongo = require('mongodb');

var MongoClient = require('mongodb').MongoClient;
var url = "mongodb://localhost:27017/mydb";

MongoClient.connect(url,function(err,database){
	if (err) throw error;
	//console.log('database created');
	var dbo = database.db('mydb');
	//var myobj = {name:"company inc", address:"madhapur"};
	var myobj = [
    { name: 'John', address: 'Highway 71'},
    { name: 'Peter', address: 'Lowstreet 4'},
    { name: 'Amy', address: 'Apple st 652'},
    { name: 'Hannah', address: 'Mountain 21'},
    { name: 'Michael', address: 'Valley 345'},
    { name: 'Sandy', address: 'Ocean blvd 2'},
    { name: 'Betty', address: 'Green Grass 1'},
    { name: 'Richard', address: 'Sky st 331'},
    { name: 'Susan', address: 'One way 98'},
    { name: 'Vicky', address: 'Yellow Garden 2'},
    { name: 'Ben', address: 'Park Lane 38'},
    { name: 'William', address: 'Central st 954'},
    { name: 'Chuck', address: 'Main Road 989'},
    { name: 'Viola', address: 'Sideway 1633'}
  ];
	//dbo.collection("customers").insertOne(myobj,function(err,res){
	//dbo.collection("customers").insertMany(myobj,function(err,res){
	//dbo.collection("customers").findOne({},function(err,result){
	//dbo.collection("customers").find({}).toArray(function(err,result){
	dbo.collection("customers").find({},{ _id: 0, name: 1, address: 0 }).toArray(function(err,result){
		if(err) throw err;
		//console.log(result.name);
		//console.log('Number of documents inserted:' + res.insertedCount);
		console.log(result);
	database.close();
	});
	// dbo.createCollection("customers",function(err,res){
	//	if(err) throw err;
	// 	console.log('collection created');
		
	// });
	
});
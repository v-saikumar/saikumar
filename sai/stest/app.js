var http = require('http');
var dt = require('./module'); // import module.js file

http.createServer(function (req, res){
	res.writeHead(200,{'content-type':'text/html'});
	res.write('The date and Time are currently :' + dt.mydateTime());
	res.end();
}).listen(8080,'localhost');
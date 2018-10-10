var http = require('http');
http.createServer(function (req,res){
	res.writeHead(200,{'content-type':'text/html'});
	res.write(req.url);
	res.write('hello world');
	res.end();
}).listen(8080);
// console.log('hai');
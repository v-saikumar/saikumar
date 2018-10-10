var fs = require('fs');
// fs.unlink('mynewfile3.txt',function(err){
// 	if (err) throw err;
// 	console.log('file deleted');
// });
fs.rename('newfile2.txt','mynewfile.txt',function(err){
	if (err) throw err;
	console.log('renamed file !');
});
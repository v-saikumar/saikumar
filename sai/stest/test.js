var fs = require('fs');
//Create a new file using the appendFile() method
fs.appendFile('newfile.txt',' this my new text 2',function(err){
if(err) throw err;
// console.log('saved');
console.log('update');
});

// fs.open('newfile2.txt','w',function(err,file){
// 	if(err) throw err;
// 	console.log('Saved !');
// });


fs.writeFile('mynewfile3.txt', 'Hello content!', function (err) {
  if (err) throw err;
  console.log('Saved!');
});
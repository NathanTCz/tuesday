var socket = require('socket.io');
var express = require('express');
var http = require('http');

var app = express();
var server = http.createServer(app);

var count = 0;

var io = socket.listen(server);

io.on('connection', function(socket){
  count += 1;
  io.emit('user conn', count);

  socket.on('chat message', function(msg){
    console.log(msg);
    io.emit('chat message', msg);
  });

  socket.on('disconnect', function(socket){
    count -=1;
    io.emit('user disconn', count);
  });
});

server.listen(8080, function(){
  console.log('listening on *:8080');
});

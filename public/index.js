var socket = require('socket.io');
var express = require('express');
var http = require('http');

var app = express();
var server = http.createServer(app);

var io = socket.listen(server);

io.on('connection', function(socket){
  console.log('someone connected');
  socket.on('chat message', function(msg){
    console.log(msg);
    io.emit('chat message', msg);
  });
});

server.listen(8080, function(){
  console.log('listening on *:8080');
});

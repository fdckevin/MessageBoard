const express = require('express');
const app = express();
const http = require('http');
const server = http.createServer(app);
const { Server } = require("socket.io");
const io = require('socket.io')(server, {
    cors: {
        origin: '*',
    }
});

// app.get('/', (req, res) => {
//   res.send('<h1>Hello world</h1>');
// });

io.on('connection', (socket) => {
  
  socket.on('comment', () =>{
    socket.to(room).emit("receive-comment");
  });

  socket.on('message', () =>{
    io.emit('receive-message');
  });

   socket.on("join", (room) => {
    console.log(room);
    socket.join(room);
  });

});

server.listen(4000, () => {
    console.log('listening on *:4000');
});
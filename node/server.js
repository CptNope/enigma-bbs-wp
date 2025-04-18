const WebSocket = require('ws');
const pty = require('node-pty');

const server = new WebSocket.Server({ port: 3001 });

server.on('connection', socket => {
    const shell = pty.spawn('/bin/bash', [], {
        name: 'xterm-color',
        cols: 80,
        rows: 30,
        cwd: process.env.HOME,
        env: process.env
    });

    shell.on('data', data => socket.send(data));
    socket.on('message', msg => shell.write(msg));
    socket.on('close', () => shell.kill());
});

document.addEventListener("DOMContentLoaded", function() {
  const term = new Terminal();
  term.open(document.getElementById("terminal"));
  const socket = new WebSocket("ws://localhost:3001");

  socket.onopen = () => term.write("Connected to Enigma BBS\r\n");
  socket.onmessage = e => term.write(e.data);
  term.onData(data => socket.send(data));
});

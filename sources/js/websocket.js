
const socket = new WebSocket('wss://klificamefisico.comunisoft.com');

socket.addEventListener('message', function (event) {
  // Actualizar la página o realizar acciones en respuesta al nuevo registro
  console.log('Nuevo mensaje recibido:', event.data);
});

socket.addEventListener('close', function (event) {
  console.log('Conexión cerrada');
});

socket.addEventListener('error', function (event) {
  console.error('Error de WebSocket:', event);
});
// Obtener el elemento de video
var video = document.getElementById('video');
var infoDiv = document.getElementById('info');

// Crea un nuevo escáner de código QR
var scanner = new Instascan.Scanner({ video: video });

// Callback que se ejecuta cuando se detecta un código QR
scanner.addListener('scan', function (content) {
  // Detener el escaneo y el video
  scanner.stop();
  video.pause();
  // Mostrar la información en la página web
  infoDiv.textContent = 'Código QR escaneado: ' + content;
  // informacion esperada 
  expectedInfo='luna , 7711121461 , Nada'
  // Comparar la información escaneada con la información esperada
  if (content === expectedInfo) {
    infoDiv.style.color = 'green'; // Cambiar el color del texto a verde si coinciden
    infoDiv.textContent += ' - ¡Coincide con la información esperada!';
  } else {
    infoDiv.style.color = 'red'; // Cambiar el color del texto a rojo si no coinciden
    infoDiv.textContent += ' - No coincide con la información esperada.';
  }
  infoDiv.style.display = 'block';
});

// Iniciar el escáner
Instascan.Camera.getCameras().then(function (cameras) {
  if (cameras.length > 0) {
    scanner.start(cameras[0]);
  } else {
    console.error('No se ha encontrado ninguna cámara en el dispositivo.');
  }
}).catch(function (e) {
  console.error(e);
});

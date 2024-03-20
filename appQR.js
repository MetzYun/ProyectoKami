const contenedorQR = document.getElementById('contenedorQR');
const formulario = document.getElementById('formulario');

const QR = new QRCode(contenedorQR);

formulario.addEventListener('submit', (e) => {
	e.preventDefault();
	QR.makeCode(formulario.nombre.value + " , " + formulario.telefono.value+ " , " + formulario.descripcion.value);
});
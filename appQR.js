const contenedorQR = document.getElementById('contenedorQR');
const formulario = document.getElementById('formulario');
const QR = new QRCode(contenedorQR);
const generarBoton = document.getElementById('generarQR');
const descargarBoton = document.getElementById('descargarQR');
generarBoton.addEventListener('click', (e) => {
	e.preventDefault();
	QR.makeCode(formulario.nombre.value + " , " + formulario.telefono.value+ " , " + formulario.descripcion.value);
	descargarBoton.style.display = 'block';
});

descargarBoton.addEventListener('click', () => {
    // Obtiene la imagen del código QR generada
    const qrImage = contenedorQR.querySelector('img');

    // Crea un lienzo (canvas) para manipular la imagen
    const canvas = document.createElement('canvas');
    const ctx = canvas.getContext('2d');

    // Establece el tamaño del lienzo igual al tamaño de la imagen más el espacio adicional para el título
    canvas.width = qrImage.width + 20; // Agrega 20 píxeles para el borde
    canvas.height = qrImage.height + 50; // Agrega 40 píxeles para el borde y el título

    // Dibuja un fondo de color al lienzo
    ctx.fillStyle = '#e7d0e6'; // Color de fondo
    ctx.fillRect(0, 0, canvas.width, canvas.height); // Dibuja un rectángulo del tamaño del lienzo
	// fecha actual 
	const fechaActual = new Date();
	// Obtiene el año, mes y día actual
	const año = fechaActual.getFullYear();
	const mes = fechaActual.getMonth() + 1; // Los meses comienzan desde 0, por lo que sumamos 1
	const día = fechaActual.getDate();
	// Formatea la fecha actual como YYYY-MM-DD
	const fechaFormateada = año + '-' + (mes < 10 ? '0' : '') + mes + '-' + (día < 10 ? '0' : '') + día;
    // Dibuja el título centrado
    const titleText = 'Pedido Kaymi '+fechaFormateada;
	ctx.font = 'bold 18px "Montserrat Alternates", sans-serif'; // Establece el tamaño y la tipografía del título
    ctx.fillStyle = '#783d8f'; // Color del título
    const titleWidth = ctx.measureText(titleText).width; // Obtiene el ancho del texto del título
    const titleX = (canvas.width - titleWidth) / 2; // Calcula la posición X para centrar el título
    ctx.fillText(titleText, titleX, 25); // Dibuja el título centrado en X y en la posición Y 20

    // Dibuja la imagen en el lienzo con un borde de 10 píxeles
    ctx.drawImage(qrImage, 10, 30, qrImage.width, qrImage.height); // Dibuja la imagen QR con un desplazamiento de 10 píxeles para el borde y el título

    // Crea un enlace temporal para descargar la imagen
    const enlaceDescarga = document.createElement('a');
    enlaceDescarga.href = canvas.toDataURL('image/png');
    enlaceDescarga.download = 'MiCodigoQR'; // Nombre del archivo a descargar
    document.body.appendChild(enlaceDescarga);
    enlaceDescarga.click();
    document.body.removeChild(enlaceDescarga);
});




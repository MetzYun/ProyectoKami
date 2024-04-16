<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calificaciones y Reseñas</title>
    <style>
        /* Estilos CSS aquí */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .contenedor {
            max-width: 600px;
            margin: 50px auto;
            background-color: #e7d8ef; /* Morado claro */
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .titulo {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }

        .resena {
            border-bottom: 1px solid #eee;
            padding-bottom: 20px;
            margin-bottom: 20px;
        }

        .usuario {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .usuario img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .nombre-usuario {
            font-weight: bold;
            color: #555;
        }

        .estrellas {
            margin-bottom: 10px;
        }

        .estrellas img {
            width: 30px;
            height: 30px;
            margin-right: 5px;
            cursor: pointer;
        }

        .comentario {
            color: #333;
        }

        .agregar-comentario {
            display: flex;
            margin-top: 20px;
        }

        .agregar-comentario input[type="text"] {
            flex: 1;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px 0 0 5px;
            font-size: 16px;
        }

        .agregar-comentario input[type="submit"] {
            padding: 10px 20px;
            border: none;
            background-color: #555;
            color: #fff;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
            font-size: 16px;
        }

        .eliminar-resena {
            color: #ff0000;
            cursor: pointer;
            display: inline-block; /* Cambiado a inline-block para que se muestre en la misma línea */
            margin-left: 10px; /* Añadido margen izquierdo para separarlo del comentario */
        }

        .eliminar-resena:hover {
            text-decoration: underline; /* Subrayado al pasar el mouse */
        }
    </style>
</head>
<body>
    <div class="contenedor">
        <div class="titulo">Calificaciones y Reseñas</div>
        <div class="resena">
            <div class="usuario">
                <img src="avatar_vacio.png" alt="Avatar Usuario">
                <div class="nombre-usuario">Nombre de Usuario</div>
            </div>
            <div class="estrellas">
                <img src="estrella_vacia.png" alt="Estrella" onclick="calificar(1)">
                <img src="estrella_vacia.png" alt="Estrella" onclick="calificar(2)">
                <img src="estrella_vacia.png" alt="Estrella" onclick="calificar(3)">
            </div>
            <div class="comentario">Compré varias prendas y realmente no me arrepiento. Les recomiendo mucho esta tienda, puedes encontrar prendas super bonitas a un buen precio.</div>
            <div class="eliminar-resena" onclick="eliminarResena()">Eliminar</div>
        </div>
        <div class="agregar-comentario">
            <input type="text" placeholder="Agregar un comentario">
            <input type="submit" value="Enviar" onclick="agregarComentario()">
        </div>
    </div>

    <script>
        function calificar(valor) {
            var estrellas = document.querySelectorAll('.estrellas img');
            for (var i = 0; i < estrellas.length; i++) {
                if (i < valor) {
                    estrellas[i].setAttribute('src', 'estrella_llena.png');
                } else {
                    estrellas[i].setAttribute('src', 'estrella_vacia.png');
                }
            }
        }

        function eliminarResena() {
            var resena = document.querySelector('.resena');
            resena.parentNode.removeChild(resena);
        }

        function agregarComentario() {
            var inputComentario = document.querySelector('.agregar-comentario input[type="text"]');
            var comentario = inputComentario.value.trim();
            if (comentario !== '') {
                var nuevaResena = document.createElement('div');
                nuevaResena.classList.add('resena');

                nuevaResena.innerHTML = `
                    <div class="usuario">
                        <img src="avatar_vacio.png" alt="Avatar Usuario">
                        <div class="nombre-usuario">Nombre de Usuario</div>
                    </div>
                    <div class="estrellas">
                        <img src="estrella_vacia.png" alt="Estrella" onclick="calificar(1)">
                        <img src="estrella_vacia.png" alt="Estrella" onclick="calificar(2)">
                        <img src="estrella_vacia.png" alt="Estrella" onclick="calificar(3)">
                    </div>
                    <div class="comentario">${comentario}</div>
                    <div class="eliminar-resena" onclick="eliminarResena()">Eliminar</div>
                `;

                document.querySelector('.contenedor').insertBefore(nuevaResena, document.querySelector('.agregar-comentario'));
                inputComentario.value = ''; // Limpiar el campo de texto después de agregar el comentario
            }
        }
    </script>
</body>
</html>

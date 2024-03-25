<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Bazar</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: row; /* Modificado a row para que el menú y el contenido estén en línea */
        }
        nav {
            background-color: #333; /* Color de fondo del menú */
            color: #fff;
            padding: 20px;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0; /* Abarca toda la altura de la página */
            z-index: 1000;
            transition: width 0.3s; /* Añadida transición de ancho */
            overflow-x: hidden; /* Evita que el contenido se desborde cuando el menú está reducido */
        }
        nav.closed {
            width: 60px; /* Ancho reducido cuando el menú está cerrado */
        }
        nav h1 {
            margin: 0;
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
        }
        nav img {
            display: block;
            margin: 0 auto;
            width: 150px;
            height: auto;
            margin-bottom: 20px;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        nav ul.closed {
            display: none; /* Ocultamos la lista cuando el menú está cerrado */
        }
        nav ul li {
            margin-bottom: 10px;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 18px;
        }
        #menuBtn {
            position: fixed;
            top: 20px;
            left: 10px;
            background-color: #333;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px;
            cursor: pointer;
            z-index: 1001;
            transition: left 0.3s; /* Añadida transición de posición */
        }
        #menuBtn.closed {
            left: 270px; /* Posición desplazada cuando el menú está cerrado */
        }
        .container {
            max-width: calc(100% - 250px); /* Modificado para que el contenido tenga el ancho restante */
            margin-left: 250px; /* Modificado para dejar espacio para el menú */
            padding: 100px 20px 20px 20px; /* Ajustado el padding */
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: flex-start; /* Alinea los productos horizontalmente */
        }
        .product {
            border: 1px solid #ddd;
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            width: 250px;
            margin: 10px;
        }
        .product:hover {
            transform: translateY(-5px);
        }
        .product img {
            max-width: 100%;
            height: auto;
            border-bottom: 1px solid #ddd;
        }
        .product-content {
            padding: 20px;
        }
        .product h2 {
            font-size: 20px;
            margin-top: 0;
            margin-bottom: 10px;
            color: #333;
        }
        .product p {
            margin-top: 0;
            color: #666;
        }
        .product button {
            display: block;
            width: 100%;
            padding: 10px 0;
            border: none;
            background-color: #4CAF50; /* Verde */
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .product button:hover {
            background-color: #45a049;
        }
        .search-container {
            position: absolute;
            top: 20px;
            right: 20px;
            text-align: right;
        }
        .search-container input[type=text] {
            padding: 10px;
            width: 70%;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-right: 10px;
            font-size: 16px;
        }
        .search-container button {
            padding: 10px 20px;
            background-color: #4CAF50; /* Verde */
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<nav id="sideMenu">
    <img src="https://via.placeholder.com/150" alt="Logo">
    <h1>Catálogo</h1>
    <ul>
        <li><a href="#" class="menuItem">Productos</a></li>
        <li><a href="#" class="menuItem">Registros</a></li>
        <li><a href="#" class="menuItem">Pedidos</a></li>
        <li><a href="#" class="menuItem">Usuarios</a></li>
        <li><a href="#" class="menuItem">Registrar</a></li>
        <li><a href="#" class="menuItem">Cerrar sesión</a></li>
    </ul>
</nav>

<!-- Agregamos un botón de menú -->
<button id="menuBtn" onclick="toggleMenu()">☰</button>

<div class="search-container">
    <input type="text" placeholder="Buscar productos...">
    <button type="submit">Buscar</button>
</div>

<div class="container">
    <div class="product">
        <img src="https://via.placeholder.com/250" alt="Producto 1">
        <div class="product-content">
            <h2>Producto 1</h2>
            <p>Descripción del producto 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <p>Precio: $XX.XX</p>
            <button>Añadir al carrito</button>
        </div>

        <div class="product">
        <img src="https://via.placeholder.com/250" alt="Producto 1">
        <div class="product-content">
            <h2>Producto 1</h2>
            <p>Descripción del producto 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <p>Precio: $XX.XX</p>
            <button>Añadir al carrito</button>
        </div>
        <div class="product">
        <img src="https://via.placeholder.com/250" alt="Producto 1">
        <div class="product-content">
            <h2>Producto 1</h2>
            <p>Descripción del producto 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <p>Precio: $XX.XX</p>
            <button>Añadir al carrito</button>
        </div>
   
   

     

    <!-- Otros productos aquí -->

</div>


    <script>
    function toggleMenu() {
        var sideMenu = document.getElementById("sideMenu");
        var menuBtn = document.getElementById("menuBtn");
        var menuItems = document.querySelectorAll(".menuItem");
        
        if (sideMenu.classList.contains("closed")) {
            sideMenu.classList.remove("closed");
            menuBtn.classList.remove("closed");
            menuItems.forEach(function(item) {
                item.style.display = "block";
            });
        } else {
            sideMenu.classList.add("closed");
            menuBtn.classList.add("closed");
            menuItems.forEach(function(item) {
                item.style.display = "none";
            });
        }
    }
</script>


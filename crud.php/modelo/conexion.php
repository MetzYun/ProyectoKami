<?php
    $servername = "localhost"; // Cambia "localhost" si tu servidor de base de datos tiene un nombre diferente
    $username = "root"; // Nombre de usuario de la base de datos
    $password = ""; // Contraseña de la base de datos (deja en blanco si no hay contraseña)
    $database = "bazar"; // Nombre de la base de datos

    // Crea la conexión
    $conexion = new mysqli($servername, $username, $password, $database);

    // Verifica la conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // Establece el conjunto de caracteres a UTF-8
    $conexion->set_charset("utf8");
?>

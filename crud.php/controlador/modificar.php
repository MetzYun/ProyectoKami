<?php

if(!empty($_POST["btnModificar"])) {
    if(!empty($_POST["prenda"]) and !empty($_POST["descripcion"]) and !empty($_POST["talla"]) and !empty($_POST["precio"])) {
        $id = $_POST["id"];
        $prenda = $_POST["prenda"];
        $descripcion = $_POST["descripcion"];
        $talla = $_POST["talla"];
        $precio = $_POST["precio"];
        $sql = $conexion->query("UPDATE productos SET prenda='$prenda', descripcion='$descripcion', talla='$talla', precio='$precio' WHERE id=$id ");
        if ($sql == 1) {
            echo '<div class="alert alert-success">Producto modificado correctamente (;</div>';
            // Redireccionar a la vista crud.php inmediatamente
            header("Location: http://localhost:8080/projecto/crud.php");
            exit(); // Asegura que se detenga la ejecución del script después de enviar la cabecera de ubicación
        } else {
            echo '<div class="alert alert-danger">ERROR: El producto no fue modificado</div>';
        }
    } else {
        echo '<div class="alert alert-danger">ERROR: Por favor completa todos los campos</div>';
    }
}

         
?>

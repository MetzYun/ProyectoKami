<?php
if (!empty($_POST["btnAgregar"])) {
    if (!empty($_POST["prenda"]) && !empty($_POST["descripcion"]) && !empty($_POST["talla"]) && !empty($_POST["precio"])) {

        $prenda = $_POST["prenda"];
        $descripcion = $_POST["descripcion"];
        $talla = $_POST["talla"];
        $precio = $_POST["precio"];

        $sql = $conexion->query("INSERT INTO productos (prenda, descripcion, talla, precio) VALUES ('$prenda', '$descripcion', '$talla', '$precio')");
        if ($sql == 1) {
            echo '<div class="alert alert-success">Producto agregado correctamente (;</div>';
        } else {
            echo '<div class="alert alert-danger">ERROR: El producto no fue agregado</div>';
        }

    } else {
        echo '<div class="alert alert-warning">Algun campo está vacío</div>';
    }
}
?>

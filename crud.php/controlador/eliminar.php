<?php

if(!empty($_GET["id"])){
    $id=$_GET["id"];
    $sql=$conexion->query("DELETE from productos WHERE id=$id");
    if($sql==1){
        echo '<div class="alert alert-success">Producto eliminado correctamente (;</div>';
    }else{
        echo '<div class="alert alert-danger">ERROR al momemnto de eliminar</div>';
    }
}
?>
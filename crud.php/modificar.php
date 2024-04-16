<?php 
    include "modelo/conexion.php";
    $id = $_GET["id"];
    $sql = $conexion->query("SELECT * FROM productos WHERE id= $id");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Nuevos Productos</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos.css">
    
</head>
<body class="color-de-fondo">
    <br>
        <form style="width: 50%; margin: 0 auto;" method="POST">
            <h3 style="text-align: center;" class="alert alert-secondary">Modificar Productos</h3>
            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">

            <?php 
                include "controlador/modificar.php";
                while ($datos = $sql->fetch_object())  { 
            ?>
                    <div style="margin-bottom: 10px;">
                        <label for="prenda">Prenda</label>
                        <input type="text" id="prenda" class="form-control" name="prenda" value="<?php echo $datos->prenda; ?>">
                    </div>
                    <div style="margin-bottom: 10px;">
                        <label for="descripcion">Descripción</label>
                        <input type="text" id="descripcion" class="form-control" name="descripcion" value="<?php echo $datos->descripcion; ?>">
                    </div>
                    <div style="margin-bottom: 10px;">
                        <label for="talla">Talla</label>
                        <input type="text" id="talla" class="form-control" name="talla" value="<?php echo $datos->talla; ?>">
                    </div>
                    <div style="margin-bottom: 10px;">
                        <label for="precio">Precio</label>
                        <input type="text" id="precio" class="form-control" name="precio" value="<?php echo $datos->precio; ?>">
                    </div>
                <?php }
                 ?>
            
            <button type="submit" class="btnColor btn-primary"name="btnModificar" value="ok"">Modificar Producto</button>
        </form>
</body>
</html>  

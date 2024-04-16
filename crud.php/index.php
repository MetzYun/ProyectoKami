<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Nuevos Productos</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/646ac4fad6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilos.css">
</head>
<body class="color-de-fondo">

<script>
    function eliminar() {
        var respuesta=confirm("Estas seguro que quieres eliminar");
        return respuesta
    }
</script>
<div class="container">
    <br>

    <h3 class="text-center text-secondary">Registro de Productos</h3>
    
    <?php
        include "modelo/conexion.php";
        include "controlador/eliminar.php";
    ?>

    <div class="row">
        <div class="col-md-4">
            <form class="p-3" method="POST">
                
                <?php
                
                include "controlador/regristro_productos.php";
                ?>
                <div class="mb-3">
                    <label for="prenda" class="form-label">Prenda</label>
                    <input type="text" class="form-control" id="prenda" name="prenda">
                </div>
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion">
                </div>
                <div class="mb-3">
                    <label for="talla" class="form-label">Talla</label>
                    <input type="text" class="form-control" id="talla" name="talla">
                </div>
                <div class="mb-3">
                    <label for="precio" class="form-label">Precio</label>
                    <input type="text" class="form-control" id="precio" name="precio">
                </div>
                <button type="submit" class="btnColor" name="btnAgregar" value="ok">Agregar Producto</button>
            </form>
        </div>
        <div class="col-md-8 p-4">
            <table class="table">
                <thead class="color-de-tabla">
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Prenda</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Talla</th>
                        <th scope="col">Precio</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                     include "modelo/conexion.php";
                     $sql = $conexion->query("select * from productos");
                     while($datos = $sql->fetch_object()){?>
                        <tr>
                            <td><?= $datos->id ?></td>
                            <td><?= $datos->prenda ?></td>
                            <td><?= $datos->descripcion ?></td>
                            <td><?= $datos->talla ?></td>
                            <td><?= $datos->precio ?></td>
                            <td>
                                
                                <a href="modificar.php?id=<?=$datos->id ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a  onclick="return eliminar()" href="index.php?id=<?=$datos->id ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>

                    <?php }
                    ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div> 


<!-- Bootstrap JS (opcional, solo si necesitas funcionalidad de Bootstrap que requiera JS) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

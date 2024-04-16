<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Pedidos - Tienda de Ropa</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #7f78d2; /* Morado claro */
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #7f78d2; /* Morado claro */
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
        .btn {
            background-color: #7f78d2; /* Morado claro */
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #684db9; /* Morado oscuro al pasar el cursor */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Gestión de Pedidos</h1>
        <table>
            <thead>
                <tr>
                    <th>ID Pedido</th>
                    <th>Fecha</th>
                    <th>Cliente</th>
                    <th>Total</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>001</td>
                    <td>2024-04-17</td>
                    <td>Juan Pérez</td>
                    <td>$120.50</td>
                    <td>Pendiente</td>
                    <td>
                        <button class="btn">Eliminar</button>
                        <button class="btn">Modificar</button>
                    </td>
                </tr>
                <tr>
                    <td>002</td>
                    <td>2024-04-16</td>
                    <td>María García</td>
                    <td>$75.20</td>
                    <td>En Proceso</td>
                    <td>
                        <button class="btn">Eliminar</button>
                        <button class="btn">Modificar</button>
                    </td>
                </tr>
                <tr>
                    <td>003</td>
                    <td>2024-04-15</td>
                    <td>Luis Martínez</td>
                    <td>$200.00</td>
                    <td>Entregado</td>
                    <td>
                        <button class="btn">Eliminar</button>
                        <button class="btn">Modificar</button>
                    </td>
                </tr>
                <tr>
                    <td>004</td>
                    <td>2024-04-14</td>
                    <td>Ana Rodríguez</td>
                    <td>$90.80</td>
                    <td>Cancelado</td>
                    <td>
                        <button class="btn">Eliminar</button>
                        <button class="btn">Modificar</button>
                    </td>
                </tr>
            </tbody>
        </table>
        <button class="btn" style="margin-top: 20px;">Agregar Pedido</button>
    </div>
</body>
</html>

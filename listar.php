<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./CCS/style.css">
    <meta charset="utf-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tienda de ropa</h1>
    <button type="submit"><a href="./index.html">Inicio</a></button>
    <button type="submit"><a href="./listar.php">Listar con foto</a></button>
    <button type="submit"><a href="./listacompleta.php">Listar todo</a></button>
    <button type="submit"><a href="./listabuzos.php">Listar buzos</a></button>
    <button type="submit"><a href="./listanike.php">Listar nike</a></button>
    <button type="submit"><a href="./listaprecio.php">Listar precios mayores $500</a></button>
    <button type="submit"><a href="./listarencards.php">Vista con cards</a></button>
    <button type="submit"><a href="./agregar.html">Agregar prensa</a></button>
    <h2>Lista de ropa</h2>
    <p>La siguiente lista muestra los datos de la ropa actualmente en stock.</p>
    <table border="1">
    <tr>
        <th>ID</th>
        <th>TIPO DE PRENDA</th>
        <th>MARCA</th>
        <th>TALLE</th>
        <th>PRECIO</th>
        <th>IMAGEN</th>
        <th>EDITAR</th>
        <th>BORRAR</th>
    </tr>
    <?php
    // 1) Conexion
    $conexion = mysqli_connect("127.0.0.1", "root", "");
    mysqli_select_db($conexion, "db_zara");

    // 2) Preparar la orden SQL
    // Sintaxis SQL SELECT
    // SELECT * FROM nombre_tabla
    // => Selecciona todos los campos de la siguiente tabla
    // SELECT campos_tabla FROM nombre_tabla
    // => Selecciona los siguientes campos de la siguiente tabla
    $consulta='SELECT * FROM ropa';

    // 3) Ejecutar la orden y obtenemos los registros
    $datos= mysqli_query($conexion, $consulta);

    // 4) Mostrar los datos del registro
    while ($reg=mysqli_fetch_array($datos)) { ?>
        <tr>
        <td><?php echo $reg['idropa']; ?></td>
        <td><?php echo $reg['tipo_prenda']; ?></td>
        <td><?php echo $reg['marca']; ?></td>
        <td><?php echo $reg['talle']; ?></td>
        <td><?php echo $reg['precio']; ?></td>
        <td><img src="data:image/png;base64, <?php echo base64_encode($reg['foto'])?>" alt="" width="100px" height="100px"></td>
        <td><a href="modificar.php?idropa=<?php echo $reg['idropa'];?>">Editar</a></td>
        <td><a href="borrar.php?idropa=<?php echo $reg['idropa'];?>">Borrar</a></td>
        </tr>
    <?php } ?>
    </table>
</body>
</html>

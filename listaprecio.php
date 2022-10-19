<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" href="./CCS/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tienda de ropa</h1>
    <button type="submit"><a href="./index.html">Inicio</a></button>
    <button type="submit"><a href="./listacompleta.php">Lista de ropa</a></button>
    <button type="submit"><a href="./listabuzos.php">Lista de buzos</a></button>
    <button type="submit"><a href="./listanike.php">Lista de nike</a></button>
    <button type="submit"><a href="./listaprecio.php">Lista precios mayores $500</a></button>
    <button type="submit"><a href="./listarencards.php">Vista con cards</a></button>

    <h2>Lista de ropa</h2>
    <p>La siguiente lista muestra los datos de la ropa actualmente en stock.</p>
    <table border="1">
    <tr>
        <th>TIPO DE PRENDA</th>
        <th>MARCA</th>
        <th>TALLE</th>
        <th>PRECIO</th>
    </tr>
    <?php
    // 1) Conexion
    $conexion=mysqli_connect("127.0.0.1","root","");
    mysqli_select_db($conexion,"db_zara");
    
    // 2) Preparar la orden SQL
    // Sintaxis SQL SELECT
    // SELECT * FROM nombre_tabla
    // => Selecciona todos los campos de la siguiente tabla
    // SELECT campos_tabla FROM nombre_tabla
    // => Selecciona los siguientes campos de la siguiente tabla
    $consulta ="select * from ropa where precio>=500 ";

    // 3) Ejecutar la orden y obtenemos los registros
    $datos= mysqli_query ($conexion, $consulta);


    // 4) Mostrar los datos del registro
    $fila =mysqli_fetch_array($datos);    
    
    while ($fila =mysqli_fetch_array($datos)) { ?>
        <tr>
        <td><?php echo $fila['tipo_prenda']; ?></td>
        <td><?php echo $fila['marca']; ?></td>
        <td><?php echo $fila['talle']; ?></td>
        <td><?php echo $fila['precio']; ?></td>
        </tr>
    <?php } ?>
    </table>
</body>
</html>

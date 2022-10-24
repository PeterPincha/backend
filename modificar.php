<?php
// 1) Conexion
// a) realizar la conexion con la bbdd
// b) seleccionar la base de datos a usar
$conexion = mysqli_connect("127.0.0.1", "root", "");
mysqli_select_db($conexion, "db_zara");

// 2) Almacenamos los datos del envío GET
// a) generar variables para el id a utilizar
$idropa = $_GET['idropa'];

// 3) Preparar la orden SQL
// => Selecciona todos los campos de la tabla alumno donde el campo dni sea igual a $dni
// a) generar la consulta a realizar
$consulta = "SELECT * FROM ropa WHERE idropa=$idropa";

// 4) Ejecutar la orden y almacenamos en una variable el resultado
// a) ejecutar la consulta
$respuesta = mysqli_query($conexion, $consulta);

// 5) Transformamos el registro obtenido a un array
$datos=mysqli_fetch_array($respuesta);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tienda de Ropa</title>
    </head>
    <body>
        <?php
        // 6) asignamos a diferentes variables los respectivos valores del array $datos.
        $tipo_prenda=$datos["tipo_prenda"];
        $marca=$datos["marca"];
        $talle=$datos["talle"];
        $precio=$datos["precio"];
        $imagen=$datos['foto'];?>

        <h2>Modificar</h2>
        <p>Ingrese los nuevos datos de la prenda.</p>
        
        <form action="" method="post" enctype="multipart/form-data">
            <label>Tipo de prenda</label>
            <input type="text" name="tipo_prenda" placeholder="Tipo de Prenda" value="<?php echo "$tipo_prenda"; ?>"> /dentro del value ponemos el dato que que trajimos del egistro para que ya aparezca el el imput y no volver aq escribirlo
            <label>Marca</label>
            <input type="text" name="marca" placeholder="Marca" value="<?php echo "$marca"; ?>">
            <label>Talle</label>
            <input type="text" name="talle" placeholder="Talle" value="<?php echo "$talle"; ?>">
            <label>Precio</label>
            <input type="text" name="precio" placeholder="Precio" value="<?php echo "$precio"; ?>">
            <label>Imagen</label>
            <input type="file" name="foto" placeholder="foto">
            <input type="submit" name="guardar_cambios" value="Guardar Cambios">
            <button type="submit" name="Cancelar" formaction="index.html">Cancelar</button>
        </form>
        <?php
        // Si en la variable constante $_POST existe un indice llamado 'guardar_cambios' ocurre el bloque de instrucciones.
        if(array_key_exists('guardar_cambios',$_POST)){

            // 2') Almacenamos los datos actualizados del envío POST
            // a) generar variables para cada dato a almacenar en la bbdd
            // Si se desea almacenar una imagen en la base de datos usar lo siguiente:
            // addslashes(file_get_contents($_FILES['ID NOMBRE DE LA IMAGEN EN EL FORMULARIO']['tmp_name']))
            $tipo_prenda=$_POST['tipo_prenda'];
                    $marca=$_POST['marca'];
                    $talle=$_POST['talle'];
                    $precio=$_POST['precio'];
                    $foto=addslashes(file_get_contents($_FILES['foto']['tmp_name']));

            // 3') Preparar la orden SQL
            // "UPDATE tabla SET campo1='valor1', campo2='valor2', campo3='valor3', campo3='valor3', campo3='valor3' WHERE campo_clave=valor_clave"
            // a) generar la consulta a realizar
             $consulta = "UPDATE ropa SET tipo_prenda='$tipo_prenda', marca='$marca', talle='$talle', precio='$precio', foto='$foto' WHERE idropa =$idropa";

             // 4') Ejecutar la orden y actualizamos los datos
             // a) ejecutar la consulta
             mysqli_query($conexion,$consulta);

            // a) rederigir a index
            header('location: index.html');

        }?>
    </body>
</html>

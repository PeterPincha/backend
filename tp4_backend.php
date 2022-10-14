<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<h1>Practico 4 (Clase Nro6)</h1>

<?php
$pares = [0,2,4,8,10,12,14,16,18,20];

foreach ($pares as $par) {
    print "<P>$par</P>";
}
?>
<br>
<hr>
<?php
$datos = ["Pedro", "Ana", 34, 1];
print_r($datos)
?>
<br>
<hr>
<?php
$datospersonales = ['Nombre' => "Pedro",
'Apellido'=>"Torres",
'Dirección'=> "Av. Mayor 3703",
'Teléfono'=> 1122334455];
print_r($datospersonales);
?>
<br>
<hr>
<?php
$ciudades = ["Madrid", "Barcelona", "Londres", "New York", "Los Ángeles", "Chicago"];

foreach ($ciudades as $ciudad => $valor){
    echo "La ciudad con el índice ", $ciudad," tiene el nombre ",$valor,"<BR>";
}
?>
<br>
<hr>
<?php
$ciudades = ['MD'=>"Madrid", 'BCL'=>"Barcelona", 'LD'=>"Londres", 'NY'=>"New York", 'LA'=>"Los Ángeles", 'CCG'=>"Chicago"];

foreach ($ciudades as $ciudad=> $valor){
    echo "La ciudad con el índice ", $ciudad," tiene el nombre ",$valor,"<BR>";
}
?>

  </body>
</html>

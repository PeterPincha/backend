<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<h1>Practico Nro2</h1>

<?php
$mensaje = "Hola mundo";
echo $mensaje;
?>

<br>
<hr>

<?php
$edlp = 11;
$gelp = 7;

echo "1er Numero: "; 
echo $edlp;
echo "<br>";
echo "2do Numero: ";
echo $gelp;
 ?>

<br>
<hr>

<?php

$total = $edlp + $gelp;
echo "Suma: ";
echo $total;
echo "<br>";

$total = $edlp - $gelp;
echo "Resta: " ;
echo $total;
echo "<br>";

$total = $edlp * $gelp;
echo "Mutiplicacion: ";
echo $total;
echo "<br>";

$total = $edlp / $gelp;
echo "Division: ";
echo $total;
echo "<br>";

$total = $edlp % $gelp;
echo "Resto: ";
echo $total;
?>

<br>
<hr>

<?php
$gradosC = 20;
$gradosF = ($gradosC * 9/5) + 32;

echo "Grados Celsius: ";
echo $gradosC;
echo "<br>";
echo "Grados Fahrenheit: ";
echo $gradosF;
echo "<br>";
echo "Formula (20 °C × 9/5) + 32 = 68 °F"
?>

<br>
<hr>

<?php
$baserectangulo=18;
$alturarecatangulo=12;
echo "Base recatangulo: ";
echo $baserectangulo;
echo "<br>";
echo "Altura recatangulo: ";
echo $alturarecatangulo;
echo "<br>";
echo "Perimetro recatangulo: ";
echo ($baserectangulo + $alturarecatangulo) * 2;
echo "<br>";
echo "Area  recatangulo: ";
echo $baserectangulo * $alturarecatangulo;
echo "<br>";
?>

<br>
<hr>
<?php
$radio=30;
echo "Radio circulo: ";
echo $radio;
echo "<br>";
echo "El perímetro de un círculo es el doble del producto de π por el radio (r). Perimetro circulo: ";
echo ($radio + 3.141592) * 2;
echo "<br>";
echo "El área de un círculo es pi multiplicado por el radio al cuadrado (A = π r²). Area  circulo: ";
echo 3.141592 * ($radio**2);
echo "<br>";
?>


<br>
<hr>

  </body>
</html>

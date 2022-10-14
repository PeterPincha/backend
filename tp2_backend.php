<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<h1>Practico 2 (Clase Nro3)</h1>

<?php

$numero = 12;
echo "Numero ingresado ";
echo $numero;
echo "<BR>";
 if ($numero >= 0)
 { echo "Se ingreso un numero positivo";} 
 else {echo "Se ingreso un nro negativo";}
 echo "<BR>";

 $otronumero= 7;
 echo "Numero ingresado ";
echo $otronumero;
echo "<BR>";

 if ($otronumero > 1 and $otronumero<10)
 { echo "Se ingreso un numero entre 1 y 10";} 
 else {echo "No se ingreso un numero entre 1 y 10";}
echo "<BR>";
 
 $otronumeromas = 27;
 echo "Numero ingresado ";
echo $otronumeromas;
echo "<BR>";
 if ($otronumeromas > 10 or $otronumeromas<2)
 { echo "Se ingreso un numero mayor a 10 o menor a 2.";} 
 else {echo "No se ingreso un numero mayor a 10 o menor a 2.";}
 echo "<BR>";
 ?>

<br>
<hr>

<?php
#Crear dos variables, una con nombre numero1 y otra con el nombre de numero2. Si numero1 es
#mayor a numero2, mostrar por pantalla, la suma y la resta. Si numero2 es mayor a numero1,
#mostrar por pantalla la multiplicación, la división entera y el resto de la división. Si numero1 y
#numero2 son iguales, mostrar el siguiente mensaje “Los números ingresados son iguales”

$numero1 = 11;
echo "Numero ingresado ";
echo $numero1;
echo "<BR>";
$numero2 = 7;
echo "Numero ingresado ";
echo $numero2;
echo "<BR>";

$resultado =0;
if ($numero1 > $numero2)
{ 
  echo "Suma: ";
  echo $numero1 + $numero2; 
  echo "<BR>";
  echo "Resta: ";
  echo $numero1 - $numero2; 
  echo "<BR>";
} 
 elseif ($numero2 > $numero1) 
 {
  echo "Multiplicacion: ";
  echo $numero1 * $numero2; 
  echo "<BR>";
  echo "Division: ";
  echo $numero1 - $numero2; 
  echo "<BR>";
} elseif ($numero1=$numero2) 
{
  echo "Los números ingresados son iguales";
  echo "<BR>";
}
 
?>

  </body>
</html>

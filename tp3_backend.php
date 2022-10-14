<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<h1>Practico 1 (Clase Nro5)</h1>
<?php
$desde = 1;
while ($desde<=100)
{
  echo $desde, "<BR>";  
  $desde++;
}
?>
<br>
<hr>
<?php
$desde = 100;
while ($desde>=1)
{
  echo $desde, "<BR>";  
  $desde--;
}
?>
<br>
<hr>
<?php
$desde = 1;
while ($desde<=100)
{
  if ($desde % 2 == 0)
  {
  echo $desde, "<BR>"; 
}
  $desde++;
}
?>
<br>
<hr>
<?php
$desde = 1;
while ($desde<=100)
{
  if ($desde % 2 <> 0)
  {
  echo $desde, "<BR>"; 
}
  $desde++;
}
?>
<hr>
<?php
$suma1 = 0;
for ($i=0; $i<=20; $i++)
{
    $suma1 = $suma1 + $i;  
}
echo "Total: ", $suma1, "<BR>"; 
?>
<hr>
<?php
$suma2 = 0;
for ($i=0; $i<=20; $i++)
{
  if ($i % 2 == 0)
  {
    $suma2 = $suma2 + $i;  
  }
}
echo "Total: ", $suma2, "<BR>"; 
?>
</body>
</html>

<?php
$usuario = $_POST ["user"];
$contrasenia = $_POST ["pass"];

$ckuser = "admin";
$ckpass = "peter";

if ($usuario == $ckuser && $contrasenia == $ckpass)
{ #echo "Corrrecto!!!";
 header("location:https://plataforma.potrerodigital.org/");
} 
else
{ #echo "No pasaras!!!";
  header("location:error.html");
}

?>

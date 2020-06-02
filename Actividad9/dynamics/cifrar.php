<?php
function encri($texto,$key)//Función para encriptar
{
  for ($i=1; $i<=$key; $i++)//Encripta dependiendo de la llave
  {
    $texto=base64_encode($texto);//Pasa el texto a base 64
    $texto=bin2hex ($texto);//Lo pasa de base 64 a hexadecimal
  }
  return $texto;//Regresa el valor a la función principal
}
function decri($texto,$key)//Función para descifrar
{
  for ($i=1; $i<=$key; $i++)
  {
    $texto=hex2bin ($texto);
    $texto=base64_decode($texto);
  }
  return $texto;
}
$text=$_POST['texto'];//Recibe los valores del html
$key=$_POST['key'];
$accion=$_POST['E'];
if ($accion=="Encriptar")
  echo encri($text,$key);
elseif ($accion=="Descifrar") {
  echo decri($text,$key);
}
?>

<?php
  $abc=["A","B","C","D","E","F","G","H","I","J","K","L","M","N","Ñ","O","P","Q","R","S","T","U","V","W",
  "X","Y","Z",".",",","¿","?"];//Arreglo con todas las letras
  $sum=3;//El número del cifrado César
  for ($i=0; $i<$sum; $i++)
  {
    array_push($abc,$abc[$i]);//Agrega los primeros elementos, al final de la lista, para evitar out of index y lograr una encripción adecuada
  }
  $pal=$_POST['Nombre'];//Recibe el input
  $pal=strtoupper($pal);//Hace mayúsculas todas las letras del texto
  $pal=str_replace("ñ","Ñ",$pal);//Convierte a la ñ en mayúscula
  for ($i=0; $i<strlen($pal); $i++)//Recorre cada letra del input
  {
    foreach ($abc as $key => $value) {//Recorre cada letra del abecedario
      if ($value==substr($pal,$i,1) && $key<(count($abc)-$sum))//Busca que las letras sean iguales y que no se repitan al final de la lista
      {
        $neu[$i]=$abc[$key+$sum];//Guarda la nueva letra
      }
      elseif (substr($pal,$i,1)==" ")//Si es un espacio, se respetará este
      {
        $neu[$i]=" ";
      }
    }
    echo $neu[$i];//Imprime la letra encriptada
  }
?>

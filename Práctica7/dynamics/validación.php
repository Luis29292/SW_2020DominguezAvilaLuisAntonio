<?php
  $val=[
    $_POST['Tipo'] => '/[PF]/',
    $_POST['Nombre'] => '/([A-ZÁÉÍÓÚÑ][a-záéíóúñ]*\s?){1,}/',
    $_POST['aP'] => '/[A-ZÁÉÍÓÚÑ][a-záéíóúñ]*/',
    $_POST['aM'] =>  '/[A-ZÁÉÍÓÚÑ][a-záéíóúñ]*/',
    $_POST['nac']=> '/[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])/',
    $rfc=$_POST['RFC'] => '/[A-Z]{4}[0-9]{2}(0[1-9]|1[0-2])(0[1-9]|[1-2][0-9]|3[0-1])([0-9]|[A-Z]){3}/'
  ];
  $pas=$_POST['contra'];
  foreach ($val as $key => $value) {
    if (!preg_match($value,$key)){
      echo "<<".$key.">> no es un dato válido <br>";
    }
  }
  if (!preg_match('/(?=.*[A-Z])(?=.*[\.,!@#$&*])(?=.*[0-9])(?=.*[a-z]).{10,}/',$pas))
  {
    echo "Su contrasena: ".$pas." no es segura";
  }
?>

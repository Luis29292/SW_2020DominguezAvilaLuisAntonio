<?php
  $val=[
    $_POST['Tipo'] => '/[PF]/',//Recibe los datos y establece los parámetros de validación
    $_POST['Nombre'] => '/([A-ZÁÉÍÓÚÑ][a-záéíóúñ]*\s?){1,}/',
    $_POST['aP'] => '/[A-ZÁÉÍÓÚÑ][a-záéíóúñ]*/',
    $_POST['aM'] =>  '/[A-ZÁÉÍÓÚÑ][a-záéíóúñ]*/',
    $_POST['nac']=> '/[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])/',//La fecha debe cumplir un formato AAAA/MM/DD
    $rfc=$_POST['RFC'] => '/[A-Z]{4}[0-9]{2}(0[1-9]|1[0-2])(0[1-9]|[1-2][0-9]|3[0-1])([0-9]|[A-Z]){3}/'//Verifica que el RFC pueda existir
  ];
  $pas=$_POST['contra'];
  foreach ($val as $key => $value) {//Valida cada uno de los casos
    if (!preg_match($value,$key)){
      echo "<<".$key.">> no es un dato válido <br>";//Pone el dato que podría no funcionar
    }
  }
  if (!preg_match('/(?=.*[A-Z])(?=.*[\.,!@#$&*])(?=.*[0-9])(?=.*[a-z]).{10,}/',$pas))//Checa que la contraseña tenga mínimo 10 caracteres, 1 mayúscula, 1 minúscula, 1 número y 1 caracter especial
  {
    echo "Su contrasena: ".$pas." no es segura";
  }
?>

<?php
  require_once("models/usuarios.model.php");
/*
  $arrData = array(
    "usuario_nombre" => "Fulano de Tal 1",
    "usuario_email" => "fulano1@detal.com",
    "usuario_pswd" => "unCatr41",
    "usuario_pswd_cnf" => "unCatr41"
  );

  echo registrarUsuario($arrData) . "<br/>";
  //print_r(obtenerUsuarios());
*/
  //echo date('Y-m-d H:i:s');
  $arrData = array(
    "usuario_email" => "fulano1@detal.com",
    "usuario_pswd" => "unCatr41"
  );

  print_r(autenticarUsuario($arrData));

 ?>

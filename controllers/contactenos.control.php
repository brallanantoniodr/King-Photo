<?php

  require_once("libs/template_engine.php");

  function run(){
    $datosPersonales = array(
      "texto" => "Oficina Principal Tegucigalpa"
    );
    addCssRef("public/css/Contactenos.css");
    renderizar("contactenos", $datosPersonales);
  }


  run();
?>

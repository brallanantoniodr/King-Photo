<?php

  require_once("libs/template_engine.php");

  function run(){
    $datosPersonales = array(
      "texto" =>   " KING - PHOTO HOME 1");
    addCssRef("public/css/Inicio.css");
    renderizar("home1", $datosPersonales);
  }


  run();
?>

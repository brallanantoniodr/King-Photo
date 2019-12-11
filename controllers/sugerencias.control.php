<?php

  require_once("libs/template_engine.php");

  function run(){
    $datosPersonales = array(
      "texto" => "SUGERENCIAS"
    );
    addCssRef("public/css/Sugerencias.css");
    renderizar("sugerencias", $datosPersonales,"loggedLayout.view.tpl");
  }
  if(mw_estaLogueado()){
    run();
  }else{
      mw_redirectToLogin("index.php?page=sugerencias");
  }
?>

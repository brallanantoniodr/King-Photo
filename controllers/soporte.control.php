<?php

  require_once("libs/template_engine.php");


  function run(){
    $datosPersonales = array(
      "texto" => "SOPORTE TECNICO"
    );
    addCssRef("public/css/Soporte.css");
    renderizar("soporte", $datosPersonales,"loggedLayout.view.tpl");
  }

  if(mw_estaLogueado()){
    run();
  }else{
      mw_redirectToLogin("index.php?page=soporte");
  }
?>

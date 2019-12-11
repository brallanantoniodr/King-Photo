<?php

  require_once("libs/template_engine.php");

  function run(){
       addCssRef("public/css/Inicio.css");
    if (mw_estaLogueado()){
      renderizar("home",array(),"loggedLayout.view.tpl");
    }else{
      renderizar("home",array());
    }
  }


  run();
?>

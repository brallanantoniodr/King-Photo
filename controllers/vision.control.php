<?php

  require_once("libs/template_engine.php");

  function run(){
    $datosPersonales = array(
      "texto" => "Posicionarnos en los primeros lugares a nivel nacional, proporcionando productos de primera calidad.
      Convertirnos en una de las empresas líderes de transporte terrestre de pasajeros interprovincial de Honduras
      logrando que nuestros estandares sean lo mas altos posibles, de manera que sus usuarios se sientan totalmente
      a gusto con nuestros servicios y seamos reconocidos por nuestros valores empresariales. "
    );

    addCssRef("public/css/Vision.css");
    renderizar("vision", $datosPersonales);
  }


  run();
  
?>

<?php

  require_once("libs/template_engine.php");

  function run(){
    $datosPersonales = array(
      "texto" => "
      Ser una Empresa libre en fotografía grabando los mejores recuerdos de nuestros clientes en los diferentes productos que ofrecemos.
      Somos una empresa de servicios comprometida en brindar a nuestros clientes y usuarios 
      en general un servicio de transporte terrestre de pasajeros, carga y mercadería con un nivel
      de alta calidad, puntualidad, seguridad, y comodidad; satisfaciendo totalmente sus expectativas. 
      "
    );
    addCssRef("public/css/MisionyValores.css");
    renderizar("misionValores", $datosPersonales);
  }


  run();
?>

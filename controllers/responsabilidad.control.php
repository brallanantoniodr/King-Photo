<?php

  require_once("libs/template_engine.php");

  function run(){
    $datosPersonales = array(
      "texto" => "

      En King Photo, buscamos que nuestros servicios se brinden en el horario planificado y al conocimiento de nuestros clientes. 
      Teniendo Horarios que cumplen con la comodidad en los tiempos establecidos para su mejor servicio; sin desmerecer sus expectativas de seguridad, comodidad. 
    
      Es trabajar con estándares internacionales de calidad de servicio, respeto al medio ambiente y prevención de riesgos
      actuando con responsabilidad social y generando valor en nuestros servicios, a fin de lograr la confianza y satisfacción de nuestros clientes y el desarrollo de nuestros colaboradores. 
      
      
      Innovación:
      
      Consiste en usar nuestro conocimiento, creatividad, tecnología e investigación para el cambio y la mejora de nuestros servicios. 
      
      
      Eficiencia y Honestidad:
      
      Se refiere a nuestro esfuerzo por aumentar la productividad en todas las áreas de la empresa
      evitando inconvenientes en el servicio a nuestros clientes 
      
      Breve Reseña histórica
      
      King Photo nace de debido a que la Empresa Quick Photo cierra sus operaciones, 
      debido a su cierre vende sus operaciones el 15 Agosto del 2013 a King Photo y así se ha mantenido 4 años ya en Tegucigalpa como única sucursal.
      
      "
    );
    addCssRef("public/css/Responsabilidad.css");
    renderizar("responsabilidad", $datosPersonales);
  }


  run();
?>

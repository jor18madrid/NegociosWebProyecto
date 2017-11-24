<?php

  require_once("libs/template_engine.php");

  function run(){
    $datosPersonales = array(
      "texto" => "Ser la empresa lider en los servicio de renta y venta de copiadoras e impresoras Blanco/Negro y a Color siempre estar a la vanguardia ofreciendo copiadoras e impresoras de alta calidad."
    );

    addCssRef("public/css/Vision.css");
    renderizar("vision", $datosPersonales);
  }


  run();
?>

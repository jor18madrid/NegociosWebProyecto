<?php

  require_once("libs/template_engine.php");

  function run(){
    $datosPersonales = array(
      "texto" =>   " A. BELTRAN COPIADORA. Es una empresa solidamente establecida en la república de Honduras desde 1987, teniendo como giro principal la distribución autorizada de copiadoras e impresoras marca KYOCERA, Nuestra casa matriz denominada A. BELTRAN T/W CO; INC., se encuentra ubicada en Boca Ratón, Florida Estados Unidos con ( 37 ) años, respalda el alto rendimiento de nuestros servicios y la disponibilidad de suministros, repuestos, partes y accesorios.
     Convenientemente ubicados en la zona norte, sur y centro del pais para ofrecer una cobertura completa del territorio nacional."
    );
    addCssRef("public/css/Inicio.css");
    renderizar("home1", $datosPersonales);
  }


  run();
?>

<?php

  require_once("libs/template_engine.php");

  function run(){
    $datosPersonales = array(
      "texto" => "SOPORTE TECNICO"
    );
    addCssRef("public/css/Soporte.css");
    renderizar("soporte", $datosPersonales);
  }


  run();
?>

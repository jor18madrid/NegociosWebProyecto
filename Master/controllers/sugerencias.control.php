<?php

  require_once("libs/template_engine.php");

  function run(){
    $datosPersonales = array(
      "texto" => "SUGERENCIAS"
    );
    addCssRef("public/css/Sugerencias.css");
    renderizar("sugerencias", $datosPersonales);
  }


  run();
?>

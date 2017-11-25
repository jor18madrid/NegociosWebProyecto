<?php

  require_once("libs/template_engine.php");

  function run(){
    $datosPersonales = array(
      "texto" => "Ofrecer a nuestros cloentes copiadoras e impresoras de la marca KYOCERA, supera do sus expextativas con equipo de calidad y con un servicio, rapido, amigable, especializado, personalizado, logrando asi la satisfaccion de nuestros clientes y asi mismo la solidez de la empresa y el bienestar de quienes la integran."
    );
    addCssRef("public/css/MisionyValores.css");
    renderizar("misionValores", $datosPersonales);
  }


  run();
?>

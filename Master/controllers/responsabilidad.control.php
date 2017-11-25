<?php

  require_once("libs/template_engine.php");

  function run(){
    $datosPersonales = array(
      "texto" => "Nuestra empresa se enorgullece en tener a uno de los mejores y mas completos club de atletismo de Honduras: A BELTRAN ATLETISMO, el cual cuenta con los mejores atletas de del país, que han alcanzado siempre los primeros lugares en las competencias locales y nacionales, el éxito del club se debe a la perseverancia de nuestros competidores, a la disciplina en entrenamientos y el apoyo constante de nuestro presidente el señor Victor Beltran, iniciador del club desde 1987. En nuestro club han resaltado atletas como Marvin y Santiago Araque, destacándose a nivel nacional y en el extranjero. Marvin es ahora el motor de este deporte en la región de Tegucigalpa. también contamos con la colaboración de Emiliano Lemus entrenador de la región norte en SPS. ademas recordamos la participación del ya desaparecido Rodrigo Bautista, quien cosecho grandes triunfos de la mano de nuestro equipo, y muchos otros que ya no estan en nuestro club, pero iniciaron su vida atletica con nosotros. A. Beltran atletismo, se ha esforzado durante muchos años en promover un cambio cultural en la población Hondureña, un cambio positivo que se traduce en un cambio de actitud por medio de la practica del atletismo. Es así que durante mas de 24 años hemos apoyado a corredores nacionales a desarrollar su capacidad y competitividad, ofreciendoles el apoyo necesario en entrenamientos, educacion e implementos para alcanzar un nivel competitivo de élite en esta rama deportiva, llevando a nuestros corredores a alcanzar en la mayoría de competencias nacionales los primeros puestos. Gracias a todo este esfuerzo se ha logrado patrocinar a nuestros campeones para participar internacionalmente en las carreras mas importantes a nivel mundial. Para nuestro club es un honor tener a los mejores atletas de Honduras así que les invitamos a los que quieran unirse a contactarnos en las oficinas de A Beltran Copiadora en San Pedro Sula, Tegucigalpa y Siguatepeque."
    );
    addCssRef("public/css/Responsabilidad.css");
    renderizar("responsabilidad", $datosPersonales);
  }


  run();
?>

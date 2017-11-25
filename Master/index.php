<?php

    session_start();
     date_default_timezone_set("America/Tegucigalpa");

    require_once("libs/utilities.php");

    $pageRequest = "home";

    if(isset($_GET["page"])){
      $pageRequest = $_GET["page"];
    }

    //Incorporando los midlewares son codigos que se deben ejecutar
    //Siempre
    require_once("controllers/verificar.mw.php");
    require_once("controllers/site.mw.php");


    //Este switch se encarga de todo el enrutamiento
    switch($pageRequest){
        case "home":
            //llamar al controlador
            require_once("controllers/home.control.php");
            break;
        case "login":
              require_once("controllers/login.control.php");
              break;
        case "productos":
            require_once("controllers/productos.control.php");
            break;
        case "productosform":
            require_once("controllers/productosform.control.php");
            break;
            case "vision":
            require_once("controllers/vision.control.php");
            break;
            case "responsabilidad":
            require_once("controllers/responsabilidad.control.php");
            break;
            case "misionValores":
            require_once("controllers/misionValores.control.php");
            break;
            case "soporte":
            require_once("controllers/soporte.control.php");
            break;
            case "contactenos":
            require_once("controllers/contactenos.control.php");
            break;
            case "sugerencias":
            require_once("controllers/sugerencias.control.php");
            break;
        case "logout":

            //redirectWithMessage("Ha cerrado sesión satisfactoriamente!");
            soloMensaje("¿Desea cerrar sesion?");
            mw_setEstaLogueado("",false);
            break;
            case "usuario":
            require_once("controllers/usuario.control.php");
            break;
        default:
            require_once("controllers/error.control.php");
    }
?>

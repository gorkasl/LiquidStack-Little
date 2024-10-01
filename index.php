<?php

//ARCHIVO ROUTER O DE CONFIGURACIÓN
//---------------------------------


require_once './vendor/autoload.php';
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable('./');
$dotenv->load();

require_once './php/app/_idiomas.php'; //requerimos para obtener el lenguaje


//Obtenemos la url entera desde la raiz
$url = urldecode($_SERVER["REQUEST_URI"]) ?? "/$lang";
$url = ($url ==="/") ? "/$lang" : $url;

//Si no están aceptadas las cookies, no hay idioma guardado, por lo que haremos pri a la url que venga

// if(!$_COOKIE["aceptarCookies"]){
    
// }

//----CONTROLADOR (CONTROLAMOS QUÉ VISTA MOSTRAR EN FUNCIÓN DE LA URL)
//--------------------------------------------------------------------
$arrayRutas = require('./config/rutas.php');
if(isset($arrayRutas[$url])){
    
    
    //nos quedamos con la última ruta de la url para buscar en el json correspondiente
    $url_parse = explode("/",$url);
    $ruta = $url_parse[count($url_parse)-1];

    if (($ruta == "es" || "en" || "eu")){
        $ruta = "inicio";
    }


    //extraemos del json todas las claves valores de esa ruta, ya en variables php
    $data=(array) json_decode(file_get_contents("./config/languages/$lang.json"));
    $data[$ruta] && extract((array)$data[$ruta]);
    //tambien extraemos de la clave links, para disponer de los enlaces en diferentes idiomas para el menú
    $data["links"] && extract((array)$data["links"]);

    //----VISTA----------
    //-------------------
    require_once $arrayRutas[$url];

}else{

    //----VISTA----------
    //-------------------
    require './php/vistas/404.php'; 
}
?>


<?php

//ARCHIVO ROUTER O DE CONFIGURACIÓN
//---------------------------------


require_once './vendor/autoload.php';
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable('./');
$dotenv->load();


require_once './php/app/_idiomas.php'; //requerimos para obtener el lenguaje

//Obtenemos la url entera desde la raiz del dominio
$url = urldecode($_SERVER["REQUEST_URI"]) ?? "/$lang";
$url = ($url ==="/") ? "/$lang" : $url;


//----CONTROLADOR (CONTROLAMOS QUÉ VISTA MOSTRAR EN FUNCIÓN DE LA URL)

$arrayRutas = require('./config/rutas.php');
if(isset($arrayRutas[$url])){    
    
    //Estructuramos la URL en un array
    $urlParse = explode("/",$url);
    $urlLang = $urlParse[1]; //Cogemos el idioma de la URL
    $ruta = $urlParse[count($urlParse)-1]; //cogemos la última parte de la ruta

    //Pisamos $lang con el idioma de la url
    $langs= require('./config/langs.php');
    if(in_array($urlLang, $langs)){
        $lang=$urlLang;
    }
   
    //Si $ruta es la base de la url, /es, /eu, establecemos que $ruta sea inicio
    //Así carga las claves-valor de la url de inicio del json
    if(in_array($ruta, $langs)){
        $ruta = "inicio";
    }

    //Extraemos del json todas las claves valores de esa ruta, ya en variables php
    $data=(array) json_decode(file_get_contents("./config/languages/$lang.json"));
    $data[$ruta] && extract((array)$data[$ruta]);
    //tambien extraemos de la clave 'global', para disponer de los enlaces en diferentes idiomas para elementos comunes a toda la web como el menú o footer 
    $data["global"] && extract((array)$data["global"]);

    //----VISTA----------
    require_once $arrayRutas[$url];

}else{

    //----VISTA----------
    require './php/vistas/404.php'; 
}
?>


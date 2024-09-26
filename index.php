<?php

//ARCHIVO ROUTER O DE CONFIGURACIÓN

//REQUERIMOS EL DOTENV PARA VARIABLES DE ENTORNO
require_once './vendor/autoload.php';
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable('./');
$dotenv->load();



//Desde el htaccess entramos aquí desde cualquier dirección URL del dominio. Aquí la recogemos íntegra (sólo lo que venga detrás del último / localhost), ya que venimos desde el localhost ejecutado desde php, en el puerto 3000.
//descodificamos por si viene con ñ
$url = urldecode($_SERVER["REQUEST_URI"]) ?? '/inicio';
($url ="/") ? $url="/inicio" : $url;



//--- CONTROLADOR (CONTROLAMOS QUÉ VISTA MOSTRAR EN FUNCIÓN DE LA URL)

//Establecemos un array asociativo de rutas (clave => valor) (url amigable => archivo que hay que cargar). Este array crecerá según tengamos más URL en nuestra web. Ese array lo creamos de un array que tenemos en otro archivo php. Así tenemos el archivo de las url separado en la zona de CONFIG. 
$arrayRutas = require('./config/rutas.php');


// Aquí analizamos si la url solicitada está o no dentro del array asociativo
if(isset($arrayRutas[$url])){

    //Fragmentamos la URL dentro de un array donde usará los separadores / como corte.
    $url_parse = explode("/",$url);
    //Guardamos el último item del array dentro la variable llamada $ruta
    $ruta = $url_parse[count($url_parse)-1]; 
    

    //Establecemos el lenguaje en castellano, por ejemplo, pero aquí vendría el lenguaje guardado en la cookie. En función del lenguaje, cargaremos un json u otro con los textos en ese idioma.
    //todo el código relativo a saber si tiene cookie de idiomas activo
    //cojo el valor de la cookie de idiomas, que puede ser "fr" "es" "en" "eu"
    //lo meto en una variable
    $lang="es";

    //Venimos con un array asociativo con todo el contenido dinámico desde JSON o BBDD
    //Decodificamos el json
    //Con el file_get_content cojemos el conyenido
    //Con el json_decode lo metemos en una clase de php
    //Con el (Array) lo metemos dentro de un array asociativo de clave-valor llamado $data
    $data=(array) json_decode(file_get_contents("./config/languages/$lang.json"));

    //Hacemos un if moderno:
    //Si en el array $data existe una clave como la que tenemos en la variable $ruta, hacemos un extract de su valor, es decir, creamos una variable de nombre igual a la clave, y con el valor que disponga.
    $data[$ruta] && extract((array)$data[$ruta]);

    // -- VISTA
    //Requerimos el archivo (vista) correspondiente a la url amigable solicitada 
    include $arrayRutas[$url];

}else{    

    //En caso de que no exista la url amigable dentro del array asociativo de rutas amigables. Aquí podríamos poner un 404 en vez de que vaya a inicio.
    require './php/vistas/inicio.php'; 
}
?>


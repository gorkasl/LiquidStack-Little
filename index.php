<?php

//--archivo router o de configuración
require_once './vendor/autoload.php';
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable('./');
$dotenv->load();

//desde el htaccess entramos aquí desde cualquier dirección URL del dominio. Aquí la recogemos íntegra (sólo lo que venga detrás del último / localhost), ya que venimos desde el localhost ejecutado desde php, en el puerto 3000.
$url = $_SERVER["REQUEST_URI"] ?? 'inicio';


//establecemos un array asociativo de rutas (clave => valor) (url amigable => archivo que hay que cargar). Este array crecerá según tengamos más URL en nuestra web. O bien crece a mano o bien porque los datos se cargan desde una tabla de BBDD.
$arrayRutas= require('./config/rutas.php');

//--- controlador
// Aquí analizamos si la url está o no dentro del array asociativo
if(isset($arrayRutas[$url])){


    $url_parse=explode("/",$_SERVER["REQUEST_URI"]); //segmentando la url dentro de un array
    $ruta= $url_parse[count($url_parse)-1]; //nos quedamos con la última parte del array dentro la var ruta

    $lang="es";

    //venimos con un array asociativo con todo el contenido dinámico desde JSON o BBDD
    //decodificamos el json, lo mete en una clase y después lo convertimos en un array
    $data=(array) json_decode(file_get_contents("./config/languages/$lang.json"));

    //si existe la clave de la ruta en data, extrae y hace la declaración de variables con sus valores, sino no.
    //cuando hacemos extract necesitamos hacer el casting 
    $data[$ruta] && extract((array)$data[$ruta]); //hacemos la viariabe sobre variable, unsando como nombre de variable las claves
        
    require_once $arrayRutas[$url]; //requerimos la vista dinámica, siemrpe que exista en el array de rutas amigables.

}else{    
    require_once 'inicio.php'; //en caso de que no exista la url amigable dentro del array asociativo de rutas amigables. Aquí podríamos poner un 404 en vez de que vaya a inicio.
}

?>
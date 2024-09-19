<?php

// Cogemos en la variable url lo que nos viene por GET, que del htaccess es lo que se envía en su variable $1, que viene a ser la URL que ha escrito el usuario.
$url = $_GET['url'] ?? 'inicio';

/* echo $url;
die; */

//establecemos un array asociativo de rutas (clave => valor) (url amigable => archivo que hay que cargar). Este array crecerá según tengamos más URL en nuestra web. O bien crece a mano o bien porque los datos se cargan desde una tabla de BBDD.
$arrayRutas=[
    'inicio' => 'inicio.php',
    'servicios-web' => 'servicios.php',
    'contacta' => 'contacto.php'
];

// Aquí analizamos si la url está o no dentro del array asociativo
if(isset($arrayRutas[$url])){
    /* echo 'entra por url existente'; */
    require_once $arrayRutas[$url];
}else{
    /* echo 'entra por url no existente'; */
    require_once 'inicio.php';
}

?>
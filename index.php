<?php

require_once './vendor/autoload.php';
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable('./');
$dotenv->load();

// Cogemos en la variable url lo que nos viene por GET, que del htaccess es lo que se envía en su variable $1, que viene a ser la URL que ha escrito el usuario.
/* $url_parse=explode("/",$_SERVER["REQUEST_URI"]);
$url = $url_parse[1] ?? 'inicio';
$_GET["id"]=$url_parse[2]; */

$url = $_SERVER["REQUEST_URI"] ?? 'inicio';


/* $url = $_SERVER["REQUEST_URI"] ?? 'inicio';
 */

/* echo "<pre>";
var_dump($url_parse);
echo "</pre>";
exit;
 */
/* $urlCompleta = $url."/".$subcarpeta;
echo $urlCompleta;
die; */

//establecemos un array asociativo de rutas (clave => valor) (url amigable => archivo que hay que cargar). Este array crecerá según tengamos más URL en nuestra web. O bien crece a mano o bien porque los datos se cargan desde una tabla de BBDD.

$arrayRutas=[
    '/inicio' => './inicio.php',
    '/servicios-web' => './servicios.php',
    '/contacta' => './contacto.php',
    '/servicios-web/posicionamiento-seo' => './servicio.php',
    '/servicios-web/desarrollo-web' => './servicio.php'
];

// Aquí analizamos si la url está o no dentro del array asociativo
if(isset($arrayRutas[$url])){
    /* echo 'entra por url existente'; */
    $url_parse=explode("/",$_SERVER["REQUEST_URI"]);
    $ruta= $url_parse[count($url_parse)-1];

    $data=[
        "posicionamiento-seo"=>[
            "title"=> "POSICIONAMIENTO SEO",
            "description" => "Ofrecemos servicios SEO"
        ],
        "desarrollo-web"=>[
            "title"=> "DESARROLLO WEB",
            "description" => "Ofrecemos servicios web"
        ]
    ];
    extract($data[$ruta]);

    require_once $arrayRutas[$url];
}else{
    /* echo 'entra por url no existente'; */
    require_once 'inicio.php';
}

?>
<?php

//Este archivo se encargará de dos cosas:
//Limpiar la URL y hacer redirecciones en caso necesario
//Obtener la información de la URL como el idioma y la ruta final
//Decidir qué idioma carga por defecto: cookie, navegador o el de la variable de entorno
//En caso de que venga un idioma diferente en la URL a la anterior decisión, cambiará el idioma al de la URL


$langs= require('./config/langs.php'); //array de idiomas permitidos

//Establecemos $lang inicialmente por navegador, cookie o por defecto 
if(!isset($_COOKIE['lang'])){
    //Cogemos el string de lang del navegador en caso de que no exista cookie
    if (isset($_SERVER["HTTP_ACCEPT_LANGUAGE"])){
      $lang = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"], 0, 2); // Obtiene el lenguaje del navegador (primeras 2 letras)
      if(!in_array($lang, $langs)){
         $lang=$_ENV['LANG_DEFAULT'];
      }        
    }else{ 
        $lang = $_ENV['LANG_DEFAULT'];
    }
}else{ //si existe..
    $lang = $_COOKIE["lang"]; //cogemos la cookie desde php de lang    
}


//Obtenemos la url entera desde la raiz del dominio
$url = urldecode($_SERVER["REQUEST_URI"]) ?? "/$lang";
$url = ($url ==="/") ? "/$lang" : rtrim($url,"/");

//Estructuramos la URL en un array
$urlParse = explode("/",$url);
$urlLang = $urlParse[1]; //Cogemos el idioma de la URL
$ruta = $urlParse[count($urlParse)-1]; //cogemos la última parte de la ruta

//Pisamos $lang con el idioma de la url, como prioridad, siempre que esté dentro del array de idiomas, sino establecemos dejamos lang como estaba
if(in_array($urlLang, $langs)){
    $lang=$urlLang;
}else{
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: /$lang");
    exit;
}

//En caso de que la url "/" y $url sea "/idioma" entonces hace redirección 
if(urldecode($_SERVER["REQUEST_URI"]) !== $url){
    header("HTTP/1.1 301 Moved Permanently");
    header("Location:$url");
    exit;
}


?>
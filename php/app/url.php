<?php

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

//fr

//Estructuramos la URL en un array
$urlParse = explode("/",$url);
$urlLang = $urlParse[1]; //Cogemos el idioma de la URL
$ruta = $urlParse[count($urlParse)-1]; //cogemos la última parte de la ruta

//Pisamos $lang con el idioma de la url, como prioridad, siempre que esté dentro del array de idiomas, sino establecemos dejamos lang como estaba
if(in_array($urlLang, $langs)){
    $lang=$urlLang;
}else{
    header("Location: /$lang");
    exit;
}

if(urldecode($_SERVER["REQUEST_URI"]) !== $url){
    header("Location:$url");
    exit;
}


?>
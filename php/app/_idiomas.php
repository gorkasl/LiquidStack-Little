<?php

//Archivo que se encarga de darle un valor a $lang desde el servidor
//Primero verá si hay o no cookie de lang
//Segundo, en caso de no existir, verá si hay lang en el navegador del user
//Tercero, en caso de ninguna de las anteriores, establece por defecto el lang en "es"

//Cogemos la cookie de lang
//Si no existe la cookie...
if(!isset($_COOKIE['lang'])){
    //Cogemos el string de lang del navegador en caso de que no exista cookie
    if (isset($_SERVER["HTTP_ACCEPT_LANGUAGE"])){
        $lang = parseDefaultLanguage($_SERVER["HTTP_ACCEPT_LANGUAGE"]);
    }else{ 
        $lang = parseDefaultLanguage(NULL);
    }
}else{ //si existe..
    $lang=$_COOKIE["lang"]; //cogemos la cookie desde php de lang    
}

//Función para desfragmentar el valor obtenido, sino establecemos el por defecto
function parseDefaultLanguage($http_accept, $lang="es"){
    if (isset($http_accept) && strlen($http_accept) > 1){
 
       // dividir los posibles lang en un array
       $x = explode(",",$http_accept);
 
       foreach ($x as $val) {
 
          // compruebe el valor q y cree un array asociativa. Si no existe el valor q, es por defecto 1
          if (preg_match("/(.*);q=([0-1]{0,1}.\d{0,4})/i",$val,$matches)){ 
             $item[$matches[1]] = (float)$matches[2];
          }else{ 
             $item[$val] = 1.0;
          }
       }
 
       // retornamos el lang por defecto el cual es el valor q más alto
       $qval = 0.0;
 
       foreach ($item as $key => $value){ 
          if ($value > $qval){ 
             $qval = (float)$value;
             $lang = $key;
          }
       }
    } 
    return strtolower($lang);
}


?>
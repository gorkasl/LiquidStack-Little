//IMPORTAMOS LA CLASE DE COOKIES, E INSTANCIAMOS UN OBJETO DE DICHA CLASE
import cookieClass from "./_cookies.js";
const cookie=cookieClass.getInstance();

//RECOGEMOS TODOS LOS ELEMENTOS CON CLASE IDIOMA
const btn_idiomas = document.getElementsByClassName("btn_idioma")

//RECORREMOS TODOS LOS ELEMENTOS
for(const btn_idioma of btn_idiomas){

    //SI SE HACE CLICK EN UNO DE ELLOS
    btn_idioma.addEventListener("click", function(){

        //Establecemos el valor según la selección del usuario en el menú
        let lang = btn_idioma.id

        //Comprobamos si tiene aceptadas las cookies, usando el objeto de clase cookies y ejecutando su función
        let okCookie = cookie.comprobarOkCookie() 

        //Si hay aceptación de cookies, guardamos la selección. Sino, no.
        if(okCookie===true){
            cookie.setCookie("lang", lang, 90)
        }
        
    })
}
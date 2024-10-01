/* import "./_toggle.js"; */
/* import "./_slider.js" */
import "./_scroll.js";

import cookieClass from "./_cookies.js";
const cookie=cookieClass.getInstance();

import "./_lang.js";


const midocumentoHTML = document;
midocumentoHTML.addEventListener('DOMContentLoaded',()=>{ 
    /* todo lo que meta aquí dentro se ejecutará cuando se termine de cargar el DOM */
    cookie.comprobarOkCookieModal();
});
export default class cookieClass{
    constructor(){
        this.expires;
        this.name;
        this.decodedCookie;
        this.ca;
        this.c;
        this.i=0;
        this.d=new Date()
        this.contentWindowCookies="";
        this.window_cookies;
        this.cookie_ok;
        this.cookie_no;
        this.cookie_close;    
    }
    static getInstance(){
        return new cookieClass();
    }
    //CREAR COOKIE
    setCookie(cname, cvalue, exdays) {
        //const d = new Date();
        this.d.setTime(this.d.getTime() + (exdays*24*60*60*1000));
        this.expires = "expires="+ this.d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + this.expires + ";path=/;SameSite=Strict";
    }
    //COMPROBAR Y RECOGER COOKIE
    getCookie(cname) {
        this.name = cname + "=";
        this.decodedCookie = decodeURIComponent(document.cookie);
        this.ca = this.decodedCookie.split(';');
        for(this.i = 0; this.i <this.ca.length; this.i++) {
            this.c = this.ca[this.i];
            while (this.c.charAt(0) == ' ') {
                this.c = this.c.substring(1);
            }
            if (this.c.indexOf(this.name) == 0) {
                return this.c.substring(this.name.length, this.c.length);
            }
        }
        return "";
    }
    //COMPROBAR SI ESTÁN ACEPTADAS O MOSTRAR MODAL
    comprobarOkCookieModal(){
        const cookie = "aceptarCookies";
        //SI EXISTE COOKIE DE ACEPTAR COOKIES
        if(this.getCookie(cookie)!=""){
            //EXISTE ACEPTACIÓN DE COOKIES
            //console.log("Existe cookie: aceptarCookies")
            return true;
        //SI NO EXISTE COOKIE DE ACEPTAR COOKIES Y TAMPOCO HAY VALOR EN LA VARIABLE lang (PUES NO HA HABIDO CAMBIO DE lang EN LA PÁGINA)
        }else if (this.getCookie(cookie)==""){
            //console.log("No existe la cookie: aceptarCookies")
            //MOSTRAMOS LA VENTANA PARA ACEPTAR COOKIES
            this.ventanaCookies()
        }
    }
    //COMPROBAR SI ESTÁN ACEPTADAS SIN MOSTRAR MODAL
    comprobarOkCookie(){
        const cookie = "aceptarCookies"
        //SI EXISTE COOKIE DE ACEPTAR COOKIES
        if(this.getCookie(cookie)!=""){
            //EXISTE ACEPTACIÓN DE COOKIES            
            //console.log("Existe cookie: aceptarCookies")
            return true;
        //SI NO EXISTE COOKIE DE ACEPTAR COOKIES Y TAMPOCO HAY VALOR EN LA VARIABLE lang (PUES NO HA HABIDO CAMBIO DE lang EN LA PÁGINA)
        }else if (this.getCookie(cookie)==""){
            //console.log("No existe la cookie: aceptarCookies")
            return false;
        }
    }
    //MODAL PARA ACEPTAR COOKIES
    ventanaCookies(){
        this.contentWindowCookies=`
        <div class="modal_cookies no_select">
            <div id="cookies">
                <p>Utilizamos cookies propias en nuestra web con el único fin de darte una experiencia inigualable, pero en ti reside aceptarlas o no.</p>
                <div  class='cookies_elements'>                
                    <div class='cookies_botones'>                    
                        <span id= 'cancelCookie' class='btn_cookie cancel_cookie'>Denegar</span>
                        <span id='aceptCookie' class='btn_cookie acept_cookie'>Aceptar</span>
                    </div>
                    <p id="legalcookie" data-tipo="privacidad">Política de privacidad</p>                
                </div>
                <div id="closeCookie" class='cookie_close'>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        `;
    
        document.body.insertAdjacentHTML('afterbegin',this.contentWindowCookies);
        this.window_cookies=document.querySelector('.modal_cookies');
    
        //listeners
        this.cookie_ok = document.getElementById("aceptCookie");
        this.cookie_no = document.getElementById("cancelCookie");
        this.cookie_close = document.getElementById("closeCookie");
    
        //btn aceptCookie
        this.cookie_ok.addEventListener("click",(e)=>{    
            console.log("acepta las cookies!")
            this.setCookie("aceptarCookies", "1", 90);
            this.window_cookies.remove();
            e.target.removeEventListener('click',e.preventDefault(),true);
        },false)
    
        //btn cancelCookies
        this.cookie_no.addEventListener("click",(e)=>{
            console.log("deniega aceptar las cookies!")
            this.window_cookies.remove();
            e.target.removeEventListener('click',e.preventDefault(),true);
        },false)
    
        //boton X
        this.cookie_close.addEventListener("click",(e)=>{
            console.log("cierra la ventana de cookies!")
            this.window_cookies.remove();
            e.target.removeEventListener('click',e.preventDefault(),true);
        },false)
    }
}
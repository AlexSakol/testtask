"use strict";
if(getCookie("accept_cookies") != "true"){
    let accept_btn = document.querySelector("#accept");

    window.addEventListener('DOMContentLoaded', ()=>{
        let offcanvas = document.querySelector("#offcanvas");
        let cookie_notice = new bootstrap.Offcanvas(offcanvas);
        cookie_notice.show();
    });

    accept_btn.addEventListener('click', ()=>{     
        document.cookie = "accept_cookies=true; max-age=86400; path=/";;
    });

}

function getCookie(name) {
    let nameEQ = name + "=";
    let ca = document.cookie.split(';');
    for(var i=0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}

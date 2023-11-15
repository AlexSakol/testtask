"use strict";
let accept_btn = document.querySelector("#accept");

window.addEventListener('DOMContentLoaded', ()=>{
    let offcanvas = document.querySelector("#offcanvas");
    let cookie_notice = new bootstrap.Offcanvas(offcanvas);
    cookie_notice.show();
});

accept_btn.addEventListener('click', ()=>{     
    document.cookie = "accept_cookies=true; max-age=86400; path=/";;
});
$(document).ready(function () {

    'use strict';
    /*Убирал контейнер на nav панели при изменении размера экрана*/
    Resize();
    /*Дропдаун менюшки*/
    $('.dropdown-trigger').dropdown();
    $('.tabs').tabs();
    /*Каллапс для профессий*/
    $('.collapsible').collapsible();
    
    $("#url").html(location.href);
});

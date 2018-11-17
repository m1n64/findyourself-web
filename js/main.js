$(document).ready(function () {
    
    'use strict';
    
    /*Убирал контейнер на nav панели при изменении размера экрана*/
    Resize();
    /*Дропдаун менюшки*/
    $('.dropdown-trigger').dropdown();

    /*ПУШПИН ПИЛЮ*/
//    function push(k){
//        if (k % 2 == 0)
//        {$(".mob").css("margin-top", "7em"); console.log("lol");}else
//            $(".mob").css("margin-top", "2em");
//           console.log(k);
//    }
//    var k =0;
   $('.pushpin-nav').pushpin({
       top:$(".carousel").height(),
       offset: 0,
//       onPositionChange: ()=>{
//           k++;
//           push(k);
//       }
   });
    
    $('.tabs').tabs();
    $('.parallax').parallax();   

    /*Карусель*/
    $('.carousel.carousel-slider').carousel({
        fullWidth: true,
        indicators: true,
        duration: 600,
    });
    /*автоплей карусели*/
    autoplay();

    function autoplay() {
        $('.carousel').carousel('next');
        setTimeout(autoplay, 10000);
    }
});

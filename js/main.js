$(document).ready(function() { 
    /*Убирал контейнер на nav панели при изменении размера экрана*/
    Resize();        
    /*Дропдаун менюшки*/
    $('.dropdown-trigger').dropdown();
    
    /*ПУШПИН ПИЛЮ*/
   $('.pushpin-nav').pushpin({
       top:600,
       offset:0
   });
    
    /*Карусель*/
    $('.carousel.carousel-slider').carousel({
    fullWidth: true,
    indicators: true,
    duration: 600,
    });
     /*автоплей карусели*/
    autoplay() 
    function autoplay() {
    $('.carousel').carousel('next');
    setTimeout(autoplay, 10000);}
});

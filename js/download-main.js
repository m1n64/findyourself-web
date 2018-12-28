$(function(){
    "use strict";
    
    Resize();
    
    $(document).ready(function(){
        $('.parallax').parallax();
    });  
    
    $('.dropdown-trigger').dropdown();

    
    $(window).scroll(function(e){

        var y = getCoords($("#mark1")[0]);
        var yy = getCoords($("#mark2")[0]);
        if (window.scrollY <= yy.top) {
            anime({
                targets: ".nav-wrapper",
                backgroundColor: "#42a5f5"
            });
        }
        else {
            anime({
                targets: ".nav-wrapper",
                backgroundColor: "#00c853"
            });  
        }
        
    });
})(jQuery);
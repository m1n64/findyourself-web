function showError(ex){
    $(".js-error > #error").html(ex);
    $(".js-error").animate({
        opacity: 0.7
    }, 1000);
    setTimeout(function(){
        $(".js-error").animate({
            opacity: 0.0
        }, 1000);
    }, 5000);
}
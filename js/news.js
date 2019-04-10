(function () {
    
    Resize();
    $('.dropdown-trigger').dropdown();
    
    BackgroundCheck.init({
        targets: '.card-title'
    });
    
//    BackgroundCheck.refresh();
})(jQuery);

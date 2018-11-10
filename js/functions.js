function Resize() {
    var windowWidth = $(window).width();
    if (windowWidth > 992) $("#head").addClass("container");
    else $("#head").removeClass("container");

    $(window).resize(function () {
        var windowWidth = $(window).width();
        if (windowWidth > 992) $("#head").addClass("container");
        else $("#head").removeClass("container");
    });
}

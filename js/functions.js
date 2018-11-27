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


/* Create or update a cookie */
function setCookie(cookieName, path, cookieValue, expdays) {
 var d = new Date();
 d.setTime(d.getTime() + (expdays * 24 * 60 * 60 * 1000));
 var expires = "; expires=" + d.toUTCString();
 document.cookie = cookieName + "=" + cookieValue + "; path="+path + expires;
}

/* Get cookie value 
   undefined is returned if the cookie is not available */
function getCookie(cookieName) {
 var name = cookieName + "=";
 var ca = document.cookie.split(';');
 for (var i = 0; i < ca.length; i++) {
  var c = ca[i];
  while (c.charAt(0) === ' ') {
   c = c.substring(1);
  }
  if (c.indexOf(name) === 0) {
   return c.substring(name.length, c.length);
  }
 }

 return undefined;
}

/* Delete a cookie */
function deleteCookie(name, path) {
 setCookie(name, path, "", -1);
}

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

function RusToEng(url){
    var lr = "абвгдеёжзийклмнопрстуфхцчшщъыьэюя";
    var lru = "АБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯ";
    var tr = ["a", "b", "v", "g", "d", "e", "e", "dzj", "z", "i", "i",
        "k", "l", "m", "n", "o", "p", "r", "s", "t", "u", "f", "h", "c",
        "ch", "sh", "sch", "", "i", "b", "e", "y", "ya"];
    var tru = ["A","B","V","G","D","E","E","DZJ","Z","I","I","K","L","M","N","O","P","R","S","T","U","F","H","C","CH","SH","SCH","","I","b","E","Y","YA"];
    
    var newurl = "";
    
    newurl = url.replace(/[А-Яа-я]/g, function(str, offset){
        return tr[lr.indexOf(str)] || tru[lru.indexOf(str)];
    }); 
    return newurl;
}

function RusToEngURL(url){
    var nu = RusToEng(url);
    nu = nu.replace(/(»)|(«)|,|\.|"|'|\?|!|;|:|\(|\)|\[|\]/g, "");
    nu = nu.replace(/\s/g, "+");
    return nu;
}

function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
    return pattern.test(emailAddress);
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

function getCoords(elem) { // кроме IE8-
  var box = elem.getBoundingClientRect();

  return {
    top: box.top + pageYOffset,
    left: box.left + pageXOffset
  };

}

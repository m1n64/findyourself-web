/*
 * 21.11.2018
 * SPBG's teem
 * 14:37
 * Библиотека для представления данных
 */
var Handel = function () {

    'use strict';

    this.Replacer = (obj) => {
        for (let i = 0; i < obj.elems.length; i++) {
            let reg = new RegExp('{{' + obj.elems[i].from + '}}');

            let doc = document.getElementById(obj.elems[i].elem);
            let newString = doc.innerHTML.replace(reg, obj.elems[i].data);

            doc.innerHTML = newString;

        }
    };

    this.JSONReplacer = (obj) => {
        for (let i = 0; i < obj.elems.length; i++) {
            let data = JSON.parse(obj.elems[i].data);

            for (let j = 0; j < data.length; j++) {
                if (data[j].elem.indexOf(":") == -1) {
                    let reg = new RegExp('{{' + data[j].elem + '}}');
                    let doc = document.getElementsByClassName(obj.elems[i].classParentElem);
                    for (let k = 0; k < doc.length; k++) {
                        let newString = doc[k].innerHTML.replace(reg, data[j].data);
                        doc[k].innerHTML = newString;
                    }
                    //                let newString = doc.innerHTML.replace(reg, data[j].data);
                } else {
                    let attrs = data[j].elem.split(":");
                    let doc = document.getElementsByClassName(attrs[1])[0];

                    if (doc.getAttribute(attrs[0]) == "") {
                        doc.setAttribute(attrs[0], "pictures/" + data[j].data);
                    }
                }

            }
        }
    };

    this.PicReplacer = (obj, k) => {
        //for (let i = 0; i < obj.elems.length; i++) {
        let attrs = obj.elems[k].elem.split(":");
        let doc = document.getElementsByClassName(attrs[1])[0];

        //if (doc.getAttribute(attrs[0]) == "") {
        doc.setAttribute(attrs[0], "pictures/" + obj.elems[k].data);
        //}
    };
};
$(document).ready(function () {
    
    'use strict';
    
    /*Убирал контейнер на nav панели при изменении размера экрана*/
    Resize();
    /*Дропдаун менюшки*/
    $('.dropdown-trigger').dropdown();

    var s = $(".emoji_add").emoji($(".emoji_add").html());
    
    var d = $(".card > .card-content").emoji($(".card > .card-content > p").html());
    for (let i = 0; i < d.length; i++) {
        let str = d[i].children[2].outerHTML;
        //console.log(str);
        $("#c"+i+" > .card-content > p").html(str);
    }
    
    $(".emoji_add").click(function(){
        let $this = ` ${$(this).attr("emoji")} `;
        $("#comment").val($("#comment").val()+$this);
    });
    
    /*ПУШПИН ПИЛЮ*/
//    function push(k){
//        if (k % 2 == 0)
//        {$(".mob").css("margin-top", "7em"); console.log("lol");}else
//            $(".mob").css("margin-top", "2em");
//           console.log(k);
//    }
//    var k =0;
    
    setTimeout(()=>{
        $.post(
            location.protocol+"//"+location.host+"/ajax/reviews.ajax.php",
            {
                id: $("#hidden_id").html(),
                views: $(".hidden_views").html()
            },
        );
    }, 500);
    
    $("#addComment").click(function(){
        let $email = $("#email").val();
        let $name = $("#name").val();
        let $comment = $("#comment").val();
        
        if ($email.length > 0 && isValidEmailAddress($email) && $name.length > 0 && $comment.length > 0){
            $.post(
                location.protocol+"//"+location.host+"/ajax/comments.ajax.php",
                {
                    id: $("#hidden_id").html(),
                    name: $name,
                    email: $email,
                    comment: $comment
                },
                (e) => {
                    let date = new Date();
                    var com = EmojiAdder($comment);
                    if (Number($(".num_comments").html()) > 0) 
                        $("#addCommentList").append(`<div class="card"><div class="card-content"><span class="card-title">${$name}</span><span class="right">${date.toLocaleDateString()}</span><p>${com}</p></div></div>`);
                    else location.reload();
                }
            );
        }
        else {
            M.toast({html: "Проверьте правильность данных!"});
        }
    });
    
    $("l").click(function(){
        let reg = new RegExp(/(\w{4,5}:\/\/(www.)?\w+.\w{2,4})/); //(\w{3}.\w+.\w{2,4})|
        location.assign($(this).html().match(reg)[0]); 
    });
    
    function EmojiAdder(text){
        let emoji = new EmojiConvertor();
        return emoji.replace_colons(text);
    }
});

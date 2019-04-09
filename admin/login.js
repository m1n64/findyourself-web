$(document).ready(function () {
    'use strict';
    
    /*Убирал контейнер на nav панели при изменении размера экрана*/
    Resize();
    /*Дропдаун менюшки*/
    $('.dropdown-trigger').dropdown();
    
    $('select').formSelect();
    
    $(".text-сomment").emoji($(".text-сomment").html());
    
    $("#subm").click(function(){
        let login = $("#login").val();
        let pass = $("#pass").val();
        
        login = login.replace(/'/g, "");
        login = login.replace(/-/g, "");
        
        pass = pass.replace(/'/g, "");
        pass = pass.replace(/-/g, "");
        $.post(
            location.protocol+"//"+location.host+ "/admin/ajax/login.ajax.php",
            {
                login: base64_encode(login),
                password: base64_encode(pass) 
            }, 
            (e) => {
                if (e !== "no_data_in_table") {
                    let ea = JSON.parse(e);
                    setCookie("auth_token", "/admin/", ea[0].fy_adm_token, 7);
                    let log = new Log(JSON.stringify( Sniff ), `${location.href}::login-in-system[adm: ${getCookie("auth_token")}]`);
                    log.SaveLog();
                    location.reload();
                }
		else {
		    $("#login_error").html("Вход не удался!");
		}
            }
        );
    });
    
    $("l").click(function(){
        let reg = new RegExp(/(\w{4,5}:\/\/(www.)?\w+.\w{2,4})/); //(\w{3}.\w+.\w{2,4})|
        location.assign($(this).html().match(reg)[0]); 
    });
    
    $(".link").click(function(){
        textFormatting($(this).attr("from"), "<l></l>");
    });
    
    $(".blockquote").click(function(){
        textFormatting($(this).attr("from"), "<blockquote></blockquote>");
    });
    
    $(".exit").click(function(){
        let log = new Log(JSON.stringify( Sniff ), `${location.href}::exit-from-system[adm: ${getCookie("auth_token")}]`);
        log.SaveLog();
        deleteCookie("auth_token", "/admin/");
        location.reload();
    });
    
    $("#name").keyup(function(e){
        let text = $(this).val();
        let rgx = /<script>|<\/script>/gi;
        $(this).val(text.replace(rgx, ""));
        $("#name_news").html($(this).val());    
    });
    
    $("#desc").keyup(function(e){
        let text = $(this).val();
        let rgx = /<script>|<\/script>/gi;
        $(this).val(text.replace(rgx, ""));
        $("#desc_news").html($(this).val()); 
    });
    
    $("#fullName").keyup(function(e){
        let text = $(this).val();
        let rgx = /<script>|<\/script>/gi;
        $(this).val(text.replace(rgx, ""));
        $("#text-news").html($(this).val());
    });
    
    $(".bold").click(function(){
        textFormatting($(this).attr("from"), "<b></b>");
    });
    
    $(".italic").click(function(){
        textFormatting($(this).attr("from"), "<i></i>");
    });
    
    $(".strong").click(function(){
        textFormatting($(this).attr("from"), "<s></s>");
    });
    
    $(".under").click(function(){
        textFormatting($(this).attr("from"), "<u></u>");
    });
    
    $(".redFormat").click(function(){
        textFormatting($(this).attr("from"), "<r></r>");
    });
    
    $(".del").click(function(){
        let id = $(this).attr("id_news");
        let pic = $(this).attr("pic_src");
        $.post(
            location.protocol+"//"+location.host+ "/admin/ajax/delete.ajax.php",
            {
                id: id, 
                pic: pic
            },
            (e) => {
                
                M.toast({html: "Новость удалена!"});
                let log = new Log(JSON.stringify( Sniff ), `${location.href}::remove-news[adm: ${getCookie("auth_token")}]`);
                log.SaveLog();
                //setTimeout(()=>{location.reload();}, 500);
                anime({
                    targets: ".newsBlock"+id,
                    translateX: "-=1500px",
                    duration: 2000,
                    complete: function (){
//                        $(".newsBlock" + $id).css("display", "none");
                        $(".newsBlock" + id).hide();
                    }
                });
            }
        );
    });
    
    $(".delComment").click(function(){
        let id = $(this).attr("id_comment"); 
        $.post(
            location.protocol+"//"+location.host+"/admin/ajax/deletecomment.ajax.php",
            {
                id: id
            }, 
            (e) => {
                M.toast({html: "Комментарий удалён!"});
                let log = new Log(JSON.stringify( Sniff ), `${location.href}::remove-comment[adm: ${getCookie("auth_token")}]`);
                log.SaveLog();
                anime({
                    targets: ".commentBlock"+id,
                    //translateX: "-=1500px",
                    scale: 0, 
                    duration: 1500,
                    complete: function(){
                        $(".commentBlock"+id).hide();
                    }
                });
                //setTimeout(()=>{location.reload();}, 500);
            }
        );
    });
    
    function textFormatting(elem, past){
        let text = $(elem).val();
        text += past;
        $(elem).val(text);
    }
    
	function fileSelected(){
		var file = $("#fileupload").files[0];
		if (file) {
			var fileSize = 0;
			if (file.size > 1024 * 1024) {
				fileSize = (Math.round(file.size * 100 / (1024 * 1024))/100).toString + 'MB';
			}
			else{
				fileSize = (Math.round(file.size * 100 / 1024)/100).toString + 'KB';
			}
			
		}
        
	}
	var name= "";
	function fileUpload(){
		var fd = new FormData();
		fd.append("fileupload", document.getElementById('fileupload').files[0]);
		
		var xhr = new XMLHttpRequest(); //да, родной XHR, а не от jquery, лол
		
		xhr.upload.addEventListener('progress', uploadProgress, false);
		xhr.addEventListener('load', uploadComplete, false);
		xhr.addEventListener('error', uploadFailed, false);
		xhr.addEventListener('abort', uploadCanceled, false);
		
		xhr.open("POST", location.protocol+"//"+location.host+ "/admin/ajax/uploadfile.ajax.php");
		xhr.send(fd);
	}
   
	function uploadProgress(evt){
		$(".determinate").css('width', "0%");
		
		if (evt.lengthComputable){
			var pc = Math.round(evt.loaded * 100 / evt.total);
			
			$(".determinate").css('width', pc.toString()+"%");
		}
		else{
			
		}
	}
	
    
    
	function uploadComplete(evt){
		$("#pic_news").attr("src", location.protocol+"//"+location.host+"/pictures/tmp/"+name);
	}
	
	function uploadFailed(evt){
		alert('Error uploading files!');
	}
	
	function uploadCanceled(evt){
		alert('Uploading canceled by user!');
	}
	
    
//	$("#fileupload").click(function(){
//		fileSelected();
//	});
//    
    $(".file-field").each(function() {
            var b = $(this).find("input.file-path");
            $(this).find('input[type="file"]').change(function() {
                var file = $(this)[0].files[0];
                b.val(file.name);
                b.trigger("change");
                if (file.name.search(/((\.jpg)|(\.png)|(\.bmp)|(\.jpeg))$/i) === -1) M.toast({html: "Ошибка!"});
                else { 
                    fileUpload();
                    name = file.name;
                }
            });
        });
    
    $("#add_news").click(function(){
        let nameNews = $("#name").val();
        let descNews = $("#desc").val();
        let textNews = $("#fullName").val();
        let name = $(".file-path").val();
        
        if (nameNews.length == 0 || descNews.length == 0 || textNews.length == 0 || name.length == "")
            M.toast({html: "Пожалуйста, заполните все поля!"});
        else {           
                $.post(
                    location.protocol+"//"+location.host+"/admin/ajax/publish.ajax.php",
                    {
                        name: nameNews,
                        desc: descNews,
                        text: textNews,
                        fileName: name
                    },
                    (e) => {
                        let log = new Log(JSON.stringify( Sniff ), `${location.href}::add-news[adm: ${getCookie("auth_token")}]`);
                        log.SaveLog();
                        M.toast({html: "Новость добавлена!"});
                        setTimeout(()=>{location.reload();}, 500);
                    }
                );
        }
    });
    
    $(".logTxt").hide();
    //$("#navigator-add").attr("href", `${location.href}#logs-page`);
    
    $(".navigator-li").click(function(){
        let elem = $(this).attr("toScroll");
        $('html, body').animate({scrollTop: $(`#${elem}`).offset().top}, 500);
    });
    
    $(document).on("click", ".openLog", function(){
        let path = $(this).attr("fullpath");
        let id = $(this).attr("id-log");
        switch ($(this).attr("opened")){
            case "f": //открыть
                $.post(
                    location.protocol+"//"+location.host+"/admin/ajax/readfile.ajax.php",
                    {
                        path: base64_encode(path)
                    },
                    (e)=>{
                        $("#log_txt"+id).val(e);
                        $("#log_txt"+id).animate({height: "500px"}, 1000);
                    }
                );
                let log = new Log(JSON.stringify( Sniff ), `${location.href}::log-view[adm: ${getCookie("auth_token")}]`);
                log.SaveLog();
                $(this).attr("opened", "t");
                break;
            
            case "t": //закрыть
                $("#log_txt"+id).val("");
                $("#log_txt"+id).animate({height: "0px"}, 1000, ()=>{$("#log_txt"+id).hide();});
                $(this).attr("opened", "f");
                break;
        }
    });
    
    $("#add-admin").click(function(){
        let $login = $("#adm-login").val();
        let $pass = $("#adm-pass").val();
        let $type = $("#adm-type").val();
        
        if ($login.length == 0 || $pass.length == 0 || $type.length == 0 || $type.length == "") 
            M.toast({html: "Заполните вся поля!"});
        else {
            $.post(
                location.protocol+"//"+location.host+"/admin/ajax/addadmin.ajax.php",
                {
                    login: base64_encode($login),
                    pass: base64_encode($pass),
                    type: base64_encode($type)
                },
                (e)=>{
                    if (e == "done") {
                        let log = new Log(JSON.stringify( Sniff ), `${location.href}::add-adm-account[adm: ${getCookie("auth_token")}]`);
                        log.SaveLog();
                        M.toast({html: "Аккаунт добавлен!"});
                        $("#adm-login").val("");
                        $("#adm-pass").val("");
                        $("#adm-type").val("");
                        location.reload();
                    }
                }
            );
        }
    });
    
    
    $(".delAccount").click(function(){
        let $id = $(this).attr("id_account");
        $.post(
            location.protocol+"//"+location.host+"/admin/ajax/deleteaccount.ajax.php",
            {
                id: base64_encode($id)
            },
            (e)=>{
                if (e == "done") {
                    let log = new Log(JSON.stringify( Sniff ), `${location.href}::del-adm-accounts[adm: ${getCookie("auth_token")}]`);
                    log.SaveLog();
                    anime({
                        targets: "#account"+$id,
                        translateX: "-=1500px",
                        //scale: 0, 
                        duration: 1500,
                        complete: function(){
                            $("#account"+$id).hide();
                        }
                    });
                }
                
            }
        );
    });
    
    $("#getBackup").click(function(){
        $.get(
            location.protocol+"//"+location.host+"/admin/ajax/getbackup.ajax.php",
            { },
            (e)=>{
                M.toast({html: "Процесс..."});
                let log = new Log(JSON.stringify( Sniff ), `${location.href}::log-archive-query[adm: ${getCookie("auth_token")}]`);
                log.SaveLog();
                setTimeout(()=>{
                    M.toast({html: "Успешно!"});
                    $("#backupArchive").html("Скачать");
                    $("#backupArchive").attr("href", e);
                }, 1000);
            }
        ); 
    });
    
    $("#backupArchive").click(function(){
        setTimeout(()=>{
//            $(this).attr("href", "");
            $(this).html("");
            let log = new Log(JSON.stringify( Sniff ), `${location.href}::log-archive-download[adm: ${getCookie("auth_token")}]`);
            log.SaveLog();
        }, 1000);
    });
});

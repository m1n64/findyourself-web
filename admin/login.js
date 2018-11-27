$(document).ready(function () {
    
    'use strict';
    
    /*Убирал контейнер на nav панели при изменении размера экрана*/
    Resize();
    /*Дропдаун менюшки*/
    $('.dropdown-trigger').dropdown();
    
    $("#subm").click(function(){
        let login = $("#login").val();
        let pass = $("#pass").val();
        
        $.post(
            location.protocol+"//"+location.host+ "/admin/ajax/login.ajax.php",
            {
                login: base64_encode(login),
                password: base64_encode(pass) 
            }, 
            (e) => {
                if (e !== "no_data_in_table") {
                    let ea = JSON.parse(e);
                    setCookie("auth_token", "/admin/", ea[0].fy_adm_token, 360);
                    location.reload();
                }
            }
        );
    });
    
    $(".exit").click(function(){
        deleteCookie("auth_token", "/admin/");
        location.reload();
    });
    
    $("#name").keyup(function(e){
        $("#name_news").html($(this).val());    
    });
    
    $("#desc").keyup(function(e){
        $("#desc_news").html($(this).val()); 
    });
    
    $("#fullName").keyup(function(e){
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
        textFormatting($(this).attr("from"), "<span style=\"text-decoration: underline;\"></span>");
    });
    
    $(".redFormat").click(function(){
        textFormatting($(this).attr("from"), "<span style=\"color: #F00;\"></span>");
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
                fileUpload();
                name = file.name;
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
            alert(name);
            $.post(
                location.protocol+"//"+location.host+"/admin/ajax/publish.ajax.php",
                {
                    name: nameNews,
                    desc: descNews,
                    text: textNews,
                    fileName: name
                },
                (e) => {
                    
                }
            );
        }
    });
    
});

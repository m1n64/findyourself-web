<?php

/*
    *@data 18.10.2018
    *@time 1:04
    *@meta Сохранение логов с мобильных устройств
*/

    include $_SERVER['DOCUMENT_ROOT']."/modules/logger.class.php";

    $type = base64_decode(trim($_POST["type"]));
    $data = base64_decode(trim($_POST["data"]));


    $dir = $_SERVER['DOCUMENT_ROOT']."/logs/";
    if (!is_dir($dir)) mkdir($dir); 
    
    $file = date("Ymd").".log";
    
    $data = "\n#####\n[".date("Y-m-d H:i:s")."]\n"."TYPE: $type\n".urldecode($data)."\nIP: {$_SERVER["REMOTE_ADDR"]}\n";

    $log = new Logger($data);
    $log->SaveToFile($dir.$file, $data);

?>
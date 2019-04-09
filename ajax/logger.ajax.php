<?php
/*
    *@data 07.11.2018
    *@time 23:03
    *@meta Логгер для веб-версии
*/
    include $_SERVER['DOCUMENT_ROOT']."/modules/logger.class.php";

    $did = urldecode(base64_decode(trim($_POST["pf"])));
    $data = urldecode(base64_decode(trim($_POST["data"])));

    $dir = $_SERVER['DOCUMENT_ROOT']."/logs/";
    if (!is_dir($dir)) mkdir($dir); 
    
    $file = date("Ymd").".log";

    $ip = $_SERVER['REMOTE_ADDR'];
    $details = file_get_contents("http://ipinfo.io/{$ip}/json");

    $data = "\n#####\n[".date("Y-m-d H:i:s")."]\n"."TYPE: web\nDATA: ".$data."\nDID: ".$did."\nIP: {$details}\n";

    $log = new Logger($data);
    $log->SaveToFile($dir.$file, $data);
?>
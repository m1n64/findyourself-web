<?php
    include $_SERVER[ 'DOCUMENT_ROOT' ] . "/modules/db.class.php";
    include $_SERVER[ 'DOCUMENT_ROOT' ] . "/includes/db_connect.inc.php";

    $db = new DBExpander( $link );

    $login = urldecode(base64_decode($_POST['login']));
    $pass = urldecode(base64_decode($_POST['pass']));
    $type = urldecode(base64_decode($_POST['type']));

    $token = strtoupper(md5("$login:".md5($pass)));

    $db->Insert([
        "fy_adm_login"=>$login,
        "fy_adm_pass"=>md5($pass),
        "fy_adm_token"=>$token,
        "fy_adm_type"=>$type
    ], "fy_admins");
    
    echo "done";
?>
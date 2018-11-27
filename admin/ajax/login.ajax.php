<?php
    include $_SERVER[ 'DOCUMENT_ROOT' ] . "/modules/db.class.php";
    include $_SERVER[ 'DOCUMENT_ROOT' ] . "/includes/db_connect.inc.php";

    $db = new DBExpander($link);

    $login = urldecode(base64_decode($_POST['login']));
    $pass = urldecode(base64_decode($_POST['password']));

    $data = $db->SelectWhere([], [
        "fy_adm_login"=>$login,
        "fy_adm_pass"=>"'".md5($pass)."'"
    ], "fy_admins");
    
    echo $data;
?>
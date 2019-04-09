<?php
    include $_SERVER[ 'DOCUMENT_ROOT' ] . "/modules/db.class.php";
    include $_SERVER[ 'DOCUMENT_ROOT' ] . "/includes/db_connect.inc.php";

    $db = new DBExpander($link);
    
    $id = trim($_POST['id']);
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $comment = trim($_POST['comment']);

    $db->Insert([
        "fy_comm_news_id"=>$id,
        "fy_comm_name"=>$name,
        "fy_comm_email"=>$email,
        "fy_comm_text"=>$comment,
        "fy_comm_ip"=>$_SERVER['REMOTE_ADDR'],
        "fy_comm_date"=>date("Y.m.d")
    ], "fy_news_comments");
?>
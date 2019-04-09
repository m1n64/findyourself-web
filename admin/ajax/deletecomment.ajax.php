<?php
    include $_SERVER[ 'DOCUMENT_ROOT' ] . "/modules/db.class.php";
    include $_SERVER[ 'DOCUMENT_ROOT' ] . "/includes/db_connect.inc.php";

    $db = new DBExpander($link);

    $id = $_POST["id"];

    $db->Delete([
        "fy_comm_id"=>$id    
    ], "fy_news_comments");
?>
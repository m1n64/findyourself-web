<?php
    include $_SERVER[ 'DOCUMENT_ROOT' ] . "/modules/db.class.php";
    include $_SERVER[ 'DOCUMENT_ROOT' ] . "/includes/db_connect.inc.php";

    $db = new DBExpander($link);

    $id = $_POST["id"];
    $pic = $_POST["pic"];

    unlink($_SERVER[ 'DOCUMENT_ROOT' ] . "/pictures/$pic");

    $db->Delete([
        "fy_news_id"=>$id    
    ], "fy_news");
?>
<?php
    include $_SERVER[ 'DOCUMENT_ROOT' ] . "/modules/db.class.php";
    include $_SERVER[ 'DOCUMENT_ROOT' ] . "/includes/db_connect.inc.php";

    $db = new DBExpander($link);

    $name = $_POST['name'];
    $desc = $_POST['desc'];
    $text = $_POST['text'];
    $fileName = trim($_POST['fileName']);

    copy($_SERVER[ 'DOCUMENT_ROOT' ] . "/pictures/tmp/$fileName", $_SERVER[ 'DOCUMENT_ROOT' ] . "/pictures/$fileName");
    unlink($_SERVER[ 'DOCUMENT_ROOT' ] . "/pictures/tmp/$fileName");
    
    if (preg_match("/^\d+/", $fileName)) $fileName = "'".$fileName."'";
    $date = date("Y-m-d");
//    if (preg_match("/^(\d){4}-(\d){2}-\d{2}/", $date)) $date = "'".$date."'";

    $db->Insert([
        "fy_news_name"=>$name,
        "fy_news_short_descr"=>$desc,
        "fy_news_text"=>$text,
        "fy_news_pic"=>$fileName,
        "fy_news_date"=>$date
    ], "fy_news");
?>
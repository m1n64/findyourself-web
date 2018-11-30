<?php
    include $_SERVER[ 'DOCUMENT_ROOT' ] . "/modules/db.class.php";
    include $_SERVER[ 'DOCUMENT_ROOT' ] . "/includes/db_connect.inc.php";

    $db = new DBExpander($link);
    
    $id = trim($_POST['id']);
    $views = trim($_POST['views']);
    
    $db->Update([
        "fy_news_views"=>$views
    ], [
        "fy_news_id"=>$id
    ], "fy_news");
?>
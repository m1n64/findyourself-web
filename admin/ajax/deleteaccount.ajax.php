<?php 
    include $_SERVER[ 'DOCUMENT_ROOT' ] . "/modules/db.class.php";
    include $_SERVER[ 'DOCUMENT_ROOT' ] . "/includes/db_connect.inc.php";

    $db = new DBExpander( $link );

    $id = urldecode(base64_decode($_POST['id']));

    $db->Delete([
        "fy_adm_id"=>$id
    ], "fy_admins");

    echo "done";
?>
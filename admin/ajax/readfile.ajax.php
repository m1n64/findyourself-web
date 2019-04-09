<?php
    include $_SERVER[ 'DOCUMENT_ROOT' ] . "/modules/file.class.php";

    $path = urldecode(base64_decode($_POST['path']));

    $file = new FileApi();

    echo $file->ReadFromFile($path);

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <base href="<?php echo stripos($_SERVER['SERVER_PROTOCOL'],'https') === true ? 'https://' : 'http://' . $_SERVER['SERVER_NAME'].'/';  ?>" />

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="libs/material/css/materialize.min.css" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/form-style.css">
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
    <link type="text/css" rel="stylesheet" href="css/js-errors.css"/>
    <link type="text/css" rel="stylesheet" href="css/news.css"/>
    <link type="text/css" rel="stylesheet" href="css/style-download.css"/>
    <link type="text/css" rel="stylesheet" href="css/style-main.css"/>
    <link type="text/css" rel="stylesheet" href="css/style-professions.css"/>
    <link type="text/css" rel="stylesheet" href="css/style-view_content.css"/>
    <link type="text/css" rel="stylesheet" href="libs/emoji/emoji.css"/>
    <link rel="icon" href="images/icon-96-xhdpi.png" type="image/x-icon"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>FindYourself</title>

    <script type="text/javascript" src="libs/Snif/sniffer.js"></script>
    <script>
        if ( Sniff.browser.fullName == "Internet Explorer" ) {
            location.assign( location.protocol + "//" + location.host + "/errors/BadBrowser.html" );
        }
    </script>
</head>

<body>
    <?php
        $p = $_GET['page'] == '' ? "index.php" : $_GET['page'];
        include_once(dirname(__FILE__) ."/views/$p");

    ?>

    <script>
        var log = new Log( JSON.stringify( Sniff ), location.href + "::load-page" );
        log.SaveLog();
    </script>
</body>

</html>
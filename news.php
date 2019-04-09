<!DOCTYPE html>
<html>

<?php
include $_SERVER[ 'DOCUMENT_ROOT' ] . "/modules/db.class.php";
include $_SERVER[ 'DOCUMENT_ROOT' ] . "/includes/db_connect.inc.php";

$db = new DBExpander( $link );

$p = ( int )( trim( $_GET[ 'p' ] ) == "" || ( int )trim( $_GET[ 'p' ] ) <= 0 ) ? 1 : trim( $_GET[ 'p' ] );
$pageNum = 10;
$news = json_decode( $db->Select( [], "fy_news", "ORDER BY fy_news_date DESC LIMIT $pageNum OFFSET $p" ) );


$pages = round( ( count( $news ) ) / $pageNum ) + 1;
$start = $p * $pageNum - 1;
$stop = ( $p <= 1 ) ? 0 : $p * $pageNum;

//❤❤❤😙😙


?>

<head>
    <base href="<?php echo stripos($_SERVER['SERVER_PROTOCOL'],'https') === true ? 'https://' : 'http://' . $_SERVER['SERVER_NAME'].'/';  ?>"/>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="libs/material/css/materialize.min.css" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/form-style.css">
    <link type="text/css" rel="stylesheet" href="css/news.css"/>
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

    <!-- Навбар -->

    <nav class="pushpin-nav push_nv">
        <div class="nav-wrapper blue lighten-1">
            <div class="container" id="head">
                <a href="/" class="brand-logo hide-on-med-and-down">FindYourself</a>
                <a class='dropdown-trigger hide-on-large-only show-on-medium-and-down' href='#' data-target='dropdown1'>  <i class="large material-icons burger">dehaze</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="professions/">Профессии</a>
                    </li>
                    <li><a href="test/">Тест</a>
                    </li>
                    <li><a href="download-app/">Мобильное приложение</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Dropdown Structure -->
    <ul id='dropdown1' class='dropdown-content blue-text lighten-1'>
        <li><a href="professions/" class="blue-text lighten-1">Профессии</a>
        </li>
        <li><a href="test/" class="blue-text lighten-1">Тест</a>
        </li>
        <li><a href="download-app/" class="blue-text lighten-1">Мобильное приложение</a>
        </li>
    </ul>
    <?php 
        
    ?>
    <div class="container">
        <div class="row ">

        </div>
    </div>
    <div class="container">
        <div class="row center-align">
            <div class="col s12 m10 s8">
                <ul class="pagination">
                    <li class="<?php echo $p-1 <= 0 ? 'disabled' : " "; ?> waves-effect"><a href="news-list/<?php echo $p-1 <= 0 ? 1 : $p-1; ?>"><i class="material-icons">chevron_left</i></a>
                    </li>
                    <?php
                    for ( $i = 1; $i < $pages; $i++ ) {
                        if ( $i == $p ) {
                            ?>
                    <li class="active waves-effect">
                        <a href="news-list/<?php echo $i ?>">
                            <?php echo $i; ?>
                        </a>
                    </li>
                    <?php } else { ?>
                    <li class="waves-effect">
                        <a href="news-list/<?php echo $i ?>">
                            <?php echo $i; ?>
                        </a>
                    </li>
                    <?php } ?>
                    <?php } ?>
                    <li class="<?php echo $p-1 <= 0 ? 'disabled' : " "; ?> waves-effect"><a href="news-list/<?php echo $p+1 >= $pages ? $pages-1 : $p+1; ?>"><i class="material-icons">chevron_right</i></a>
                    </li>

                </ul>
            </div>
        </div>
    </div>

    <footer class="page-footer blue lighten-1">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Сайт "Найди Себя"</h5>
                    <p class="grey-text text-lighten-4">Данный сайт содержит материалы из открытых источников.</p>
                    <span class="footer-attention">Данный сайт собирает данные c устройства для статистики.</span>

                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Ссылки</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="http://brickweb.ru" target="_blank">BRICK</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2018 BRICK. Все права защищены!
                <a class="grey-text text-lighten-4 right" href="https://vk.com/spbg_off" target="_blank">VK</a>
            </div>
        </div>
    </footer>
    <script type="text/javascript" src="libs/jq.min.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>
    <script type="text/javascript" src="js/news.js"></script>
    <script type="text/javascript" src="libs/base64.js"></script>
    <script type="text/javascript" src="libs/material/js/materialize.min.js"></script>
    <script type="text/javascript" src="js/logsave.js"></script>
    <script>
        var log = new Log( JSON.stringify( Sniff ), location.href + "::load-page" );
        log.SaveLog();
    </script>
</body>

</html>
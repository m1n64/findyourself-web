<!DOCTYPE html>
<html>

<?php
include $_SERVER[ 'DOCUMENT_ROOT' ] . "/modules/db.class.php";
include $_SERVER[ 'DOCUMENT_ROOT' ] . "/includes/db_connect.inc.php";

$db = new DBExpander( $link );

$proftypes = json_decode( $db->Select( [], "fy_types_profession" ) );
?>

<head>
    <base href="<?php echo $_SERVER['REQUEST_SCHEME'] . '://' .$_SERVER['SERVER_NAME'].'/';  ?>">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/style-professions.css"/>
    <link type="text/css" rel="stylesheet" href="libs/material/css/materialize.min.css" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/style-news.css"/>
    <link type="text/css" rel="stylesheet" href="css/form-style.css"/>
    <link type="text/css" rel="stylesheet" href="css/js-errors.css"/>
    <link rel="icon" href="images/icon-96-xhdpi.png" type="image/x-icon"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>Профессии</title>

    <script type="text/javascript" src="libs/Snif/sniffer.js"></script>
    <script>
        if ( Sniff.browser.fullName == "Internet Explorer" ) {
            location.assign( location.protocol + "//" + location.host + "/errors/BadBrowser.html" );
        }
    </script>
</head>

<body>
    <span id="url" style="display: none;"></span>
    <div class="js-error">
        <div id="error"></div>
    </div>
    <nav class="nav-fixed">
        <div class="nav-wrapper blue lighten-1">
            <div class="container" id="head">
                <a href="#" class="brand-logo hide-on-med-and-down">FindYourself</a>
                <a class='dropdown-trigger hide-on-large-only show-on-medium-and-down' href='download-app/#' data-target='dropdown1'>  <i class="large material-icons burger">dehaze</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="#">Главная</a>
                    </li>
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
    <ul id='dropdown1' class='dropdown-content'>
        <li><a href="#" class="blue-text lighten-1">Главная</a>
        </li>
        <li><a href="professions/" class="blue-text lighten-1">Профессии</a>
        </li>
        <li><a href="test/" class="blue-text lighten-1">Тест</a>
        </li>
        <li><a href="download-app/" class="blue-text lighten-1">Мобильное приложение</a>
        </li>
    </ul>

    <?php
    $act = trim( $_GET[ 'act' ] );

    switch ( $act ) {

        default: ?>
    <!-- Верхнее описание страницы -->
    <div class="container">
        <div class="row top-desc">
            <div class="col s12 m12 l12 center-align">
                <span class="main-prof-text-head">Выбери профессию</span>
            </div>
            <div class="col s12 m12 l12 center after">
                <span class="main-prof-text">Вам предлагаются различные квалификаии, при выборе которых, вы можете просмотреть список учебных заведений для нужного образования</span>
            </div>
        </div>
    </div>

    <div class="container-fluid">

        <?php

        //$k = true;
        for ( $i = 0; $i < count( $proftypes ); $i++ ) {

            $start = [ 0, 4, 8, 12, 16, 20 ];
            $end = [ 3, 7, 11, 15, 19, 20 ];

            if ( in_array( $i, $start ) ) {
                echo "<div class=\"row\">";
            }
            ?>
        <div class="col s12 m6 l3">
            <ul class="collapsible">
                <li>

                    <div class="collapsible-header card-focus-main">
                        <div class="card-main center-align">
                            <i id="card-icon" class="material-icons">
                                <?php echo $proftypes[$i]->fy_tp_icon; ?>
                            </i>
                            <h1 class="card-name">
                                <?php echo $proftypes[$i]->fy_tp_name; ?>
                            </h1>
                        </div>
                    </div>
                    <div class="collapsible-body">
                        <div class="collection">
                            <?php
                                    $professions = json_decode($db->SelectWhere([], [
                                        "fy_prog_type"=>$proftypes[$i]->fy_tp_id
                                    ], "fy_professions"));

                                    for ($j = 0; $j < count($professions); $j++) {
                                ?>
                            <a href="professions/info/<?php echo $professions[$j]->fy_prog_id; ?>" class="collection-item blue-text lighten-1">
                                <?php echo trim($professions[$j]->fy_prog_name); ?>
                            </a>
                            <?php } ?>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <?php
        if ( in_array( $i, $end ) )echo "</div>";
        ?>
        <?php } ?>
   </div>
<!--    надо сделать профессии локальными!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
    <?php
        break;

        case "info":
            $id = trim( $_GET[ 'id' ] );

            require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . "/libs/simple_html_dom.php" );


            $profession = json_decode( $db->SelectWhere( [], [
                "fy_prog_id" => $id
            ], "fy_professions" ) );

            $html = new simple_html_dom();

            $html = file_get_html( str_replace( "https", "http", trim( $profession[ 0 ]->fy_prog_parselink ) ) );

        ?>
<!--    верстать тут-->
    <div class="row main-inform">
        <div class="col s12 m12 l8 offset-l2">
            <div class="card blue lighten-5">
                <div class="card-content">
                    <span class="card-title work-desc-name">
                        <b><?php echo $profession[0]->fy_prog_name; ?></b>
                    </span>
                    <p class="work-desc-text">
                        <?php echo $profession[0]->fy_prog_desc; ?>
                    </p>
                    <ul class="collapsible">
                    <?php
                        foreach ( $html->find( '.slovar_tabs' ) as $a ) {
                            foreach ( $a->find( 'a' ) as $s ) {
                                if ( !preg_match( '/(>>>)+/', $s ) ) {
                                    ?>
                        <li>
<!--                            тут-->
                            <div class="collapsible-header"><?php echo $s->plaintext; ?></div>
<!--                            и тут-->
                            <div class="collapsible-body white">
                                <ul class="collection education-item">
                            <?php
                                foreach ($a->find("#".$s->href) as $f) {
                                      $k = explode('>>>', $f->plaintext);
                                        for ($i = 0; $i < count($k)-1; $i++) {
                                            $l = explode('-', $k[$i]);
                            ?>
                                    <li class="collection-item"><b><?php echo $l[0];?></b> - <em><?php echo $l[1]; ?></em>( <i><?php echo $l[2]; ?></i> )</li>
                            <?php
                                        }
                                    }
                            ?>
                                </ul>
                            </div>
                        </li>
                    <?php
                                }
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php
            $html->clear();
            unset( $html );
        break;
    }
    ?>



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
                © 2018 SPBG's Team. Все права защищены!
                <a class="grey-text text-lighten-4 right" href="https://vk.com/spbg_off" target="_blank">VK</a>
            </div>
        </div>
    </footer>


    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="libs/jq.min.js"></script>
    <script type="text/javascript" src="js/js-errors.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>
    <script type="text/javascript" src="js/professions.js"></script>
    <script type="text/javascript" src="libs/base64.js"></script>
    <script type="text/javascript" src="libs/material/js/materialize.min.js"></script>
    <script type="text/javascript" src="js/logsave.js"></script>

    <script>
        //do not watch than!
        var log = new Log( JSON.stringify( Sniff ), location.href + "::load-page" );
        log.SaveLog();
    </script>

</body>

</html>

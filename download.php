<!DOCTYPE html>
<html>

<head>
    <base href="<?php echo stripos($_SERVER['SERVER_PROTOCOL'],'https') === true ? 'https://' : 'http://' . $_SERVER['SERVER_NAME'].'/';  ?>" />
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="libs/material/css/materialize.min.css" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/style-download.css"/>
    <link type="text/css" rel="stylesheet" href="css/form-style.css"/>
    <link type="text/css" rel="stylesheet" href="css/js-errors.css"/>
    <link rel="icon" href="images/icon-96-xhdpi.png" type="image/x-icon"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>Приложение "Найди себя"</title>

    <script type="text/javascript" src="libs/Snif/sniffer.js"></script>
    <script>
        if (Sniff.browser.fullName == "Internet Explorer") {
            location.assign(location.protocol+"//"+location.host+"/errors/BadBrowser.html");
        }
    </script>
</head>
<body>
    <div class="js-error">
        <div id="error"></div>
    </div>
    <nav class="nav-fixed">
        <div class="nav-wrapper">
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
    <div class="parallax-container" id="mark1">
        <div class="parallax"><img src="images/mak.jpg">
        </div>
    </div>
    <div class="section white">
        <div class="row container">
            <h2 class="header">"Найди себя"</h2>
            <p class="grey-text text-darken-3 lighten-3">В этом приложении Вы можете просмотреть информацию о профессиях и учереждениях образования, куда можно постпуать. Так же пройти тест, определяющий вашу склонность к какой-либо профессии.</p>
            <div class="changelog">
                <span class="version">
                    2.25.6B
                </span>
            
                <span class="fix-version">
                    <span class="is-alpha">Приложение находиться в Бета-версии!</span>
            
                <ul class="browser-default">
                    <li>Прохождение теста и сохранение результата</li>
                    <li>Некоторые баг-фиксы</li>
                    <li>Ещё баг-фиксы!</li>
                </ul>
                </span>
            </div>
            <div class="download-button right">
                <span class="version">Версия 2.25.6B</span>
                <a href="files/app/2_25_6B.apk" download class="btn waves-effect waves-light blue lighten-1"><i class="material-icons left">file_download</i>Скачать</a>
            </div>
        </div>
    </div>
    <div class="parallax-container" id="mark2">
        <div class="parallax"><img src="images/Screenshot_2.png">
        </div>
    </div>
        <div class="section lime lighten-5">
        <div class="row container">
            <h2 class="header">"PasswordSaver"</h2>
            <p class="grey-text text-darken-3 lighten-3">Если вы постоянно забываете где-то свои пароли, то это приложение для Вас! Это приложение является записной книжкой, куда вы будете записывать свои пароли. Только эта записная книжка будет их ещё и шифровать. Да и сама она защищена PIN-кодом.</p>
            <div class="changelog-green">
                <span class="version">
                    2.13.5
                </span>
            
                <span class="fix-version">
                    <span class="is-alpha">Приложение находиться в Бета-версии!</span>
            
                <ul class="browser-default">
                    <li>Сохранение результата в Базе Данных</li>
                    <li>Защита PIN кодом</li>
                    <li>Шифрование паролей другим алгоритмом</li>
                    <li>Возможность добавлять пароли в избранное</li>
                    <li>Тёмная тема</li>
                    <li>Баг-фиксы</li>
                </ul>
                </span>
            </div>
            <div class="download-button right">
                <span class="version">Версия 2.13.5</span>
                <a href="files/passwordsaver/2_13_5.apk" download class="btn waves-effect waves-light green accent-4"><i class="material-icons left">file_download</i>Скачать</a>
            </div>
        </div>
    </div>
    <div class="parallax-container">
        <div class="parallax"><img src="images/screen2.png">
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


    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="libs/jq.min.js"></script>
    <script type="text/javascript" src="libs/anime.min.js"></script>
    <script type="text/javascript" src="js/js-errors.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>
    <script type="text/javascript" src="js/download-main.js"></script>
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
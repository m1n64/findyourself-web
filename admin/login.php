<!DOCTYPE html>
<html>

<head>
    <base href="http://<?php echo $_SERVER[ 'SERVER_NAME'];?>/"/>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="libs/material/css/materialize.min.css" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="admin/login.css"/>
    <link type="text/css" rel="stylesheet" href="css/form-style.css"/>
    <link type="text/css" rel="stylesheet" href="css/js-errors.css"/>
    
    <link rel="icon" href="images/icon-96-xhdpi.png" type="image/x-icon"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>"Найди себя" | Админка</title>

    <script type="text/javascript" src="libs/Snif/sniffer.js"></script>
    <script>
        if (Sniff.browser.fullName == "Internet Explorer") {
            location.assign(location.protocol+"//"+location.host+"/errors/BadBrowser.html");
        }
    </script>
</head>
<!--
Новая песня группы "Этажность"

Ваганыч написал новую песню для своего проекта <i>"этажность"</i>, а так же клип для неё. 
Песня имеет название <i>"intro"</i>. Это значит, что скоро выходит новый альбом. <b>Ура!</b>


У группы Papa Roach вышли две новых песни

Группа <i>Papa Roach</i> выпустила две новых песни. 
У этих песен довольно схожие обложки, и сам эти песни сделаны в похожих стилях. Скорее всего, они собираются выпускать альбом. <i>Ждём...</i>
-->
<body>
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
                    <li><a class="exit">Выйти</a>
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
        <li><a class="exit blue-text lighten-1">Выйти</a>
        </li>
    </ul>
    <?php if (!isset($_COOKIE["auth_token"])) {?>
    <div class="row">
        <form class="col s12 l4 offset-l4" id="login-form">
            <div class="row">
                <div class="input-field col s12 l12">
                    <input id="login" type="text" class="validate">
                    <label for="login">Логин</label>
                    <span class="helper-text" data-error="" data-success="">Введите логин от админ-панели</span>
                </div>
                <div class="input-field col s12 l12">
                    <input id="pass" type="password" class="validate">
                    <label for="pass">Пароль</label>
                    <span class="helper-text" data-error="" data-success="">Введите пароль от админ-панели</span>
                </div>
                <div class="col s12 l12 white-text">
                    <button type="button" class="btn waves-effect waves-light blue lighten-1" id="subm">Войти</button>
                </div>
            </div>
        </form>
    </div>
    <?php } else { //strtoupper(md5("login:".md5("password"))); ?>
    <div class="row">
        <div class="col s12 l8 offset-l2">
            <div class="card blue lighten-5">
                <div class="card-content">
                    <span class="card-title center-align">Добавить новость</span>
                    <div class="row">
                        <div class="input-field col s12 l6 offset-l3">
                            <input id="name" type="text" class="validate">
                            <label for="name">Название новости</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 l10 offset-l1">
                            <div class="input-field">
                                <p class="label grey-text lighten-1">Краткое описание новости</p>
                                <span>
                                    <button type="button" from="#desc" class="waves-effect waves-blue btn-flat bold"><b>B</b></button>
                                    <button type="button"  from="#desc" class="waves-effect waves-blue btn-flat italic"><i>I</i></button>
                                    <button type="button" from="#desc" class="waves-effect waves-blue btn-flat strong"><s>S</s></button>
                                    <button type="button" from="#desc" class="waves-effect waves-blue btn-flat under"><p style="text-decoration: underline;">U</p></button>
                                    <button type="button" from="#desc" class="waves-effect waves-blue btn-flat redFormat"><p style="color: rgba(255,0,4,1.00)">R</p></button>
                                </span>
                                <textarea id="desc" class="browser-default"></textarea>
                                
                            </div>
                            <div class="input-field">
                                <p class="label grey-text lighten-1">Текст новости</p>
                                <span>
                                    <button type="button" from="#fullName" class="waves-effect waves-blue btn-flat bold"><b>B</b></button>
                                    <button type="button"  from="#fullName" class="waves-effect waves-blue btn-flat italic"><i>I</i></button>
                                    <button type="button" from="#fullName" class="waves-effect waves-blue btn-flat strong"><s>S</s></button>
                                    <button type="button" from="#fullName" class="waves-effect waves-blue btn-flat under"><p style="text-decoration: underline;">U</p></button>
                                    <button type="button" from="#fullName" class="waves-effect waves-blue btn-flat redFormat"><p style="color: rgba(255,0,4,1.00)">R</p></button>
                                    <button type="button" from="#fullName" class="waves-effect waves-blue btn-flat link">LINK</button>
                                    <button type="button" from="#fullName" class="waves-effect waves-blue btn-flat blockquote">blockquote</button>
                                </span>
                                <textarea id="fullName" class="browser-default"></textarea>
                                
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <form action="#" class="col s12 l6 offset-l3">
                            <div class="file-field input-field">
                                <div class="btn blue lighten-1">
                                    <span>Загрузить</span>
                                    <input type="file" id="fileupload">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text">
                                </div>
                            </div>
                        </form>
                        <div class="progress col s12 l10 offset-l1">
                            <div class="determinate" style="width: 0%"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s5 l4 offset-l5">
                            <button type="button" class="btn waves-effect waves-light blue lighten-1" id="add_news">Добавить новость</button>
                        </div>
                    </div>
                    <p class="grey-text lighten-1 justify-align">Предпросмотр:</p>
                    <div id="ts">
                        
                        <h4 id="name_news" class="center-align"></h4>
                        <img id="pic_news" class="center" src="" style="width: 100%"/>
                        <p id="desc_news"></p>
                        <p id="text-news"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        include $_SERVER[ 'DOCUMENT_ROOT' ] . "/modules/db.class.php";
        include $_SERVER[ 'DOCUMENT_ROOT' ] . "/includes/db_connect.inc.php";

        $db = new DBExpander($link);
                  
        $news = json_decode($db->Select(["fy_news_id", "fy_news_name", "fy_news_short_descr", "fy_news_date", "fy_news_pic"], "fy_news"));
        for ($i = 0; $i < count($news); $i++)
        { 
    ?>
    <div class="row">
        <div class="col s12 l8 offset-l2">
            <div class="card blue lighten-5">
                <div class="card-content">
                    <span class="card-title"><?php echo $news[$i]->fy_news_name; ?><a class="del right" id_news="<?php echo $news[$i]->fy_news_id; ?>" pic_src="<?php echo $news[$i]->fy_news_pic; ?>">X</a></span>
                    <span class="date left"><?php echo $news[$i]->fy_news_date; ?></span>
                    <p style="margin-top: 50px;"><?php echo $news[$i]->fy_news_short_descr; ?></p>
                </div>
            </div>
        </div>
    </div>    
    <?php
        }
    ?>
    <?php } ?>
    <script type="text/javascript" src="libs/jq.min.js"></script>
    <script type="text/javascript" src="js/js-errors.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>
    <script type="text/javascript" src="admin/login.js"></script>
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
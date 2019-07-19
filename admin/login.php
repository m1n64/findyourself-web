<!DOCTYPE html>
<html>
    <?php
    include $_SERVER[ 'DOCUMENT_ROOT' ] . "/modules/db.class.php";
    include $_SERVER[ 'DOCUMENT_ROOT' ] . "/includes/db_connect.inc.php";

    $db = new DBExpander($link);
    ?>
    <head>
<!--<base href="<?php echo stripos($_SERVER['SERVER_PROTOCOL'],'https') === true ? 'https://' : 'http://' . $_SERVER['SERVER_NAME'].'/';  ?>" />-->
    <base href="<?php echo $_SERVER['REQUEST_SCHEME'] . '://' .$_SERVER['SERVER_NAME'].'/';  ?>">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="libs/material/css/materialize.min.css" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="admin/login.css"/>
    <link type="text/css" rel="stylesheet" href="css/form-style.css"/>
    <link type="text/css" rel="stylesheet" href="css/js-errors.css"/>
    <link type="text/css" rel="stylesheet" href="libs/emoji/emoji.css"/>
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
    <?php 
    
    if (!isset($_COOKIE["auth_token"])) 
    {
    ?>
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
		<div><span id="login_error" class="red-text lighten-1"></span></div>
                <div class="col s12 l12 white-text">
                    <button type="button" class="btn waves-effect waves-light blue lighten-1" id="subm">Войти</button>
                </div>
            </div>
        </form>
    </div>
    <?php } else { //strtoupper(md5("login:".md5("password"))); ?>
    <?php 
        $access = $db->SelectWhere([], [
            "fy_adm_token"=>"'".$_COOKIE['auth_token']."'"
        ], "fy_admins");
        
	if ($access !== "no_data_in_table") {
        	$access = json_decode($access);
	
    ?>
<!--    QU5USUJSU00gRk9SRVZFUg==    -->
    <div class="row" id="add-news">
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
    <!--
                    кофе - мой друг
                    музыка - мой драг
                    и всё, что вокруг
                    я могу сыграть
                    дорога - мой дом
                    небо - моя тетрадь
                    пока мы в двоём -
                    мы точно не будем спать...
                    
                        Катя <3 <3
    -->
    <div class="navigator hide-on-med-and-down">
        <p class="navigator-li" toScroll="add-news">Добавить новость</p>
        <p class="navigator-li" toScroll="news-list">Список новостей</p>
        <p class="navigator-li" toScroll="logs-page">Просмотр логов</p>
        <?php if ($access[0]->fy_adm_type === 'g') { ?>
            <p class="navigator-li" toScroll="add-adm">Добавить адм. акк.</p>
            <p class="navigator-li" toScroll="log-download">Бэкап логов</p>
        <?php } ?>
    </div>
    <div id="news-list"></div>
    <?php         
        $news = json_decode($db->Select(["fy_news_id", "fy_news_name", "fy_news_short_descr", "fy_news_date", "fy_news_pic"], "fy_news"));
        for ($i = 0; $i < count($news); $i++)
        { 
    ?>
    <div class="row newsBlock<?php echo $news[$i]->fy_news_id; ?>">
        <div class="col s12 l8 offset-l2">
            <div class="card blue lighten-5">
                <div class="card-content">
                    <span class="card-title"><?php echo $news[$i]->fy_news_name; ?><a class="del right" id_news="<?php echo $news[$i]->fy_news_id; ?>" pic_src="<?php echo $news[$i]->fy_news_pic; ?>">X</a></span>
                    <span class="date left"><?php echo $news[$i]->fy_news_date; ?></span>
                    <p style="margin-top: 50px;"><?php echo $news[$i]->fy_news_short_descr; ?></p>
                </div>
                <div class="comments">
                <?php
                    $comments = json_decode($db->SelectWhere( [], [
                            "fy_comm_news_id"=>$news[$i]->fy_news_id
                        ], "fy_news_comments"));
                    for($j = 0; $j < count($comments); $j++) {
                ?>    
                    <div class="comment commentBlock<?php echo $comments[$j]->fy_comm_id; ?>">
                        <span><?php echo $comments[$j]->fy_comm_email." ";echo $comments[$j]->fy_comm_date." "; ?><?php echo $comments[$j]->fy_comm_ip; ?><a class="delComment right" id_comment="<?php echo $comments[$j]->fy_comm_id; ?>">X</a></span>
                        <div class="name-commentator"><b><?php echo $comments[$j]->fy_comm_name; ?></b></div>
                        <div class="text-сomment">
                            <?php echo $comments[$j]->fy_comm_text; ?>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
        </div>
    </div>    
    <?php
        }
    ?>
    <!--    логи -->
    <div class="container z-depth-2" id="logs-page">
        <div class="row">
        <?php 
            include $_SERVER[ 'DOCUMENT_ROOT' ] . "/modules/file.class.php";
        
            $logs = FileApi::GetFilesFromDir($_SERVER[ 'DOCUMENT_ROOT' ] . "/logs/"); 
        
            sort($logs);
            $logs = array_reverse($logs);
            for($i = 0; $i < count($logs); $i++) {
                $data = substr(basename($logs[$i]), 6, 2).".".substr(basename($logs[$i]), 4, 2).".".substr(basename($logs[$i]), 0, 4);
        ?>
            <div class="col l12 s12 m12 logPanel blue lighten-5">
                <span class="openLog" id-log="<?php echo $i; ?>" fullpath="<?php echo $logs[$i]; ?>" opened="f"><?php echo basename($logs[$i]);//strrpos($log,"/"); ?><a class="right grey-text darken-3"><?php echo $data; ?></a></span>
                
                <textarea class="logTxt" id="log_txt<?php echo $i; ?>" style="height: 0%;" readonly></textarea>
            </div>
        <?php } ?>    
        </div>
    </div>
    
    <div id="add-adm"></div>
        <?php if ($access[0]->fy_adm_type == 'g') { ?>
        <div class="container">
            <div class="row">
                <dic class="col s12 m12 l12">
                    <div class="card blue lighten-5">
                        <div class="card-content">
                            <div class="card-title center-align">
                                <h5>Добавить аккаунт администратора</h5>
                            </div>
                            <div class="row">
                                <div class="input-field col s12 m12 l6 offset-l3">
                                    <input type="text" id="adm-login">
                                    <label for="adm-login">Логин</label>
                                </div>
                                <div class="input-field col s12 m12 l6 offset-l3">
                                    <input type="text" id="adm-pass">
                                    <label for="adm-pass">Пароль</label>
                                </div>
                                <div class="input-field col s12 m12 l6 offset-l3">
                                    <select id="adm-type">
                                        <option value="" disabled selected>Выберете режим доступа</option>
                                        <option value="u">Редактор</option>
                                        <option value="g">Администратор</option>
                                    </select>                               
                                </div>
                                <div class="col s12 m12 l12 center">
                                    <a class="waves-effect waves-light btn blue lighten-1" id="add-admin">Добавить</a>
                                </div>
                                <div class="col s12 m12 l12">
                                    <h5 class="center">Список аккаунтов:</h5>
                                    <?php
                                        $accs = json_decode($db->Select(["fy_adm_id", "fy_adm_login", "fy_adm_type", "fy_adm_master"], "fy_admins"));
                                        
                                        for ($i = 0; $i < count($accs); $i++) {
                                            $type = "";
                                            switch($accs[$i]->fy_adm_type) {
                                                case "g": $type = "Администратор"; break;
                                                case "u": $type = "Редактор"; break;
                                            }
                                    ?>
                                        <div class="accounts" id="account<?php echo $accs[$i]->fy_adm_id; ?>">
                                            <span><?php echo $type." "; ?><b><?php echo " ".$accs[$i]->fy_adm_login; ?></b>
                                                <?php if ($accs[$i]->fy_adm_master != "m") { ?>
                                                <a class="right delAccount" id_account="<?php echo $accs[$i]->fy_adm_id; ?>">X</a>
                                                <?php } ?>
                                            </span>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="log-download"></div>
                <div class="col s12 m12 l12">
                    <div class="card blue lighten-5">
                        <div class="card-content">
                            <div class="card-title">
                                Выгрузить бэкап логов:
                            </div>
                            <a class="waves-effect waves-light btn blue lighten-1" id="getBackup">Выгрузить</a>
                            <a id="backupArchive" href="" download></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	   <?php } ?>
        <?php }?>
    <?php } ?>

    
    <script type="text/javascript" src="libs/jq.min.js"></script>
    <script type="text/javascript" src="js/js-errors.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>
    <script type="text/javascript" src="libs/anime.min.js"></script>
    <script type="text/javascript" src="js/logsave.js"></script>
    <script type="text/javascript" src="admin/login.js"></script>
    <script type="text/javascript" src="libs/emoji/emoji.js"></script>
    <script type="text/javascript" src="libs/emoji/jquery.emoji.js"></script>
    <script type="text/javascript" src="libs/base64.js"></script>
    <script type="text/javascript" src="libs/material/js/materialize.min.js"></script>

    <script>
        //do not watch than!
        var log = new Log( JSON.stringify( Sniff ), location.href + "::load-page" );
        log.SaveLog();
    </script>
</body>

</html>
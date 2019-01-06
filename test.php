<!DOCTYPE html>
<html>

<head>
    <base href="<?php echo $_SERVER['REQUEST_SCHEME'] . '://' .$_SERVER['SERVER_NAME'].'/';  ?>">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="libs/material/css/materialize.min.css" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/style-main.css"/>
    <link type="text/css" rel="stylesheet" href="css/form-style.css"/>
    <link type="text/css" rel="stylesheet" href="css/js-errors.css"/>
    <link rel="icon" href="images/icon-96-xhdpi.png" type="image/x-icon"/>
    
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

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
                <a class='dropdown-trigger hide-on-large-only show-on-medium-and-down' href='test/#' data-target='dropdown1'>  <i class="large material-icons burger">dehaze</i></a>
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

    <main class="row-main">
        <div class="row">
            <div class="col s12 m12 l12 center-align">
                <span class="main-test-text-head">Пройти тест</span>
            </div>
            <div class="container">
            <div class="col s12 m12 l12 center after">
                <span class="main-test-text">Вам предлагается 43 пары профессий, причем каждой паре Вы обязаны выбрать одну: наиболее желательную или наименее «противную».</span>
            </div>
            </div>
            <div class="container" id="head">
                <div class="col s12 m12 l12 center before">
                    <a class="waves-effect waves-light btn blue lighten-1" id="result">Результат</a>
                </div>
                <div class="col s12 m12 l12 description">
                    <span>Важно подчеркнуть, что каждый человек обладает личностными свойствами характерными для всех шести типов, однако доминируют при этом черты всего лишь одного или нескольких типов.</span>
                    <div class="my-type"><b></b></div>
                <div>
                <div class="col s12 m8 l10">
                    <canvas id="chart"></canvas>
                </div>
                <div class="col s12 m12 l12 description">
                    <div class="my-type-description"><b>Реалистичному</b> типу личности свойственна эмоциональная стабильность, ориентация на настоящее. Представители данного типа занимаются конкретными объектами и их практическим использованием: вещами, инструментами, машинами. Отдают предпочтение занятиям требующим моторных навыков, ловкости, конкретности.<br/><em>Профессии – механик, электрик, инженер, моряк, шофер и т. п.</em></div>
                    <div class="my-type-description"><b>Артистичный</b> тип отстраняется от отчетливо структурированных проблем и видов деятельности, предполагающих большую физическую силу. В общении с окружающими опираются на свои непосредственные ощущения, эмоции, интуицию и воображение. Ему присущ сложный взгляд на жизнь, гибкость, независимость суждений. Свойственна несоциальность, оригинальность.<br/><em>Профессии – музицирование, занятие живописью, литературное творчество, фотография, театр и пр.</em></div>
                    <div class="my-type-description"><b>Социальный</b> тип ставит перед собой такие цели и задачи, которые позволяют им установить тесный контакт с окружающей социальной средой. Обладает социальными умениями и нуждается в социальных контактах. Стремятся поучать, воспитывать. Гуманны. Способны приспособиться практически к любым условиям. Стараются держаться в стороне от интеллектуальных проблем. Они активны и решают проблемы, опираясь главным образом на эмоции, чувства и умение общаться.<br/><em>Профессии – врач, учитель, психолог, социальный работник и т. п.</em></div>
                    <div class="my-type-description"><b>Конвенциональный</b> тип отдает предпочтение четко структурированной деятельности. Из окружающей его среды он выбирает цели, задачи и ценности, проистекающие из обычаев и обусловленные состоянием общества. Ему характерны серьезность настойчивость, консерватизм, исполнительность. В соответствии с этим его подход к проблемам носит стереотипичный, практический и конкретный характер.<br/><em>Профессии – машинопись, бухгалтерия и пр.</em></div>
                    <div class="my-type-description"><b>Предприимчивый</b> тип избирает цели, ценности и задачи, позволяющие ему проявить энергию, энтузиазм, импульсивность, доминантность, реализовать любовь к приключенчеству. Ему не по душе занятия, связанные с ручным трудом, а также требующие усидчивости, большой концентрации внимания и интеллектуальных усилий. Предпочитает руководящие роли в которых может удовлетворять свои потребности в доминантности и признании. Активен, предприимчив.<br/> 
                        <em>Профессии – директор, журналист, администратор, предприниматель и др.</em></div>
                    <div class="my-type-description"><b>Интеллектуальный</b> тип ориентирован на умственный труд. Он аналитичен, рационален, независим, оригинален. Преобладают теоретические и в некоторой степени эстетические ценности. Размышления о проблеме он предпочитает занятиям по реализации связанных с ней решений. Ему нравится решать задачи, требующие абстрактного мышления.<br/>
                        <em>Профессии в первую очередь научные – математик, программист, физик, астроном и т. д.</em></div>
                </div>
                <div class="col s12 m12 l12"></div>
            </div>
        </div>
    </main>
    
    
    
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
                        <li><a class="grey-text text-lighten-3" href="http://uoggmk.by" target="_blank">Официальный сайт ГГМК</a>
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
        <script type="text/javascript" src="js/test-load.js"></script>
        <script type="text/javascript" src="js/test-main.js"></script>
        <script type="text/javascript" src="libs/base64.js"></script> 
        <script type="text/javascript" src="libs/Chartjs/Chart.bundle.min.js"></script>
        <script type="text/javascript" src="libs/Chartjs/Chart.min.js"></script>
        <script type="text/javascript" src="libs/material/js/materialize.min.js"></script>
        <script type="text/javascript" src="js/logsave.js"></script>
    
        <script>
            //do not watch than!
            var log = new Log(JSON.stringify(Sniff), location.href+"::load-page");
            log.SaveLog();
        </script>

</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="libs/material/css/materialize.min.css" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/form-style.css">
    <link type="text/css" rel="stylesheet" href="css/style.css"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>

<body>

    <!-- Каруселька 
    <div class="full-width">
        <div class="carousel carousel-slider">
            <a class="carousel-item" href="#one!"><img src="images/kruzhka.png"></a>
            <a class="carousel-item" href="#two!"><img src="images/mak.jpg"></a>
            <a class="carousel-item" href="#three!"><img src="images/kaska.jpg"></a>
        </div>
    </div>
   -->
    <div class="carousel carousel-slider center" style="height: 91vh;">
        <div class="carousel-fixed-item center">
        </div>
        <div class="carousel-item first-item white-text" href="#one!">
            <div class="txt">
                <h2>«Когда-нибудь потом»</h2>
                <p class="white-text"> – опаснейшая болезнь, которая рано или поздно похоронит ваши мечты.</p>
            </div>
        </div>
        <div class="carousel-item second-item white-text" href="#two!">
            <div class="txt">
                <h2>Лучшая работа</h2>
                <p class="white-text">— это высокооплачиваемое хобби.</p>
            </div>
        </div>
        <div class="carousel-item thrid-item white-text" href="#three!">
            <div class="txt">
                <h2>Начало</h2>
                <p class="white-text">— половина всего.</p>
            </div>
        </div>
    </div>

    <!-- Навбар -->

    <nav class="pushpin-nav push_nv">
        <div class="nav-wrapper blue lighten-1">
            <div class="container" id="head">
                <a href="#" class="brand-logo hide-on-med-and-down">FindYourself</a>
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

    <div class="container">
        <div class="mob">
            <h2 id="names-tag">"Найди себя"</h2>
            <p>
                В этом приложении вы сможете просмотреть информацию о профессиях и учереждениях образования, куда можно поступать. Так же пройти тест, определяющий вашу склонность к какой-либо профессии.
            </p>
            <div class="alpha">
                <h2 style="margin-top: 5px;">0.12.1 ALPHA</h2>
                <p style="color:red;">Приложение находиться в Альфа версии! Много чего не реализовано!
                </p>

                <ul class="browser-default list">
                    <li>Добавлена возможность пройти тест!</li>
                    <li>Некоторые баг-фисты</li>
                    <li>Некоторые фиксы в дизайне</li>
                </ul>
            </div>
            <div class="row">
                <div class="down right">
                    <p class="version">Версия 0.12ALPHA</p>
                    <a href="files/app/0_12_1A.apk" download class="waves-effect waves-light blue lighten-1 btn"><i class="material-icons left">file_download</i>Скачать</a>
                </div>
            </div>

        </div>
    </div>


    <div class="parallax-container center-align">
        <h4 class="par_text">Наши преимущества</h4>
        <div class="parallax"><img src="images/office.jpg">
        </div>
    </div>

    <div class="container-fluid">
        <div class="row" style="margin-top: 20px">

            <div class="col s12 m6 l4 center-align preim_content">
                <i class="large material-icons ">timeline</i>
                <h4 class="preimush">Офисные работники</h4>
                <blockquote class="left-align txt_car">
                    Бухгалтер, диспетчер по расписанию (методист учебного отдела) , менеджер по персоналу, начальник отдела кадров, всякого рода менентджеры.

                </blockquote>
            </div>


            <div class="col s12 m6 l4 center-align preim_content">
                <i class="large material-icons">code</i>
                <h4 class="preimush">IT-специалисты</h4>
                <blockquote class="left-align txt_car">
                    Это самые востребованные профессии не только начавшегося 2013 года, но и предыдущих 4 лет. И по словам сотрудников служб занятости в разных города, «айтишники» будут все нужнее и нужнее.
                </blockquote>
            </div>


            <div class="col s12 m6 l4 center-align preim_content"><i class="large material-icons">local_hospital</i>
                <h4 class="preimush">Мед. Работники</h4>
                <blockquote class="left-align txt_car">
                    Медицинские реформы привели к уходу молодых медиков после вузов в частные клиники или иные профессии. А вакансии узких специалистов в районах остаются незаполненными.
                </blockquote>
            </div>


            <div class="col s12 m6 l4 center-align preim_content">
                <i class="large material-icons ">build</i>
                <h4 class="preimush">Инженеры</h4>
                <blockquote class="left-align txt_car">
                    На эти вакансии нередко принимают выпускников вузов, сначала на небольшую зарплату на период обучения, но с последующим, довольно быстрым ростом заработной платы.

                </blockquote>
            </div>


            <div class="col s12 m6 l4 center-align preim_content">
                <i class="large material-icons">attach_money</i>
                <h4 class="preimush">Продавцы</h4>
                <blockquote class="left-align txt_car">
                    Рынок вакансий продавцов увеличивается с каждым годом, причем разброс зарплат в этой сфере очень большой – от минимальной до суммы, равной примерно двум средним заработным платам по региону.

                </blockquote>
            </div>


            <div class="col s12 m6 l4 center-align preim_content"><i class="large material-icons">business_center</i>
                <h4 class="preimush">Юристы</h4>
                <blockquote class="left-align txt_car">
                    Но только опытные. Выпускникам юрфаков по-прежнему сложно будет трудоустроиться по специальности.

                </blockquote>
            </div>
        </div>
    </div>

    <div class="parallax-container center-align">
        <h4 class="par_text">Наши новости</h4>
        <div class="parallax"><img src="images/news.jpg">
        </div>
    </div>

    <div class="row" style="margin-top:20px;">
        <div class="col s12">
            <ul class="tabs">
                <li class="tab col s3"><a href="#test1"><i class="material-icons">brightness_1</i></a>
                </li>
                <li class="tab col s3"><a class="active" href="#test2"><i class="material-icons">brightness_1</i></a>
                </li>
                <li class="tab col s3"><a href="#test3"><i class="material-icons">brightness_1</i></a>
                </li>
                <li class="tab col s3"><a href="#test4"><i class="material-icons">brightness_1</i></a>
                </li>
            </ul>
        </div>
        <div id="test1" class="col s12">
            <!-- Типо Слайдера профессия 1-->
            <div class="row">
                <div class="col m6 s12 l3">
                    <div class="card hoverable">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="pictures/top.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Top-10 самых высокооплачиваемых профессий в РБ</span>
                            <p><a href="#">Перейти к статье<i class="material-icons right">more_vert</i></a>
                            </p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Top-10 самых высокооплачиваемых профессий в РБ<i class="material-icons right">close</i></span>
                            <p class="card_p">Для поступающих, студентов и их родителей действительно важно знать, какие же профессии в нашей стране являются самыми высокооплачиваемыми. Ведь четыре года обучения пролетают очень быстро, и настает время выбирать, где и кем ты будешь работать, по специальности или нет.
                                <p><a href="#">Перейти к статье<i class="material-icons right">more_vert</i></a>
                                </p>
                        </div>
                    </div>
                </div>
                <div class="col m6 s12 l3">
                    <div class="card hoverable">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="pictures/Ster.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Стереотипы о профессиях</span>
                            <p><a href="#">Перейти к статье<i class="material-icons right">more_vert</i></a>
                            </p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Стереотипы о профессиях<i class="material-icons right">close</i></span>
                            <p class="card_p">Продавцы крадут. Журналисты обманывают. Врачи неразборчиво пишут. Актёры истеричны. Программисты не ухожены. Художники страдают алкоголизмом. Модели глупые. Дизайнеры вычурные. Певцы самолюбивые. Тренеры грубые. Библиотекари занудные. Милиционер, пилот, водитель, машинист — исключительно мужские профессии. Работать секретарём, кассиром, воспитателем под стать слабому полу, но не сильному — стыдно. Фотосъёмка, визаж, репетиторство — и вовсе занятия, которые легко освоит любой.
                                <p><a href="#">Перейти к статье<i class="material-icons right">more_vert</i></a>
                                </p>
                        </div>
                    </div>
                </div>
                <div class="col m6 s12 l3">
                    <div class="card hoverable">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="pictures/top_2.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Топ-10 самых востребованных профессий в Беларуси</span>
                            <p><a href="#">Перейти к статье<i class="material-icons right">more_vert</i></a>
                            </p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Топ-10 самых востребованных профессий в Беларуси<i class="material-icons right">close</i></span>
                            <p class="card_p">Повторяя общмировые тенденции кадрового обеспечения, в деталях Беларусь следует своим путем. Среди "наших" топ-профессий есть такие, как повар, врач государственной клиники и продавец.
                                <p><a href="#">Перейти к статье<i class="material-icons right">more_vert</i></a>
                                </p>
                        </div>
                    </div>
                </div>
                <div class="col m6 s12 l3">
                    <div class="card hoverable">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="pictures/top.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Интервью с преподавателем</span>
                            <p><a href="#">Перейти к статье<i class="material-icons right">more_vert</i></a>
                            </p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Интервью с преподавателем
«Самое сложное в профессии, среди всей бумажной работы оставить время на работу с детьми»<i class="material-icons right">close</i></span>
                            <p class="card_p">Сегодня мы беседуем с преподавателем учреждения образования «Гомельский государственный машиностроительный колледж» Завацкой Аленой Николаевной. -Расскажите подробнее о том, что вы преподаете? -Я преподаю спец. дисциплины для специальности «Программное обеспечение информационных технологий», а именно «Защиту компьютерной информации» и «Тестирование и отладку программного обеспечения». Это не полный список преподаваемых дисциплин, но эти мне нравятся больше всего, их я преподаю уже 4 года. -Нравится ли Вам ваша работа?
                                <p><a href="#">Перейти к статье<i class="material-icons right">more_vert</i></a>
                                </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div id="test2" class="col s12">

            <div class="row">
                <div class="col m6 s12 l3">
                    <div class="card hoverable">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator c_N1P1" src="">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4 c_N1">{{news_name1}}</span>
                            <p><a href="#">Перейти к статье<i class="material-icons right">more_vert</i></a>
                            </p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4 c_N1">{{news_name1}}<i class="material-icons right">close</i></span>
                            <p class="card_p c_N1">{{news_desc1}}
                                <p><a href="#">Перейти к статье<i class="material-icons right">more_vert</i></a>
                                </p>
                        </div>
                    </div>
                </div>
                <div class="col m6 s12 l3">
                    <div class="card hoverable">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator c_N2P2" src="">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4 c_N2">{{news_name2}}</span>
                            <p><a href="#">Перейти к статье<i class="material-icons right">more_vert</i></a>
                            </p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4 c_N2">{{news_name2}}<i class="material-icons right">close</i></span>
                            <p class="card_p c_N2">{{news_desc2}}
                                <p><a href="#">Перейти к статье<i class="material-icons right">more_vert</i></a>
                                </p>
                        </div>
                    </div>
                </div>
                <div class="col m6 s12 l3">
                    <div class="card hoverable">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="pictures/top.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Top-10 самых высокооплачиваемых профессий в РБ</span>
                            <p><a href="#">Перейти к статье<i class="material-icons right">more_vert</i></a>
                            </p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Top-10 самых высокооплачиваемых профессий в РБ<i class="material-icons right">close</i></span>
                            <p class="card_p">Here is some more information about this product that is only revealed once clicked asdlkjsakldaskldjaskldjaskldjksajdklasjdlkasjdjlkasdkljsalkdaskldkaljsdaskljdasjkldjksakldsajkldjsadkljasdksakljdkljsakdajskdkljasjkdsakdklsakdlaskdkjlasdkjlaskljdkjlsadjklaskjldjskaldjklsakljdlsajklsasjraklljkasaltwktwttwohjtweheqtoon.
                                <p><a href="#">Перейти к статье<i class="material-icons right">more_vert</i></a>
                                </p>
                        </div>
                    </div>
                </div>
                <div class="col m6 s12 l3">
                    <div class="card hoverable">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="pictures/top.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Top-10 самых высокооплачиваемых профессий в РБ</span>
                            <p><a href="#">Перейти к статье<i class="material-icons right">more_vert</i></a>
                            </p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Top-10 самых высокооплачиваемых профессий в РБ<i class="material-icons right">close</i></span>
                            <p class="card_p">Here is some more information about this product that is only revealed once clicked asdlkjsakldaskldjaskldjaskldjksajdklasjdlkasjdjlkasdkljsalkdaskldkaljsdaskljdasjkldjksakldsajkldjsadkljasdksakljdkljsakdajskdkljasjkdsakdklsakdlaskdkjlasdkjlaskljdkjlsadjklaskjldjskaldjklsakljdlsajklsasjraklljkasaltwktwttwohjtweheqtoon.
                                <p><a href="#">Перейти к статье<i class="material-icons right">more_vert</i></a>
                                </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div id="test3" class="col s12">

            <div class="row">
                <div class="col m6 s12 l3">
                    <div class="card hoverable">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="pictures/top.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Top-10 самых высокооплачиваемых профессий в РБ</span>
                            <p><a href="#">Перейти к статье<i class="material-icons right">more_vert</i></a>
                            </p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">{{test1}}<i class="material-icons right">close</i></span>
                            <p class="card_p" id="c_p">{{test2}}
                                <p><a href="#">Перейти к статье<i class="material-icons right">more_vert</i></a>
                                </p>
                        </div>
                    </div>
                </div>
                <div class="col m6 s12 l3">
                    <div class="card hoverable">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="pictures/top.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Top-10 самых высокооплачиваемых профессий в РБ</span>
                            <p><a href="#">Перейти к статье<i class="material-icons right">more_vert</i></a>
                            </p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Top-10 самых высокооплачиваемых профессий в РБ<i class="material-icons right">close</i></span>
                            <p class="card_p">Here is some more information about this product that is only revealed once clicked asdlkjsakldaskldjaskldjaskldjksajdklasjdlkasjdjlkasdkljsalkdaskldkaljsdaskljdasjkldjksakldsajkldjsadkljasdksakljdkljsakdajskdkljasjkdsakdklsakdlaskdkjlasdkjlaskljdkjlsadjklaskjldjskaldjklsakljdlsajklsasjraklljkasaltwktwttwohjtweheqtoon.
                                <p><a href="#">Перейти к статье<i class="material-icons right">more_vert</i></a>
                                </p>
                        </div>
                    </div>
                </div>
                <div class="col m6 s12 l3">
                    <div class="card hoverable">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="pictures/top.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Top-10 самых высокооплачиваемых профессий в РБ</span>
                            <p><a href="#">Перейти к статье<i class="material-icons right">more_vert</i></a>
                            </p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Top-10 самых высокооплачиваемых профессий в РБ<i class="material-icons right">close</i></span>
                            <p class="card_p">Here is some more information about this product that is only revealed once clicked asdlkjsakldaskldjaskldjaskldjksajdklasjdlkasjdjlkasdkljsalkdaskldkaljsdaskljdasjkldjksakldsajkldjsadkljasdksakljdkljsakdajskdkljasjkdsakdklsakdlaskdkjlasdkjlaskljdkjlsadjklaskjldjskaldjklsakljdlsajklsasjraklljkasaltwktwttwohjtweheqtoon.
                                <p><a href="#">Перейти к статье<i class="material-icons right">more_vert</i></a>
                                </p>
                        </div>
                    </div>
                </div>
                <div class="col m6 s12 l3">
                    <div class="card hoverable">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="pictures/top.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Top-10 самых высокооплачиваемых профессий в РБ</span>
                            <p><a href="#">Перейти к статье<i class="material-icons right">more_vert</i></a>
                            </p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Top-10 самых высокооплачиваемых профессий в РБ<i class="material-icons right">close</i></span>
                            <p class="card_p">Here is some more information about this product that is only revealed once clicked asdlkjsakldaskldjaskldjaskldjksajdklasjdlkasjdjlkasdkljsalkdaskldkaljsdaskljdasjkldjksakldsajkldjsadkljasdksakljdkljsakdajskdkljasjkdsakdklsakdlaskdkjlasdkjlaskljdkjlsadjklaskjldjskaldjklsakljdlsajklsasjraklljkasaltwktwttwohjtweheqtoon.
                                <p><a href="#">Перейти к статье<i class="material-icons right">more_vert</i></a>
                                </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div id="test4" class="col s12">

            <div class="row">
                <div class="col m6 s12 l3">
                    <div class="card hoverable">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="pictures/top.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Top-10 самых высокооплачиваемых профессий в РБ</span>
                            <p><a href="#">Перейти к статье<i class="material-icons right">more_vert</i></a>
                            </p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Top-10 самых высокооплачиваемых профессий в РБ<i class="material-icons right">close</i></span>
                            <p class="card_p">Here is some more information about this product that is only revealed once clicked asdlkjsakldaskldjaskldjaskldjksajdklasjdlkasjdjlkasdkljsalkdaskldkaljsdaskljdasjkldjksakldsajkldjsadkljasdksakljdkljsakdajskdkljasjkdsakdklsakdlaskdkjlasdkjlaskljdkjlsadjklaskjldjskaldjklsakljdlsajklsasjraklljkasaltwktwttwohjtweheqtoon.
                                <p><a href="#">Перейти к статье<i class="material-icons right">more_vert</i></a>
                                </p>
                        </div>
                    </div>
                </div>
                <div class="col m6 s12 l3">
                    <div class="card hoverable">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="pictures/top.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Top-10 самых высокооплачиваемых профессий в РБ</span>
                            <p><a href="#">Перейти к статье<i class="material-icons right">more_vert</i></a>
                            </p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Top-10 самых высокооплачиваемых профессий в РБ<i class="material-icons right">close</i></span>
                            <p class="card_p">Here is some more information about this product that is only revealed once clicked asdlkjsakldaskldjaskldjaskldjksajdklasjdlkasjdjlkasdkljsalkdaskldkaljsdaskljdasjkldjksakldsajkldjsadkljasdksakljdkljsakdajskdkljasjkdsakdklsakdlaskdkjlasdkjlaskljdkjlsadjklaskjldjskaldjklsakljdlsajklsasjraklljkasaltwktwttwohjtweheqtoon.
                                <p><a href="#">Перейти к статье<i class="material-icons right">more_vert</i></a>
                                </p>
                        </div>
                    </div>
                </div>
                <div class="col m6 s12 l3">
                    <div class="card hoverable">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="pictures/top.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Top-10 самых высокооплачиваемых профессий в РБ</span>
                            <p><a href="#">Перейти к статье<i class="material-icons right">more_vert</i></a>
                            </p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Top-10 самых высокооплачиваемых профессий в РБ<i class="material-icons right">close</i></span>
                            <p class="card_p">Here is some more information about this product that is only revealed once clicked asdlkjsakldaskldjaskldjaskldjksajdklasjdlkasjdjlkasdkljsalkdaskldkaljsdaskljdasjkldjksakldsajkldjsadkljasdksakljdkljsakdajskdkljasjkdsakdklsakdlaskdkjlasdkjlaskljdkjlsadjklaskjldjskaldjklsakljdlsajklsasjraklljkasaltwktwttwohjtweheqtoon.
                                <p><a href="#">Перейти к статье<i class="material-icons right">more_vert</i></a>
                                </p>
                        </div>
                    </div>
                </div>
                <div class="col m6 s12 l3">
                    <div class="card hoverable">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="pictures/top.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Top-10 самых высокооплачиваемых профессий в РБ</span>
                            <p><a href="#">Перейти к статье<i class="material-icons right">more_vert</i></a>
                            </p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">{{test3}}<i class="material-icons right">close</i></span>
                            <p class="card_p">Here is some more information about this product that is only revealed once clicked asdlkjsakldaskldjaskldjas{{test1}}asjdlkasjdjlkasdk{{test2}}daskldkaljsdaskljdasjkldjksakldsajkldjsadkljasdksakljdkljsakdajskdkljasjkdsakdklsakdlaskdkjlasdkjlaskljdkjlsadjklaskjldjskaldjklsakljdlsajklsasjraklljkasaltwktwttwohjtweheqtoon.
                                <p><a href="#">Перейти к статье<i class="material-icons right">more_vert</i></a>
                                </p>
                        </div>
                    </div>
                </div>
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

    <?php 
        include $_SERVER[ 'DOCUMENT_ROOT' ] . "/modules/db.class.php";
        include $_SERVER[ 'DOCUMENT_ROOT' ] . "/includes/db_connect.inc.php";
    
        $db = new DBExpander($link);
    
        $news = $db->Select([], "fy_news", "ORDER BY fy_news_date DESC");
        
        echo "<p class=\"hidden\" id=\"json\">$news</p>";
        
    ?>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="libs/jq.min.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="libs/base64.js"></script>
    <script type="text/javascript" src="libs/material/js/materialize.min.js"></script>
    <script type="text/javascript" src="js/logsave.js"></script>
    <script type="text/javascript" src="libs/Snif/sniffer.js"></script>
    <script type="text/javascript" src="libs/handeles.js"></script>

    <script>
        var hand = new Handel();
        var news = JSON.parse( $( "#json" ).html() );
        $( "#json" ).html( "" );
        var classes = [ "c_N1", "c_N2" ];
        for ( let i = 0; i < news.length; i++ ) {
            hand.JSONReplacer( {
                elems: [ {
                    classParentElem: classes[ i ],
                    data: JSON.stringify( [ {
                        elem: "news_name1",
                        data: news[ i ].fy_news_name
                    }, {
                        elem: "news_desc1",
                        data: news[ i ].fy_news_short_descr
                    } ] )
                }, {
                    classParentElem: classes[ i ],
                    data: JSON.stringify( [ {
                        elem: "news_name2",
                        data: news[ i ].fy_news_name
                    }, {
                        elem: "news_desc2",
                        data: news[ i ].fy_news_short_descr
                    } ] )
                } ]
            } );
            console.log( i );
        }
        console.log(news);
        for (let i = 0; i < news.length; i++){
            hand.PicReplacer( {
                elems: [ {
                    elem: "src:c_N1P1",
                    data: news[ i ].fy_news_pic
                }, {
                    elem: "src:c_N2P2",
                    data: news[ i ].fy_news_pic
                } ]
            }, i ); console.log(news[ i ].fy_news_pic);
        }
    </script>

    <script>
        var log = new Log( JSON.stringify( Sniff ), location.href + "::load-page" );
        log.SaveLog();
    </script>
</body>

</html>

 <?php
 $id = trim( $_GET[ "id" ] );

 include $_SERVER['DOCUMENT_ROOT'] . "/modules/db.class.php";
 include $_SERVER['DOCUMENT_ROOT'] . "/includes/db_connect.inc.php";

 $db = new DBExpander( $link );

 $news = json_decode( $db->SelectWhere( [], [
     "fy_news_id" => $id
 ], "fy_news" ) );

 $comments = $db->SelectWhere([],[
     "fy_comm_news_id"=>$id
 ],"fy_news_comments");

 $num_comments = count(json_decode($comments));

 include $_SERVER['DOCUMENT_ROOT']."/views/components/header.php";
 ?>
 <span style="display: none" id="hidden_id">
        <? echo $id ?>
    </span>
    <div class="container">
        <!--Заголовок статьи-->
        <div class="row">
            <div class="col m9">

                <div class="col m12">
                    <h4 class="h_content">
                        <?php echo $news[0]->fy_news_name; ?>
                    </h4>
                </div>
                <div class="row">
                    <!--Дата, время и кол-во просмотров статьи-->
                    <div class="date_news left">
                        <div class="views date_cont center-align">
                            <i class="material-icons d_icon">remove_red_eye</i>
                            <p id="count" class="hidden_views">
                                <?php echo $news[0]->fy_news_views+1 ?>
                            </p>
                        </div>

                        <div class="chat date_cont center-align">
                            <i class="material-icons d_icon">chat</i>
                            <p id="count" class="num_comments"> <!--схера ли индивидуальный тут класс, а не ИД? да потому что кто-то из нас мудак, который прописал одинаковые ID и мы хуй знает, куда они ведут. вот так вот -_- -->
                                <?php echo $num_comments; ?>

                            </p>
                        </div>

                        <div class="chat date_cont center-align">
                            <i class="material-icons d_icon">today</i>
                            <p id="count">
                                <?php echo $news[0]->fy_news_date ?>
                            </p>
                        </div>
                    </div>
                </div>

                <img class="responsive-img" src="/pictures/<?php echo $news[0]->fy_news_pic ?>">

                <h4 class="h_news">
                    <?php echo $news[0]->fy_news_short_descr ?>
                </h4>

                <span class="news">
                    <?php echo $news[0]->fy_news_text ?>
                </span>
            </div>

        </div>
    </div>
<!--  СТАСИК, Я ВЫЗЫВАЮ ТЕБЯ!  -->
    <div class="container">
        <div class="row comments">
            <div class="col s12 l12">
                <div class="">
                    <span>Имя: </span>
                    <input type="text" id="name" class="browser-default" style="width: 200px;">
                </div>
                <div class="">
                    <span>E-mail: </span>
                    <input type="text" id="email" class="browser-default" style="width: 200px;">
                </div>
            </div>
            <div class="col s12 l12">
                <div class="center-align" style="margin-top: 30px;">
                    <span>Комментарий: </span>
                    <!--
                        коды эмодзи отсюда:
                        https://unicodey.com/emoji-data/table.htm
                    -->
                    <div class="row emoji-list">
                        <div class="col s1 m1 l1">
                            <span class="emoji_add" emoji=":smile:">:smile:</span>
                        </div>
                        <div class="col s1 m1 l1">
                            <span class="emoji_add" emoji=":joy:">:joy:</span>
                        </div>
                        <div class="col s1 m1 l1">
                            <span class="emoji_add" emoji=":laughing:">:laughing:</span>
                        </div>
                        <div class="col s1 m1 l1">
                            <span class="emoji_add" emoji=":innocent:">:innocent:</span>
                        </div>
                        <div class="col s1 m1 l1">
                            <span class="emoji_add" emoji=":smiling_imp:">:smiling_imp:</span>
                        </div>
                        <div class="col s1 m1 l1">
                            <span class="emoji_add" emoji=":wink:">:wink:</span>
                        </div>
                        <div class="col s1 m1 l1">
                            <span class="emoji_add" emoji=":relieved:">:relieved:</span>
                        </div>
                        <div class="col s1 m1 l1">
                            <span class="emoji_add" emoji=":heart_eyes:">:heart_eyes:</span>
                        </div>
                        <div class="col s1 m1 l1">
                            <span class="emoji_add" emoji=":smirk:">:smirk:</span>
                        </div>
                        <div class="col s1 m1 l1">
                            <span class="emoji_add" emoji=":kissing_closed_eyes:">:kissing_closed_eyes:</span>
                        </div>
                        <div class="col s1 m1 l1">
                            <span class="emoji_add" emoji=":angry:">:angry:</span>
                        </div>
                        <div class="col s1 m1 l1">
                            <span class="emoji_add" emoji=":anguished:">:anguished:</span>
                        </div>

                        <div class="col s1 m1 l1">
                            <span class="emoji_add" emoji=":tired_face:">:tired_face:</span>
                        </div>
                        <div class="col s1 m1 l1">
                            <span class="emoji_add" emoji=":flushed:">:flushed:</span>
                        </div>
                        <div class="col s1 m1 l1">
                            <span class="emoji_add" emoji=":disappointed_relieved:">:disappointed_relieved:</span>
                        </div>
                        <div class="col s1 m1 l1">
                            <span class="emoji_add" emoji=":upside_down_face:">:upside_down_face:</span> <!--🙃 козырь-емодзи-->
                        </div>
                        <div class="col s1 m1 l1">
                            <span class="emoji_add" emoji=":thinking_face:">:thinking_face:</span>
                        </div>
                        <div class="col s1 m1 l1">
                            <span class="emoji_add" emoji=":the_horns:">:the_horns:</span>
                        </div>
                        <div class="col s1 m1 l1">
                            <span class="emoji_add" emoji=":face_with_hand_over_mouth:">:face_with_hand_over_mouth:</span>
                        </div>
                        <div class="col s1 m1 l1">
                            <span class="emoji_add" emoji=":face_palm:">:face_palm:</span>
                        </div>
                        <div class="col s1 m1 l1">
                            <span class="emoji_add" emoji=":neutral_face:">:neutral_face:</span>
                        </div>
                        <div class="col s1 m1 l1">
                            <span class="emoji_add" emoji=":kissing_heart:">:kissing_heart:</span>
                        </div>
                        <div class="col s1 m1 l1">
                            <span class="emoji_add" emoji=":anguished:">:anguished:</span>
                        </div>
                        <div class="col s1 m1 l1">
                            <span class="emoji_add" emoji=":dizzy_face:">:dizzy_face:</span>
                        </div>
                    </div>
                    <textarea name="comment" id="comment" class="browser-default" style="height: 50px;"></textarea>
                </div>
            </div>
            <div class="col s6 l4 offset-s4 offset-l5">
                <button type="button" id="addComment" class="btn btn-block waves-effect waves-block blue lighten-1">Добавить</button>
            </div>
        </div>
        <?php

            if ($comments != "no_data_in_table") {
                $comments = json_decode($comments);
        ?>
        <div class="row">
            <div class="col s12 l12" id="addCommentList">
                <?php for($i = 0; $i < count($comments); $i++) { ?>
                    <div class="card" id="c<?php echo $i; ?>">
                        <div class="card-content">
                          <span class="card-title"><?php echo $comments[$i]->fy_comm_name; ?></span>
                          <span class="right"><?php echo $comments[$i]->fy_comm_date; ?></span>
                            <p><?php echo $comments[$i]->fy_comm_text; ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <?php } ?>
    </div>


    <?php
    include $_SERVER['DOCUMENT_ROOT']."/views/components/footer.php";
    ?>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="../libs/jq.min.js"></script>
    <script type="text/javascript" src="../js/functions.js"></script>
    <script type="text/javascript" src="../libs/emoji/emoji.js"></script>
    <script type="text/javascript" src="../libs/emoji/jquery.emoji.js"></script>
    <script type="text/javascript" src="../js/view_content.js"></script>
    <script type="text/javascript" src="../libs/base64.js"></script>
    <script type="text/javascript" src="../libs/material/js/materialize.min.js"></script>
    <script type="text/javascript" src="../js/logsave.js"></script>

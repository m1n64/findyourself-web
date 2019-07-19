<?php
include $_SERVER['DOCUMENT_ROOT'] . "/modules/db.class.php";
include $_SERVER['DOCUMENT_ROOT'] . "/includes/db_connect.inc.php";

$db = new DBExpander( $link );

$proftypes = json_decode( $db->Select( [], "fy_types_profession" ) );
?>
    <span id="url" style="display: none;"></span>
    <div class="js-error">
        <div id="error"></div>
    </div>
    <?php include $_SERVER['DOCUMENT_ROOT']."/views/components/header.php"; ?>
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

            require_once($_SERVER['DOCUMENT_ROOT'] . "/libs/simple_html_dom.php");


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


<?php
include $_SERVER['DOCUMENT_ROOT']."/views/components/footer.php";
?>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="../libs/jq.min.js"></script>
    <script type="text/javascript" src="../js/js-errors.js"></script>
    <script type="text/javascript" src="../js/functions.js"></script>
    <script type="text/javascript" src="../js/professions.js"></script>
    <script type="text/javascript" src="../libs/base64.js"></script>
    <script type="text/javascript" src="../libs/material/js/materialize.min.js"></script>
    <script type="text/javascript" src="../js/logsave.js"></script>

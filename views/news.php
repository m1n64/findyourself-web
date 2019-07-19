<div class="js-error">
        <div id="error"></div>
    </div>
    <?php 
        include $_SERVER['DOCUMENT_ROOT']."/views/components/header.php";
    ?>

<?php
include $_SERVER['DOCUMENT_ROOT'] . "/modules/db.class.php";
include $_SERVER['DOCUMENT_ROOT'] . "/includes/db_connect.inc.php";
include $_SERVER['DOCUMENT_ROOT'] . "/modules/strings.class.php";

$db = new DBExpander( $link );

$p = ( int )( trim( $_GET[ 'p' ] ) == "" || ( int )trim( $_GET[ 'p' ] ) <= 0 ) ? 1 : trim( $_GET[ 'p' ] );
$pageNum = 10;


$start = $p * $pageNum - 1;
$stop = ( $p <= 1 ) ? 0 : $p * $pageNum;
$news = json_decode( $db->Select( [], "fy_news", "ORDER BY fy_news_date DESC LIMIT $pageNum OFFSET $stop" ) );
$pages = round( ( count( $news ) ) / $pageNum ) + 1;
?>


<div class="container">
        <div class="row center-block">
            <div class="col s12 m12 l12">
                <h4>Все новости:</h4>
            </div>
            <?php foreach ($news as $n) { ?>
            <div class="col s12  m11 l10">
                <div class="card blue lighten-5">
                    <div class="card-image">
                        <img src="pictures/<?php echo $n->fy_news_pic; ?>" class="news-image">
                        <span class="card-title">
                            <?php echo $n->fy_news_name;?>
                        </span>
                    </div>
                    <div class="card-content">
                        <div class="news-short">
                            <p>
                                <?php echo $n->fy_news_short_descr;?>
                            </p>
                        </div>
                        <?php $latnam = StringOperations::ru2lat($n->fy_news_name); ?>
                        <div class="news-link"><a href="news/<?php echo "{$n->fy_news_id}/{$latnam}/"; ?>" class="btn-link">Читать продолжение...</a></div>
                    </div>
                </div>
            </div>
            <?php } ?>
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
                    <li class="<?php echo $p+1 >= $pages ? 'disabled' : " "; ?> waves-effect"><a href="news-list/<?php echo $p+1 >= $pages ? $pages : $p+1; ?>"><i class="material-icons">chevron_right</i></a>
                    </li>

                </ul>
            </div>
        </div>
    </div>

    <?php
        include $_SERVER['DOCUMENT_ROOT']."/views/components/footer.php";
    ?>

    <script type="text/javascript" src="../libs/jq.min.js"></script>
    <script type="text/javascript" src="../js/functions.js"></script>
    <script type="text/javascript" src="../libs/background-check.min.js"></script>
    <script type="text/javascript" src="../libs/base64.js"></script>
    <script type="text/javascript" src="../libs/material/js/materialize.min.js"></script>
    <script type="text/javascript" src="../js/logsave.js"></script>
    <script type="text/javascript" src="../js/news.js"></script>

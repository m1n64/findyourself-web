<?php
include $_SERVER['DOCUMENT_ROOT'] . "/modules/sqlite.db.class.php";

$db = new DBExpander();

$r = $db->Select([], "fy_admins");

$t = json_decode($r);

foreach ($t as $ttt) {
    echo $ttt->fy_adm_token;
}

<?php

$db_info = [
    "user_name" => "ZnlfdXNlcg==",
    "user_password" => "ZmluZF95b3Vyc2VsZlNQREIxMjY1",
    "user_db" => "ZmluZF95b3Vyc2VsZl9kYg==",
    "user_host" => "MTI3LjAuMC4x"
];

$link = mysqli_connect(base64_decode($db_info["user_host"]), base64_decode($db_info["user_name"]), base64_decode($db_info["user_password"]), base64_decode($db_info["user_db"])) or die("Error DB connect");
//$link = mysqli_connect("127.0.0.1", "root", "", "find_yourself_db");
?>
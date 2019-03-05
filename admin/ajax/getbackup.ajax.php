<?php

$zip = new ZipArchive();
if (!is_dir($_SERVER[ 'DOCUMENT_ROOT' ] . "/backups/")) mkdir($_SERVER[ 'DOCUMENT_ROOT' ] . "/backups/");
$filename = $_SERVER[ 'DOCUMENT_ROOT' ] . "/backups/".date("ymdhis").".zip";

if ($zip->open($filename, ZipArchive::CREATE)!==TRUE) {
    exit("Невозможно открыть <$filename>\n");
}

foreach (scandir($_SERVER[ 'DOCUMENT_ROOT' ] . "/logs/") as $file) {
	if ($file !== "." && $file !== "..") $zip->addFile($_SERVER[ 'DOCUMENT_ROOT' ] . "/logs/".$file, basename($file));
}
$zip->close();

echo "/backups/".date("ymdhis").".zip";
?>
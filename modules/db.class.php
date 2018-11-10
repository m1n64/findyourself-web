<?php

/*
    *@data 19.10.2018
    *@time 1:52
    *@meta Класс работы с ДБ
*/

    include $_SERVER['DOCUMENT_ROOT']."/includes/db_connect.inc.php";

    class DBExpander
    {
        public $connect;
        
        function __construct()
        {
            $this->connect = $link;
        }
        
        
    }

?>
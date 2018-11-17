<?php
/*
    *@data 18.10.2018
    *@time 0:23
    *@meta Класс для работы с логами
*/
include dirname(__FILE__)."/file.class.php";

class Logger extends FileApi
{
    private $data = "";
    
    function __construct($data) {
         $this->data = $data;
    }
    
    public function SaveEncodeB64($file){
        return SaveToFile($file, base64_encode($data)."\n");
    }
    
    public function GetData(){
        return $this->data;
    }
}

?>
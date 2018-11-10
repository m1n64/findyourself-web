<?php
/*
    *@data 18.10.2018
    *@time 0:23
    *@meta API для работы с сайтом
*/

class FileApi
{
    public function SaveToFile($file, $data)
    {
        $f = file_put_contents($file, $data, FILE_APPEND);
        return $f ? true : false;
    }
    
    public function ReadIntoFile($file)
    {
        $t = file_get_contents($file);
        return strlen($t) > 0 ? $t : false;
    }
}

?>
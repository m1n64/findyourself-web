<?php

/*
    *@data 15.11.2018
    *@time 22:58
    *@meta Класс исключений
*/

/*
    * $message = Текст ошибки
    * $code = Код ошибки
    * Коды ошибки базы данных начинаются с 5000
    * Расшифровка кодов: X[1]X[2]X[3]X[4]
    * [1] - Ошибка какого компонента
    * [2] - Тип его ошибки
    * [3], [4] - Подтипы ошибки
*/

class DBConnectionException extends Exception
{  
    function __construct($message = "Connection Error", $code = 5000)
    {
        parent::__construct($message, $code);
    }
}

class DBInsertException extends Exception
{  
    function __construct($message = "Insert SQL Error", $code = 5100)
    {
        parent::__construct($message, $code);
    }
}

class DBSelctException extends Exception
{  
    function __construct($message = "Select SQL Error", $code = 5200)
    {
        parent::__construct($message, $code);
    }
}

class DBUpdateException extends Exception
{  
    function __construct($message = "Update SQL Error", $code = 5300)
    {
        parent::__construct($message, $code);
    }
}


?>
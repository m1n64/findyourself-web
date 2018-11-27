<?php

/*
    *@data 19.10.2018
    *@time 1:52
    *@meta Класс работы с ДБ
*/    
    include $_SERVER['DOCUMENT_ROOT']."/modules/exceptions.class.php";

    class DBExpander
    {
        private $connect;
        
        function __construct($link)
        {
            $this->connect = $link;
        }
        
        function Select(array $tables, string $table, string $add = "")
        {
            $rows = "";
            if (count($tables) == 0)
                $rows = "*";
            else
            {
                $k = 0;
                $rows = "( ";
                foreach ($tables as $tbl)
                {
                    $rows .= "$tbl";
                    if ($k != count($tables)-1) $rows .= ", ";
                    $k++;
                }
                $rows .= " )";
            }
            
            $sql = "SELECT $rows FROM $table $add";
            
            $q = mysqli_query($this->connect, $sql);
            
            if (mysqli_num_rows($q) > 0)
            {
                $row = mysqli_fetch_array($q);
                $values = [];
                do
                {
                    foreach($row as $key => $value)
                    {
//                      $match = [];
                        if (!preg_match("/\d+/", $key))
                            $tmp_values[$key] = $value;
                    }
                    $values[] = $tmp_values;
                }
                while($row = mysqli_fetch_array($q));
            
                return json_encode($values);
            }
            else
                return "no_data_in_table";
        }
        
        function SelectWhere(array $tables, array $data, string $table, $logic = "AND", string $add = "")
        {
            $rows = ""; 
            $log = "";
            $where = "";
            switch (strtoupper($logic))
            {
                default:
                case "AND":
                    $log = "AND";
                    break;
                    
                case "OR":
                    $log = "OR";
                    break;
            }
            if (count($tables) <= 0)
                $rows = "*";
            else
            {
                $k = 0;
                $rows = "( ";
                foreach ($tables as $tbl)
                {
                    $rows .= "$tbl";
                    if ($k != count($tables)-1) $rows .= ", ";
                    $k++;
                }
                $rows .= " )";
            }
            foreach ($data as $key=>$d)
            {
                if (preg_match("/\d+/", $d))
                    $where .= "$key = $d $log ";
                else
                    $where .= "$key = '$d' $log ";
            }
            //$where = mb_substr($where, 0, (strlen($where)+strlen($log))-strrpos($where, $log));
            $tmp = explode(" ", $where);
            unset($tmp[count($tmp)-2]);
            $where = implode(" ", $tmp);
            
            $sql = "SELECT $rows FROM $table WHERE $where $add";

            $q = mysqli_query($this->connect, $sql);
                    
            if (mysqli_num_rows($q) > 0)
            {
                $row = mysqli_fetch_array($q);
                $values = [];
                do
                {
                    foreach($row as $key => $value)
                    {
//                      $match = [];
                        if (!preg_match("/\d+/", $key))
                            $tmp_values[$key] = $value;
                    }
                    $values[] = $tmp_values;
                }
                while($row = mysqli_fetch_array($q));
            
                return json_encode($values);
            }
            else
                return "no_data_in_table";
        }
        
        function Insert(array $data, string $table)
        {
            $rows = "";
            $values = "";

            $k = 0;
            foreach ($data as $key => $d)
            {
                $rows .= "$key";
                if (!preg_match("/\d+/", $d))
                    $values .= "'$d'";
                else
                    $values .= "$d";
                if ($k != count($data)-1) 
                {
                    $rows .= ", ";
                    $values .= ", ";
                }
                $k++;
            }
            $sql .= "INSERT INTO $table($rows) VALUES($values)";

            mysqli_query($this->connect, $sql);
        }
    }

?>
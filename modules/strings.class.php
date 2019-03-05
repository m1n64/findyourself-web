<?php

class StringOperations {

    public static function WordMatch($words, $input, $sensitivity){ 
         $shortest = -1; 
         foreach ($words as $word) { 
             $lev = levenshtein($input, $word); 
             if ($lev == 0) { 
                 $closest = $word; 
                 $shortest = 0; 
                 break; 
             } 
             if ($lev <= $shortest || $shortest < 0) { 
                 $closest  = $word; 
                 $shortest = $lev; 
             } 
         } 
         if($shortest <= $sensitivity){ 
             return $closest; 
         } else { 
             return 0; 
         } 
     } 
}
?>
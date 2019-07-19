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
    
    public function ReadFromFile($file)
    {
        $t = file_get_contents($file);
        return strlen($t) > 0 ? $t : false;
    }
    
    public static function GetFilesFromDir( $dir )
    { 	
        $filenames = array(); 	
        $dir = rtrim( $dir, '/' ); // удалим слэш на конце 
        if( is_dir($dir) )
        { 		
            if( $handle = opendir($dir) )
            { 			
                chdir( $dir ); 			
                while( false !== ($file = readdir($handle)) )
                { 				
                    if( $file != "." && $file != '..' )
                    { 					
                        if( is_dir($file) )
                        { 						
                            $arr = FileApi::GetFilesFromDir( $file ); 						
                            foreach( $arr as $value ) 
                                $filenames[] = $dir .'/'. $value; 					
                        } 					
                        else 
                        {
                            $filenames[] = $dir .'/'. $file; 					
                        } 				
                    } 			
                } 			
                chdir('../'); 		
            } 		
            closedir( $handle ); 	
        } 	
        return $filenames; 
    } 
    
//    public function GetFilesFromDir($dir)
//    {
//        
//    }
}

?>
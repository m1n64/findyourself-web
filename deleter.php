<?php

function delFolder($dir)
{
	$files = array_diff(scandir($dir), array('.','..'));
	foreach ($files as $file) 
	{
		(is_dir("$dir/$file")) ? delFolder("$dir/$file") : unlink("$dir/$file");
	}
	
	return rmdir($dir);
}

delFolder($_SERVER[ 'DOCUMENT_ROOT' ] . "/pictures/tmp/");

?>
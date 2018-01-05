<?php
function showerror()
	{	
		//die("<h1>Input error. . Return to <a href = http://96.41.213.117/> HOME</a>");
		die("Input error. .".mysql_errno(). " : ".mysql_error());
	}
?>

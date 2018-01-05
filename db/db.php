<?php
   $hostName = "localhost";
   $databaseName = "stream";
   $username = "suser";
   $password = "password";
   
	
  	function clean($input, $maxlength)
 	{
     $input = substr($input, 0, $maxlength);
    $input = EscapeShellCmd($input);
   return ($input);
  }
?>

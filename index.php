<html><head><title>php hit counter</title></head>
<style>
	body{font-family: system-ui, san-serif;}
</style>
<body>
<h1>
<! -- html -->
PHP HIT COUNTER <br />
<hr />
<h1 />
<?php  
// this is php  
session_start();// start a session 
$_SESSION['pagename'] = "zulu index";
include "db/pushhits.php";
// turn php off 
?>
<h1>
<a href="db/" target = "_blank">data</a>
</h1>
<?php phpinfo(); ?>
I'm not sure if this works.
<?php
// Turn off all error reporting
error_reporting(0);
// Report simple running errors
error_reporting(E_ERROR | E_WARNING | E_PARSE);
// Reporting E_NOTICE can be good too (to report uninitialized
// variables or catch variable name misspellings ...)
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);
// Report all PHP errors (see changelog)
error_reporting(E_ALL);
 // Report all PHP errors
error_reporting(-1);
// Same as error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);
?>
</body>
</html>

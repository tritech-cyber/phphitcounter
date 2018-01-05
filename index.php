<?php
session_start();
$_SESSION['pagename'] = "zulu index";
include "db/pushhits.php";
?>

html
<p>Solarized Light Background:</p>
<a href="db/" target = "_blank">data</a>
<pre>
<div style="padding:1.5em;font-size:120%;font-weight:bold;background-color:#fdf6e3;">
<span style="color:#002b36">base03   #002b36  (  0,  43,  54)</span>
<span style="color:#073642">base02   #073642  (  7,  54,  66)</span>
<span style="color:#586e75">base01   #586e75  ( 88, 110, 117)</span>
<span style="color:#657b83">base00   #657b83  (101, 123, 131)</span>
<span style="color:#839496">base0    #839496  (131, 148, 150)</span>
<span style="color:#93a1a1">base1    #93a1a1  (147, 161, 161)</span>
<span style="color:#eee8d5">base2    #eee8d5  (238, 232, 213)</span>
<span style="color:#fdf6e3">base3    #fdf6e3  (253, 246, 227)</span>
<span style="color:#b58900">yellow   #b58900  (181, 137,   0)</span>
<span style="color:#cb4b16">orange   #cb4b16  (203,  75,  22)</span>
<span style="color:#dc322f">red      #dc322f  (220,  50,  47)</span>
<span style="color:#d33682">magenta  #d33682  (211,  54, 130)</span>
<span style="color:#6c71c4">violet   #6c71c4  (108, 113, 196)</span>
<span style="color:#268bd2">blue     #268bd2  ( 38, 139, 210)</span>
<span style="color:#2aa198">cyan     #2aa198  ( 42, 161, 152)</span>
<span style="color:#859900">green    #859900  (133, 153,   0)</span>
</div>
</pre>

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

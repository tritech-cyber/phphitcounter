<html>
<head>
<title> index for db/</title>
</head>
<?php
//seesion_start();
echo "ip ";
	 $str1 = getenv('REMOTE_ADDR');
$str1 = $_SERVER['REMOTE_ADDR'];
echo "$str1";
include 'usage.php';
?>
</html>

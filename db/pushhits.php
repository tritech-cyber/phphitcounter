<?php
	include 'db.php'; include 'error.php'; 
	echo " $hostName     $databaseName  $username <br />"; 
	if(!($connection = mysqli_connect($hostName,$username, $password))) die ("Counld not connect to database.");
 
	$dbname = "stream";
	mysqli_select_db( $connection,$dbname);

	$result = mysqli_query ($connection,"SELECT CURDATE();");
	$row = mysqli_fetch_row($result);
	$date = $row[0];
   
	$result = mysqli_query ($connection, "SELECT CURTIME();");
	$row = mysqli_fetch_row($result);
	$time = $row[0];

	$str0 = '';
	$str1 = $_SERVER['REMOTE_ADDR'];
	$str2 = $time;
	$str3 = $date;
	$str4 = $_SESSION['pagename'];
	echo " $str1 : $date : $time <br>"; 
	$query = "INSERT INTO stream.hits (`id`, `ip`, `timein`, `datein`, `pagename`) VALUES (NULL,'$str1','$str2','$str3','$str4');";
	echo "$query";
	$result = @ mysqli_query ($connection,$query)  or showerror();			
	mysqli_close($connection);

?>


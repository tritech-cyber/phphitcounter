<?php
include 'db.php';
?>

<html>
<head>
  <title> hits</title>
</head>
<body>
<tt>

<?php
	$connection = mysqli_connect("localhost",$username,$password);
	$dbname = "stream";
	mysqli_select_db( $connection,$dbname);
	$sql = "select * from stream.hits;";
	$result = mysqli_query ($connection,$sql);
	$totalrows = mysqli_num_rows($result);
	$sql = "select * from stream.hits order by id desc limit 50;";
	$result = mysqli_query ($connection,$sql);
	$therows = mysqli_num_rows($result);
	echo "$totalrows hits.<br><br>";
	while ($row = mysqli_fetch_row($result)){
		for ($i=0; $i<mysqli_num_fields($result); $i++){							
			echo "$row[$i] * ";		
		}
		echo "<br> ";
	}
	mysqli_close($connection);
?>
</tt>
</body>
</html>  

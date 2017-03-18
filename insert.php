
<?php

define('DB_NAME', 'fantasyleague');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');

//connecting to mysql
$con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD);
if($con)
	echo 'connected successfully';

$db_selected = mysql_select_db(DB_NAME, $con);
if($db_selected)
	echo 'connected db successfully';

$sql = "INSERT INTO users (id1, id2) VALUES ('123as', '123as')";
//
$query=mysql_query($con,$sql);

if($query)
	echo 'data inserted successfully';
else
	echo 'lost';
?>

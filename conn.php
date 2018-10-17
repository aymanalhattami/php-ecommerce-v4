<?php
@define('DBHOST', 'localhost');
@define('DBUSER', 'root');
@define('DBPASS', '');
@define('DBNAME', 'm4a');

$con = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME)or die("Error connect");
mysqli_query($con, "SET NAMES UTF8");
mysqli_query($con, "SET CHARACTER SET UTF8");

?>
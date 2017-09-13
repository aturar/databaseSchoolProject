<?php
$connection1 = mysqli_connect('mansci-db.uwaterloo.ca', 'aturar', 'aturar');
if(!$connection1){
	die("Database Connection Failed" . mysqli_error($connection1));
}
$select_db = mysqli_select_db($connection1, 'aturar');
if(!$select_db){
	die("Database Selection Failed" . mysqli_error($connection1));
}
?>

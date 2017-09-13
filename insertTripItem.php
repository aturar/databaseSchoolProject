<?php
	require("connect.php");
	$connection=mysql_connect ($dbhost, $dbuser, $dbpassword);	
	$id=$_POST['id'];
	$id = mysql_escape_String($id);
	mysql_select_db($dbname) or die(mysql_error());
	$strSQL = "INSERT INTO `trip`(`trip_id`) VALUES ($id)";
	$rs = mysql_query($strSQL);
	mysql_close();
?>

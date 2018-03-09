<?php
$dbhost = 'mansci-db.uwaterloo.ca';
$dbuser = 'aturar';
$dbpassword = '';
$dbname = 'aturar';
$mysqli = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);
if ($mysqli->connect_errno) 
{
echo 'Failed to connect to MySQL: (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error;
}

?>

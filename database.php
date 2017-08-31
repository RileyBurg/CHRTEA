<?php
$server = 'localhost';
$username = 'chr_timeuser';
$password = 'cyber!1234';
$database = 'chr_time';

$connection = mysqli_connect($server, $username, $password);
if (!$connection) {
	die("Database Connection Failed" . mysqli_error($connection));
}

$select_db = mysqli_select_db($connection, $database);
if (!$select_db) {
	die("Database Selection Failed" . mysqli_error($connection));
}

?>

<?php 
session_start();
require 'database.php';
	
	$empName = $_POST['employName'];
	$_SESSION["message"] ="";
	$empSql = "SELECT empnum FROM `employ` WHERE fulfst ='" . $empName . "'";
		
	$EmpNumResult = mysqli_fetch_array(mysqli_query($connection, $empSql));
		//print $EmpNumResult[0];

		$recnum = $_POST['recnum'];
		$indate = $_POST['inDate'];
		$employName = $_POST['employName'];
		$clas = $_POST['clas'];
		$job = $_POST['job'];
		$phase = $_POST['phase'];
		$costCode = $_POST['costCode'];
		$regTime = $_POST['regTime'];
		$overTime = $_POST['overTime'];
		$doubleTime = $_POST['doubleTime'];
		$notes = $_POST['notes'];

	if(!empty($indate) && !empty($EmpNumResult) && !empty($employName) && !empty($clas) && !empty($job) && !empty($phase) && !empty($costCode) && !empty($regTime) && !empty($notes)) 
	{
    	$timeRecordUpdate = "UPDATE `dlytme` SET dtewrk='$indate', empnum='$EmpNumResult[0]', usrnme='$employName', paygrp='$clas', jobnum='$job', phsnum='$phase', cstcde='$costCode', REGHRS='$regTime', OVTHRS='$overTime', DBLHRS='$doubleTime', ntetxt='$notes' WHERE linnum='$recnum'";
    }
	
	else
	{
		$_SESSION["message"] = "An error occured please try again." . "<br>";
	}
	
	if (mysqli_query($connection, $timeRecordUpdate)) {
    	$_SESSION["message"] = "Record updated successfully";
	} 	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Time Submit</title>
	<meta http-equiv="refresh" content="0; url=http://chrap.chreynolds.com/editEntries.php" />
</head>
<body onload="editEntries.php">

</body>
</html>
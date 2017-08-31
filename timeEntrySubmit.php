<?php 
session_start();
require 'database.php';
	
	$empName = $_POST['employName'];
	$_SESSION["message"] ="";
	$empSql = "SELECT empnum FROM `employ` WHERE fulfst ='" . $empName . "'";
		
	$EmpNumResult = mysqli_fetch_array(mysqli_query($connection, $empSql));
		//print $EmpNumResult[0];

		$indate = $_POST['inDate'];
		$employName = $_POST['employName'];
		$clas = $_POST['clas'];
		$job = $_POST['job'];

		$costCode = $_POST['costCode'];
		$phase = $_POST['phase'];
		$regTime = $_POST['regTime'];
		$overTime = $_POST['overTime'];
		$doubleTime = $_POST['doubleTime'];
		$notes = $_POST['notes'];

		$costCode2 = $_POST['costCode2'];
		$phase2 = $_POST['phase2'];
		$regTime2 = $_POST['regTime2'];
		$overTime2 = $_POST['overTime2'];
		$doubleTime2 = $_POST['doubleTime2'];
		$notes2 = $_POST['notes2'];

		$costCode3 = $_POST['costCode3'];
		$phase3 = $_POST['phase3'];
		$regTime3 = $_POST['regTime3'];
		$overTime3 = $_POST['overTime3'];
		$doubleTime3 = $_POST['doubleTime3'];
		$notes3 = $_POST['notes3'];

		$costCode4 = $_POST['costCode4'];
		$phase4 = $_POST['phase4'];
		$regTime4 = $_POST['regTime4'];
		$overTime4 = $_POST['overTime4'];
		$doubleTime4 = $_POST['doubleTime4'];
		$notes4 = $_POST['notes4'];

		$costCode5 = $_POST['costCode5'];
		$phase5 = $_POST['phase5'];
		$regTime5 = $_POST['regTime5'];
		$overTime5 = $_POST['overTime5'];
		$doubleTime5 = $_POST['doubleTime5'];
		$notes5 = $_POST['notes5'];

		/*
		echo $indate."<br>";
		echo $EmpNumResult."<br>";
		echo $employName."<br>";
		echo $clas."<br>";
		echo $job."<br>";
		echo $phase."<br>";
		echo $costCode."<br>";
		echo $regTime."<br>";
		echo $doubleTime."<br>";
		echo $overTime."<br>";
		echo $notes."<br>";

		echo $indate."<br>";
		echo $EmpNumResult."<br>";
		echo $employName."<br>";
		echo $clas."<br>";
		echo $job."<br>";
		echo $phase2."<br>";
		echo $costCode2."<br>";
		echo $regTime2."<br>";
		echo $doubleTime2."<br>";
		echo $overTime2."<br>";
		echo $notes2."<br>";

		echo $indate."<br>";
		echo $EmpNumResult."<br>";
		echo $employName."<br>";
		echo $clas."<br>";
		echo $job."<br>";
		echo $phase3."<br>";
		echo $costCode3."<br>";
		echo $regTime3."<br>";
		echo $doubleTime3."<br>";
		echo $overTime3."<br>";
		echo $notes3."<br>";
	
		echo $indate."<br>";
		echo $EmpNumResult."<br>";
		echo $employName."<br>";
		echo $clas."<br>";
		echo $job."<br>";
		echo $phase4."<br>";
		echo $costCode4."<br>";
		echo $regTime4."<br>";
		echo $doubleTime4."<br>";
		echo $overTime4."<br>";
		echo $notes4."<br>";

		echo $indate."<br>";
		echo $EmpNumResult."<br>";
		echo $employName."<br>";
		echo $clas."<br>";
		echo $job."<br>";
		echo $phase5."<br>";
		echo $costCode5."<br>";
		echo $regTime5."<br>";
		echo $doubleTime5."<br>";
		echo $overTime5."<br>";
		echo $notes5."<br>";*/

	//|| empty($regTime) || empty($overTime) || empty($doubleTime)

	if(empty($indate) || empty($EmpNumResult) || empty($employName) || empty($clas) || empty($job) || 
		empty($phase) || empty($costCode))
	{
    		
    	$_SESSION["message"] = "Please enter at least (1) row of data." . "<br>";
    }
    else
    {
    	if(!empty($phase) && !empty($costCode))
		{
			$timeRecord = "INSERT INTO `dlytme` (dtewrk, empnum, usrnme, paygrp, jobnum, phsnum, cstcde, REGHRS, OVTHRS, DBLHRS, ntetxt) VALUES ('$indate', '$EmpNumResult[0]', '$employName', '$clas','$job', '$phase', '$costCode', '$regTime', '$overTime', '$doubleTime', '$notes')";
		}

    	if(!empty($phase2) && !empty($costCode2))
		{
			$timeRecord = "INSERT INTO `dlytme` (dtewrk, empnum, usrnme, paygrp, jobnum, phsnum, cstcde, REGHRS, OVTHRS, DBLHRS, ntetxt) VALUES ('$indate', '$EmpNumResult[0]', '$employName', '$clas','$job', '$phase', '$costCode', '$regTime', '$overTime', '$doubleTime', '$notes'), ('$indate', '$EmpNumResult[0]', '$employName', '$clas','$job', '$phase2', '$costCode2', '$regTime2', '$overTime2', '$doubleTime2', '$notes2')";
		}
		
		if(!empty($phase3) && !empty($costCode3))
		{
			$timeRecord = "INSERT INTO `dlytme` (dtewrk, empnum, usrnme, paygrp, jobnum, phsnum, cstcde, REGHRS, OVTHRS, DBLHRS, ntetxt) VALUES ('$indate', '$EmpNumResult[0]', '$employName', '$clas','$job', '$phase', '$costCode', '$regTime', '$overTime', '$doubleTime', '$notes'), ('$indate', '$EmpNumResult[0]', '$employName', '$clas','$job', '$phase2', '$costCode2', '$	regTime2', '$overTime2', '$doubleTime2', '$notes2'), ('$indate', '$EmpNumResult[0]', '$employName', '$clas','$job', '$phase3', '$costCode3', '$regTime3', '$overTime3', '$doubleTime3', '$notes3')";
		}

		if(!empty($phase4) && !empty($costCode4)) 
		{
			$timeRecord = "INSERT INTO `dlytme` (dtewrk, empnum, usrnme, paygrp, jobnum, phsnum, cstcde, REGHRS, OVTHRS, DBLHRS, ntetxt) VALUES ('$indate', '$EmpNumResult[0]', '$employName', '$clas','$job', '$phase', '$costCode', '$regTime', '$overTime', '$doubleTime', '$notes'), ('$indate', '$EmpNumResult[0]', '$employName', '$clas','$job', '$phase2', '$costCode2', '$	regTime2', '$overTime2', '$doubleTime2', '$notes2'), ('$indate', '$EmpNumResult[0]', '$employName', '$clas','$job', '$phase3', '$costCode3', '$regTime3', '$overTime3', '$doubleTime3', '$notes3'), ('$indate', '$EmpNumResult[0]', '$employName', '$clas','$job', '$phase4', '$costCode4', '$regTime4', '$overTime4', '$doubleTime4', '$notes4')";
		}
		
		if(!empty($phase5) && !empty($costCode5))
		{
			$timeRecord = "INSERT INTO `dlytme` (dtewrk, empnum, usrnme, paygrp, jobnum, phsnum, cstcde, REGHRS, OVTHRS, DBLHRS, ntetxt) VALUES ('$indate', '$EmpNumResult[0]', '$employName', '$clas','$job', '$phase', '$costCode', '$regTime', '$overTime', '$doubleTime', '$notes'), ('$indate', '$EmpNumResult[0]', '$employName', '$clas','$job', '$phase2', '$costCode2', '$	regTime2', '$overTime2', '$doubleTime2', '$notes2'), ('$indate', '$EmpNumResult[0]', '$employName', '$clas','$job', '$phase3', '$costCode3', '$regTime3', '$overTime3', '$doubleTime3', '$notes3'), ('$indate', '$EmpNumResult[0]', '$employName', '$clas','$job', '$phase4', '$costCode4', '$regTime4', '$overTime4', '$doubleTime4', '$notes4'), ('$indate', '$EmpNumResult[0]', '$employName', '$clas','$job', '$phase5', '$costCode5', '$regTime5', '$overTime5', '$doubleTime5', '$notes5')";
		}
    }
	
	if (mysqli_query($connection, $timeRecord))
	{
    	$_SESSION["message"] = "New record created successfully";
	}
	else if (mysqli_query($connection, $timeRecord) && mysqli_query($connection, $timeRecord2) 
		|| mysqli_query($connection, $timeRecord3)
		|| mysqli_query($connection, $timeRecord4) 
		|| mysqli_query($connection, $timeRecord5)) 
	{
		$_SESSION["message"] = "New records created successfully";
	}
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Time Submit</title>
	<meta http-equiv="refresh" content="0; url=http://chrap.chreynolds.com/timeEntry.php" />
</head>
<body onload="timeEntry.php">

</body>
</html>

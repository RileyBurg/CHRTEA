<?php
session_start();
require 'database.php';

//Querys for drop downs
$employSql = "SELECT fulfst FROM employ";
$jobSql	 = "SELECT DISTINCT jobnum FROM jobphs";
$phaseSql = "SELECT phsnum, phsnme FROM jobphs";
$costCodeSql = "SELECT cstcde, cdenme FROM cstcde";
$classSql = "SELECT grpnme FROM paygrp";

$recDateSql = "SELECT dtewrk FROM dlytme";
$recEnumSql = "SELECT empnum FROM dlytme";
$recEnmeSql = "SELECT usrnme FROM dlytme";
$recJobSql = "SELECT jobnum FROM dlytme";
$recPhaseSql = "SELECT phsnum FROM dlytme";
$recCstCdeSql = "SELECT cstcde FROM dlytme";
$recPaySql = "SELECT paygrp FROM dlytme";
$recRegSql = "SELECT REGHRS FROM dlytme";
$recOvrSql = "SELECT OVTHRS FROM dlytme";
$recDblSql = "SELECT DBLHRS FROM dlytme";
$recNoteSql = "SELECT ntetxt FROM dlytme";
$recNumSql = "SELECT linnum FROM dlytme";
$recExpSql = "SELECT expflg FROM dlytme";

$DteFil = $_GET['DteFil'];

$recDateWESql = "SELECT dtewrk FROM dlytme WHERE dtewrk <= '$DteFil' AND dtewrk >= '$DteFil'-6";
$recEnumWESql = "SELECT empnum FROM dlytme WHERE dtewrk <= '$DteFil' AND dtewrk >= '$DteFil'-6";
$recEnmeWESql = "SELECT usrnme FROM dlytme WHERE dtewrk <= '$DteFil' AND dtewrk >= '$DteFil'-6";
$recJobWESql = "SELECT jobnum FROM dlytme WHERE dtewrk <= '$DteFil' AND dtewrk >= '$DteFil'-6";
$recPhaseWESql = "SELECT phsnum FROM dlytme WHERE dtewrk <= '$DteFil' AND dtewrk >= '$DteFil'-6";
$recCstCdeWESql = "SELECT cstcde FROM dlytme WHERE dtewrk <= '$DteFil' AND dtewrk >= '$DteFil'-6";
$recPayWESql = "SELECT paygrp FROM dlytme WHERE dtewrk <= '$DteFil' AND dtewrk >= '$DteFil'-6";
$recRegWESql = "SELECT REGHRS FROM dlytme WHERE dtewrk <= '$DteFil' AND dtewrk >= '$DteFil'-6";
$recOvrWESql = "SELECT OVTHRS FROM dlytme WHERE dtewrk <= '$DteFil' AND dtewrk >= '$DteFil'-6";
$recDblWESql = "SELECT DBLHRS FROM dlytme WHERE dtewrk <= '$DteFil' AND dtewrk >= '$DteFil'-6";
$recNoteWESql = "SELECT ntetxt FROM dlytme WHERE dtewrk <= '$DteFil' AND dtewrk >= '$DteFil'-6";
$recNumWESql = "SELECT linnum FROM dlytme WHERE dtewrk <= '$DteFil' AND dtewrk >= '$DteFil'-6";
$recExpWESql = "SELECT expflg FROM dlytme WHERE dtewrk <= '$DteFil' AND dtewrk >= '$DteFil'-6";

$NmeFil = $_GET['NmeFil'];

$recDateNameSql = "SELECT dtewrk FROM dlytme WHERE usrnme = '" . $NmeFil . "'";
$recEnumNameSql = "SELECT empnum FROM dlytme WHERE usrnme = '" . $NmeFil . "'";
$recEnmeNameSql = "SELECT usrnme FROM dlytme WHERE usrnme = '" . $NmeFil . "'";
$recJobNameSql = "SELECT jobnum FROM dlytme WHERE usrnme = '" . $NmeFil . "'";
$recPhaseNameSql = "SELECT phsnum FROM dlytme WHERE usrnme = '" . $NmeFil . "'";
$recCstCdeNameSql = "SELECT cstcde FROM dlytme WHERE usrnme = '" . $NmeFil . "'";
$recPayNameSql = "SELECT paygrp FROM dlytme WHERE usrnme = '" . $NmeFil . "'";
$recRegNameSql = "SELECT REGHRS FROM dlytme WHERE usrnme = '" . $NmeFil . "'";
$recOvrNameSql = "SELECT OVTHRS FROM dlytme WHERE usrnme = '" . $NmeFil . "'";
$recDblNameSql = "SELECT DBLHRS FROM dlytme WHERE usrnme = '" . $NmeFil . "'";
$recNoteNameSql = "SELECT ntetxt FROM dlytme WHERE usrnme = '" . $NmeFil . "'";
$recNumNameSql = "SELECT linnum FROM dlytme WHERE usrnme = '" . $NmeFil . "'";
$recExpNameSql = "SELECT expflg FROM dlytme WHERE usrnme = '" . $NmeFil . "'";

//The result of the query for each connection
$empResult=mysqli_query($connection, $employSql);
$jobResult=mysqli_query($connection, $jobSql);
$phaseResult=mysqli_query($connection, $phaseSql);
$costCodeResult=mysqli_query($connection, $costCodeSql);
$classResult=mysqli_query($connection, $classSql);

//store query in var for ALL
$recDateRes = mysqli_query($connection, $recDateSql);
$recEnumRes = mysqli_query($connection, $recEnumSql);
$recEnmeRes = mysqli_query($connection, $recEnmeSql);
$recJobRes = mysqli_query($connection, $recJobSql);
$recPhaseRes = mysqli_query($connection, $recPhaseSql);
$recCstCdeRes = mysqli_query($connection, $recCstCdeSql);
$recPayRes = mysqli_query($connection, $recPaySql);
$recRegRes = mysqli_query($connection, $recRegSql);
$recOvrRes = mysqli_query($connection, $recOvrSql);
$recDblRes = mysqli_query($connection, $recDblSql);
$recNoteRes = mysqli_query($connection, $recNoteSql);
$recNumRes = mysqli_query($connection, $recNumSql);
$recExpRes = mysqli_query($connection, $recExpSql);

//store query in var for DATE
$recDateWERes = mysqli_query($connection, $recDateWESql);
$recEnumWERes = mysqli_query($connection, $recEnumWESql);
$recEnmeWERes = mysqli_query($connection, $recEnmeWESql);
$recJobWERes = mysqli_query($connection, $recJobWESql);
$recPhaseWERes = mysqli_query($connection, $recPhaseWESql);
$recCstCdeWERes = mysqli_query($connection, $recCstCdeWESql);
$recPayWERes = mysqli_query($connection, $recPayWESql);
$recRegWERes = mysqli_query($connection, $recRegWESql);
$recOvrWERes = mysqli_query($connection, $recOvrWESql);
$recDblWERes = mysqli_query($connection, $recDblWESql);
$recNoteWERes = mysqli_query($connection, $recNoteWESql);
$recNumWERes = mysqli_query($connection, $recNumWESql);
$recExpWERes = mysqli_query($connection, $recExpWESql);

//store query in var for NAME
$recDateNameRes = mysqli_query($connection, $recDateNameSql);
$recEnumNameRes = mysqli_query($connection, $recEnumNameSql);
$recEnmeNameRes = mysqli_query($connection, $recEnmeNameSql);
$recJobNameRes = mysqli_query($connection, $recJobNameSql);
$recPhaseNameRes = mysqli_query($connection, $recPhaseNameSql);
$recCstCdeNameRes = mysqli_query($connection, $recCstCdeNameSql);
$recPayNameRes = mysqli_query($connection, $recPayNameSql);
$recRegNameRes = mysqli_query($connection, $recRegNameSql);
$recOvrNameRes = mysqli_query($connection, $recOvrNameSql);
$recDblNameRes = mysqli_query($connection, $recDblNameSql);
$recNoteNameRes = mysqli_query($connection, $recNoteNameSql);
$recNumNameRes = mysqli_query($connection, $recNumNameSql);
$recExpWNameRes = mysqli_query($connection, $recExpWESql);

//The amount of rows in the Query
$recResNum = mysqli_num_rows($recDateRes);
$row_count_emp = mysqli_num_rows($empResult);
$row_count_job = mysqli_num_rows($jobResult);
$row_count_phase = mysqli_num_rows($phaseResult);
$row_count_costCode = mysqli_num_rows($costCodeResult);
$row_count_class = mysqli_num_rows($classResult);

//Arrays that will hold the query values
$empArray = array();
$jobArray = array();
$phaseArray = array();
$costArray = array();
$classArray = array();

//Arrays that will hold the query values FOR SUMMARY TABLE

//ARRAY FOR ALL
$recDateArray = array();
$recEnumArray = array();
$recEnmeArray = array();
$recJobArray = array();
$recPhaseArray = array();
$recCstCdeArray = array();
$recPayArray = array();
$recRegArray = array();
$recOvrArray = array();
$recDblArray = array();
$recNotesArray = array();
$recNumArray = array();
$recExpArray = array();

//ARRAY FOR WEEKENDING
$recDateWEArray = array();
$recEnumWEArray = array();
$recEnmeWEArray = array();
$recJobWEArray = array();
$recPhaseWEArray = array();
$recCstCdeWEArray = array();
$recPayWEArray = array();
$recRegWEArray = array();
$recOvrWEArray = array();
$recDblWEArray = array();
$recNotesWEArray = array();
$recNumWEArray = array();
$recExpWEArray = array();

//ARRAY FOR NAME
$recDateNameArray = array();
$recEnumNameArray = array();
$recEnmeNameArray = array();
$recJobNameArray = array();
$recPhaseNameArray = array();
$recCstCdeNameArray = array();
$recPayNameArray = array();
$recRegNameArray = array();
$recOvrNameArray = array();
$recDblNameArray = array();
$recNotesNameArray = array();
$recNumNameArray = array();
$recExpNameArray = array();

//DROP DOWN ARRAY STORAGE
while($empRow = mysqli_fetch_array($empResult))
{
    $empArray[]= array($empRow['fulfst']);
}
while ($jobRow = mysqli_fetch_array($jobResult))
{
	$jobArray[]= array($jobRow['jobnum']);
}
while ($phaseRow = mysqli_fetch_array($phaseResult))
{
	$phaseArray[]= array($phaseRow['phsnum'] . ", " . $phaseRow['phsnme']);
}
while ($costRow = mysqli_fetch_array($costCodeResult))
{
	$costArray[]= array($costRow['cstcde'] . ", " . $costRow['cdenme']);
}
while ($classRow = mysqli_fetch_array($classResult))
{
	$classArray[]= array($classRow['grpnme']);
}

//FILTERED SUMMARY TABLE DATA STORAGE IN ARRAYS (ALL)
while($recDateRow = mysqli_fetch_array($recDateRes))
{
	$recDateArray[] = array($recDateRow['dtewrk']);	
}
while($recEnumRow = mysqli_fetch_array($recEnumRes))
{
	$recEnumArray[] = array($recEnumRow['empnum']);	
}
while($recEnmeRow = mysqli_fetch_array($recEnmeRes))
{
	$recEnmeArray[] = array($recEnmeRow['usrnme']);	
}
while($recJobRow = mysqli_fetch_array($recJobRes))
{
	$recJobArray[] = array($recJobRow['jobnum']);	
}
while($recPhaseRow = mysqli_fetch_array($recPhaseRes))
{
	$recPhaseArray[] = array($recPhaseRow['phsnum']);	
}
while($recCstCdeRow = mysqli_fetch_array($recCstCdeRes))
{
	$recCstCdeArray[] = array($recCstCdeRow['cstcde']);	
}
while($recPayRow = mysqli_fetch_array($recPayRes))
{
	$recPayArray[] = array($recPayRow['paygrp']);	
}
while($recRegRow = mysqli_fetch_array($recRegRes))
{
	$recRegArray[] = array($recRegRow['REGHRS']);	
}
while($recOvrRow = mysqli_fetch_array($recOvrRes))
{
	$recOvrArray[] = array($recOvrRow['OVTHRS'] );	
}
while($recDblRow = mysqli_fetch_array($recDblRes))
{
	$recDblArray[] = array($recDblRow['DBLHRS'] );	
}
while($recNoteRow = mysqli_fetch_array($recNoteRes))
{
	$recNotesArray[] = array($recNoteRow['ntetxt']);	
}
while($recNumRow = mysqli_fetch_array($recNumRes))
{
	$recNumArray[] = array($recNumRow['linnum']);	
}
while($recExpRow = mysqli_fetch_array($recExpRes))
{
	$recExpArray[] = array($recExpRow['expflg']);	
}

//FILTERED SUMMARY TABLE DATA STORAGE IN ARRAYS (WEEK ENDING)
while($recDateWERow = mysqli_fetch_array($recDateWERes))
{
	$recDateWEArray[] = array($recDateWERow['dtewrk']);	
}
while($recEnumWERow = mysqli_fetch_array($recEnumWERes))
{
	$recEnumWEArray[] = array($recEnumWERow['empnum']);	
}
while($recEnmeWERow = mysqli_fetch_array($recEnmeWERes))
{
	$recEnmeWEArray[] = array($recEnmeWERow['usrnme']);	
}
while($recJobWERow = mysqli_fetch_array($recJobWERes))
{
	$recJobWEArray[] = array($recJobWERow['jobnum']);	
}
while($recPhaseWERow = mysqli_fetch_array($recPhaseWERes))
{
	$recPhaseWEArray[] = array($recPhaseWERow['phsnum']);	
}
while($recCstCdeWERow = mysqli_fetch_array($recCstCdeWERes))
{
	$recCstCdeWEArray[] = array($recCstCdeWERow['cstcde']);	
}
while($recPayWERow = mysqli_fetch_array($recPayWERes))
{
	$recPayWEArray[] = array($recPayWERow['paygrp']);	
}
while($recRegWERow = mysqli_fetch_array($recRegWERes))
{
	$recRegWEArray[] = array($recRegWERow['REGHRS']);	
}
while($recOvrWERow = mysqli_fetch_array($recOvrWERes))
{
	$recOvrWEArray[] = array($recOvrWERow['OVTHRS']);	
}
while($recDblWERow = mysqli_fetch_array($recDblWERes))
{
	$recDblWEArray[] = array($recDblWERow['DBLHRS']);	
}
while($recNoteWERow = mysqli_fetch_array($recNoteWERes))
{
	$recNotesWEArray[] = array($recNoteWERow['ntetxt']);	
}
while($recNumWERow = mysqli_fetch_array($recNumWERes))
{
	$recNumWEArray[] = array($recNumWERow['linnum']);	
}
while($recExpWERow = mysqli_fetch_array($recExpWERes))
{
	$recExpWEArray[] = array($recExpWERow['expflg']);	
}

//FILTERED SUMMARY TABLE DATA STORAGE IN ARRAYS (NAME)
while($recDateNameRow = mysqli_fetch_array($recDateNameRes))
{
	$recDateNameArray[] = array($recDateNameRow['dtewrk']);	
}
while($recEnumNameRow = mysqli_fetch_array($recEnumNameRes))
{
	$recEnumNameArray[] = array($recEnumNameRow['empnum']);	
}
while($recEnmeNameRow = mysqli_fetch_array($recEnmeNameRes))
{
	$recEnmeNameArray[] = array($recEnmeNameRow['usrnme']);	
}
while($recJobNameRow = mysqli_fetch_array($recJobNameRes))
{
	$recJobNameArray[] = array($recJobNameRow['jobnum']);	
}
while($recPhaseNameRow = mysqli_fetch_array($recPhaseNameRes))
{
	$recPhaseNameArray[] = array($recPhaseNameRow['phsnum']);	
}
while($recCstCdeNameRow = mysqli_fetch_array($recCstCdeNameRes))
{
	$recCstCdeNameArray[] = array($recCstCdeNameRow['cstcde']);	
}
while($recPayNameRow = mysqli_fetch_array($recPayNameRes))
{
	$recPayNameArray[] = array($recPayNameRow['paygrp']);	
}
while($recRegNameRow = mysqli_fetch_array($recRegNameRes))
{
	$recRegNameArray[] = array($recRegNameRow['REGHRS']);	
}
while($recOvrNameRow = mysqli_fetch_array($recOvrNameRes))
{
	$recOvrNameArray[] = array($recOvrNameRow['OVTHRS']);	
}
while($recDblNameRow = mysqli_fetch_array($recDblNameRes))
{
	$recDblNameArray[] = array($recDblNameRow['DBLHRS']);	
}
while($recNoteNameRow = mysqli_fetch_array($recNoteNameRes))
{
	$recNotesNameArray[] = array($recNoteNameRow['ntetxt']);	
}
while($recNumNameRow = mysqli_fetch_array($recNumNameRes))
{
	$recNumNameArray[] = array($recNumNameRow['linnum']);	
}
while($recExpNameRow = mysqli_fetch_array($recExpNameRes))
{
	$recExpNameArray[] = array($recExpNameRow['expflg']);	
}

//Array from php to json
$empString = json_encode($empArray);
$jobString = json_encode($jobArray);
$phaseString = json_encode($phaseArray);
$costString = json_encode($costArray);
$classString = json_encode($classArray);

//Array from php to json for all
$recDateString = json_encode($recDateArray);
$recEnumString = json_encode($recEnumArray);
$recEnmeString = json_encode($recEnmeArray);
$recJobString =  json_encode($recJobArray);
$recPhaseString =json_encode($recPhaseArray);
$recCstCdeString = json_encode($recCstCdeArray);
$recPayString = json_encode($recPayArray);
$recRegString = json_encode($recRegArray);
$recOvrString = json_encode($recOvrArray);
$recDblSting =  json_encode($recDblArray);
$recNoteString =json_encode($recNotesArray);
$recNumString = json_encode($recNumArray);
$recExpString = json_encode($recExpArray);

//Array from php to json for date
$recDateWEString =json_encode($recDateWEArray);
$recEnumWEString =json_encode($recEnumWEArray);
$recEnmeWEString =json_encode($recEnmeWEArray);
$recJobWEString = json_encode($recJobWEArray);
$recPhaseWEString =json_encode($recPhaseWEArray);
$recCstCdeWEString =json_encode($recCstCdeWEArray);
$recPayWEString = json_encode($recPayWEArray);
$recRegWEString = json_encode($recRegWEArray);
$recOvrWEString =json_encode($recOvrWEArray);
$recDblWESting =json_encode($recDblWEArray);
$recNoteWEString =json_encode($recNotesWEArray);
$recNumWEString = json_encode($recNumWEArray);
$recExpWEString = json_encode($recExpWEArray);

//Array from php to json for name
$recDateNameString =json_encode($recDateNameArray);
$recEnumNameString =json_encode($recEnumNameArray);
$recEnmeNameString =json_encode($recEnmeNameArray);
$recJobNameString = json_encode($recJobNameArray);
$recPhaseNameString =json_encode($recPhaseNameArray);
$recCstCdeNameString =json_encode($recCstCdeNameArray);
$recPayNameString =json_encode($recPayNameArray);
$recRegNameString =json_encode($recRegNameArray);
$recOvrNameString =json_encode($recOvrNameArray);
$recDblNameSting =json_encode($recDblNameArray);
$recNoteNameString =json_encode($recNotesNameArray);
$recNumNameString = json_encode($recNumNameArray);
$recExpNameString = json_encode($recExpNameArray);

$date = new DateTime();
$date -> modify('next sunday');
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	
	
	<ul style="
	position: fixed;
	top: 0px;
	width: 100%;
	float: right;
	margin-top:0px ;
    margin-bottom: 2.5%;
	padding: 0;
	list-style: none;
	background-color: #0167b1;
	border-bottom: 1px solid #ccc; 
	border-top: 1px solid #ccc;">
  		<li style="float: right;"><a style="
  		display: block;
		padding: 12px 15px;
		text-decoration: none;
		font-weight: bold;
		color: WHITE;
 		background-color: #0167b1;
		border-right: 1px solid #ccc;" href="timeEntry.php">Time Entry</a></li>

 		<!--<li style="float: right;"><a style="
  		display: block;
		padding: 12px 15px;
		text-decoration: none;
		font-weight: bold;
		color: WHITE;
 		background-color: #0167b1;
		border-right: 1px solid #ccc;" href="createUser.php">Create User</a></li>-->
  		
  		<li style="float: right;"><a style="
  		display: block;
		padding: 12px 15px;
		text-decoration: none;
		font-weight: bold;
		color: WHITE;
 		background-color: #0167b1;
		border-right: 1px solid #ccc;" href="editEntries.php">Edit Entries</a></li>
  		
  		<li style="float: right;"><a style="
  		display: block;
		padding: 12px 15px;
		text-decoration: none;
		font-weight: bold;
		color: WHITE;
 		background-color: #0167b1;
		border-right: 1px solid #ccc;" href="userMenu.php">User Menu</a></li>
	</ul>
		

	<title>Time Entry</title>
	<h1 style = "margin-top: 5%; margin-bottom: 3%;">Time Entry</h1>
</head>

<body onload="tableOnLoad();">
	
	<form id="hidden_action_form" method="post">
		<div style="text-align: left;padding-left: 10px; display: inline-block;">
			<label style="display: block;" for="Date"> Date: </label>
			<input style="margin-top:10px;" type="date" value="<?php echo date('Y-m-d'); ?>" id="Date" name="inDate">
		</div>


		<div style="text-align: left;padding-left: 10px; display: inline-block;">
			<label style="display: block;" for = "empName"> Employee Name: </label>
			<input style="margin-top: 10px; display: inline-block;" list="eDropDown" name="employName"/>
				<datalist id="eDropDown"></datalist>
		</div>
		
		<div style="text-align: left;padding-left: 10px; display: inline-block;">
			<label style="display: block;" for="class"> Class: </label>
			<input style="margin-top: 10px;" list="cLDropDown" type="text" name="clas" />
				<datalist id = "cLDropDown"></datalist>
		</div>

		<div style="text-align: left;padding-left: 10px; display: inline-block;">
			<label style="display: block;" for="job">Job Number: </label>
			<input style="margin-top:10px;" list="jDropDown" type="text" id="job" name="job"/>
				<datalist id="jDropDown"></datalist>
		</div>

		<div style="text-align: left;padding-left: 10px; display: inline-block;">
			<label style="display: block;" for="phase">Phase: </label>
			<input style="margin-top:10px;" list="pDropDown" type="text" id="phase" name="phase" />
				<datalist id="pDropDown"></datalist>
		</div>

		<div style="text-align: left;padding-left: 10px; display: inline-block;">
			<label style="display: block;" for="costCode"> Cost Code: </label>
			<input style="margin-top:10px;" list="cDropDown" type="text" id="costCode" name="costCode">
				<datalist id="cDropDown"></datalist>
		</div>

		<div style="text-align: left; padding-left: 10px; display: inline-block;">
			<label style="display: block;" for = "regTime"> Regular Time: </label>
			<input style="margin-top:10px;margin-left: 10px; width: 70px;" type="number" id="RT" name="regTime">
		</div>
		
		<div style="text-align: left;padding-left: 10px; display: inline-block;">
			<label style="display: block;" for = "overTime"> Over Time: </label>
			<input style="margin-top:10px; width: 70px;" type="number" id="OT" name="overTime">
		</div>	

		<div style="text-align: left;padding-left: 10px; display: inline-block;">
			<label style="display: block;" for = "doubleTime"> Double Time: </label>
			<input style="margin-top:10px; margin-left: 5px; width: 70px;" type="number" id="DT" name="doubleTime">
		</div>	

		<div style="text-align: left;padding-left: 10px; display: inline-block;">
			<label style="display: block;" for = "notes"> Notes: </label>
			<input style="margin-top:10px;height: auto;" type="text" id="notes" name="notes">
		</div>	
			
		<input style="margin-top: 3%; margin-left auto; margin-right: auto; display: block;" type="submit"/>

	</form>
	
	<p>Message: <?=($_SESSION["message"]); ?></p>

	<h2 style="margin-bottom: 5px; margin-top: 3%; text-align: left;margin-left: 16%;">Summary
		
	<form name="filterInput" action="" method="get">
  		<select onchange="sumSelect();" style="float: right; margin-right:15%" id="sumFilter">
				<option value="All">All</option>
				<option value="Name">Name</option>
				<option value="Week Ending">Week Ending</option>
				
		</select>
	<label style="font-size: 14px; float:right; margin-right: 5px;" for = "sumFilter">Filter By: </label>
  		
  		<input style="float:right; margin-right: 5px;" type="Date" name="DteFil" id="DteFil" value="<?php echo date('Y-m-d'); ?>">
  		<label style="font-size: 14px; float:right; margin-right: 5px;" for = "DteFilter">Date: </label>
  		
  		<input style="float:right; margin-right: 5px;" list="eDropDown" name="NmeFil" id="NmeFil"/>
  			<datalist id="eDropDown"></datalist>
  		<label style="font-size: 14px; float:right; margin-right: 5px;" for = "NmeFilter">Name: </label>
	</form>		
	</h2>
	
	<div id="rectangle" class="shadow" style="
	border: 1px solid lightgrey;
    height: 500px;
    width: 80%;
    margin-left: auto;
    margin-right: auto;
    margin-top:10px;
    border-radius: 0%;
    -webkit-box-shadow: 0 0 8px 5px #D3D3D3;
    overflow:scroll;">
	<style>
        table 
        {
		    border-collapse: collapse;
		    width: 100%;
		    font-size: 12px;
		}
		td, th 
		{
		    border: 1px solid #A9A9A9;
		    text-align: left;
		    padding: 4px;
		}
		tr:nth-child(even)
		{
		    background-color: #dddddd;
		}
    </style>

	<table id="sum_table">
  		<thead>
  			<tr>
  				<th>Record #</th>
				<th>Date</th>
				<th>Emp #</th>
				<th>Employee</th> 
				<th>Job</th>
				<th>Phase</th> 
				<th>Cost Code</th>
				<th>Pay Type</th>
				<th>R</th>
				<th>O</th>
				<th>D</th>
				<th>Notes</th>
				<th>Edit</th>
  			</tr>
  		</thead>
  	</table>
  	</div><br>

  	<style>
	.modalDialog {
		position: fixed;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
		background: rgba(0,0,0,0.2);
		z-index: 99999;
		opacity:0;
		-webkit-transition: opacity 80ms ease-in;
		-moz-transition: opacity 80ms ease-in;
		transition: opacity 80ms ease-in;
		pointer-events: none;
	}

	.modalDialog:target {
		opacity:1;
		pointer-events: auto;
	}

	.modalDialog > div {
		width: 65%;
		height: 40%;
		position: relative;
		margin: 10% auto;
		padding: 5px 20px 13px 20px;
		border-radius: 10px;
		background: #fff;
	}

	.close {
		background: #0167b1;
		color: #FFFFFF;
		line-height: 25px;
		position: absolute;
		right: 4px;
		text-align: center;
		top: 3px;
		width: 24px;
		text-decoration: none;
		font-weight: bold;
		-webkit-border-radius: 12px;
		-moz-border-radius: 12px;
		border-radius: 12px;
	}

	.close:hover { background: #00b8eb; }
	</style>
  <div id="openModal" class="modalDialog">
	<div>
		<a href="#close" title="Close" class="close">X</a>
		<h2>Editing Record</h2>
		<p>Please make adjustments to the following record.</p>
		<form id="hidden_action_form2" method="post">
		<div style="text-align: left; padding-left: 10px; display: inline-block;">
			<label style="display: block; for = "recnum"> Line Num: </label>
			<input style="margin-top:10px; height: auto; width: 65px;" type="text" id="recnum2" name="recnum">
		</div>	
		<div style="text-align: left;padding-left: 10px; display: inline-block;">
			<label style="display: block; for="Date"> Date: </label>
			<input style="margin-top:10px;" type="date" value="<?php echo date('Y-m-d'); ?>" id="Date2" name="inDate">
		</div>
		<div style="text-align: left;padding-left: 10px; display: inline-block;">
			<label style="display: block; for = "empName"> Employee Name: </label>
			<input style="margin-top: 10px;" list="eDropDown" name="employName" id="name2" />
				<datalist id="eDropDown"></datalist>
		</div>
		
		<div style="text-align: left;padding-left: 10px; display: inline-block;">
			<label style="display: block; for="class"> Class: </label>
			<input style="margin-top: 10px;" list="cLDropDown" type="text" name="clas2" id="clas2" />
				<datalist id = "cLDropDown"></datalist>
		</div>

		<div style="text-align: left;padding-left: 10px; display: inline-block;">
			<label style="display: block; for="job">Job Number: </label>
			<input style="margin-top:10px;" list="jDropDown" type="text" id="job2" name="job"/>
				<datalist id="jDropDown"></datalist>
		</div>

		<div style="text-align: left;padding-left: 10px; display: inline-block;">
			<label style="display: block; for="phase">Phase: </label>
			<input style="margin-top:10px;" list="pDropDown" type="text" id="phase2" name="phase" />
				<datalist id="pDropDown"></datalist>
		</div>

		<div style="text-align: left;padding-left: 10px; display: inline-block;">
			<label style="display: block; for="costCode"> Cost Code: </label>
			<input style="margin-top:10px;" list="cDropDown" type="text" id="costCode2" name="costCode">
				<datalist id="cDropDown"></datalist>
		</div>

		<div style="text-align: left; padding-left: 10px; display: inline-block;">
			<label style="display: block; for = "regTime"> Regular Time: </label>
			<input style="margin-top:10px;margin-left: 10px; width: 70px;" type="number" id="RT2" name="regTime">
		</div>
		
		<div style="text-align: left;padding-left: 10px; display: inline-block;">
			<label style="display: block; for = "overTime"> Over Time: </label>
			<input style="margin-top:10px; width: 70px;" type="number" id="OT2" name="overTime">
		</div>	

		<div style="text-align: left;padding-left: 10px; display: inline-block;">
			<label style="display: block; for = "doubleTime"> Double Time: </label>
			<input style="margin-top:10px; margin-left: 5px; width: 70px;" type="number" id="DT2" name="doubleTime">
		</div>	

		<div style="text-align: left; padding-left: 10px; display: inline-block;">
			<label style="display: block; for = "notes"> Notes: </label>
			<input style="margin-top:10px; height: auto;" type="text" id="notes2" name="notes">
		</div>	
		<div style="margin-left: 35%; margin-right: 50%; margin-top: 3%;">
			<input type="submit" name="Overwrite" value="Overwrite"/>
		</div>
	</form>
	</div>
</div>

	<a href = "/userMenu.php"><button style="width:185px; height:35px;" type="spaceButton">User Menu</button></a>

<script> 
	//values for drop down list assigned to JS values
	empVarList = <?= $empString ?>;
	jobVarList = <?= $jobString ?>;
	phaseVarList = <?= $phaseString ?>;
	costVarList = <?= $costString ?>;
	classVarList = <?= $classString ?>;

	//employee vars
	var empDrop  = document.getElementById('eDropDown'); 
	var empFrag = document.createDocumentFragment();
	//job vars
	var jobDrop = document.getElementById('jDropDown');
	var jobFrag = document.createDocumentFragment();
	//phase vars
	var phaseDrop = document.getElementById('pDropDown');
	var phaseFrag = document.createDocumentFragment();
	//cost vars
	var costDrop = document.getElementById('cDropDown');
	var costFrag = document.createDocumentFragment();
	//class vars
	var classDrop = document.getElementById('cLDropDown');
	var classFrag = document.createDocumentFragment();
	//Summary Table Vars

	//create empty arrays to be filled
	let emps = [];
	let jobs = [];
	let phas = [];
	let cost = [];
	let clas = [];
	
	//assign empty arrays values
	emps = empVarList;
	jobs = jobVarList;
	phas = phaseVarList;
	cost = costVarList;
	clas = classVarList;
	
	//create an option tag for each value of the emps array
	emps.forEach(function(emps) {
        var option = document.createElement("option");
        option.textContent = emps.toString();
        empFrag.appendChild(option);
	});

	jobs.forEach(function(jobs){
		var option = document.createElement("option");
		option.textContent = jobs.toString();
		jobFrag.appendChild(option)
	});

	phas.forEach(function(phas){
		var option = document.createElement("option");
		option.textContent = phas.toString();
		phaseFrag.appendChild(option);
	});

	cost.forEach(function(cost){
		var option = document.createElement("option");
		option.textContent = cost.toString();
		costFrag.appendChild(option);
	});

	clas.forEach(function(clas){
		var option = document.createElement("option");
		option.textContent = clas.toString();
		classFrag.appendChild(option);
	});

	//adds the results to the actual document
		empDrop.appendChild(empFrag);
		jobDrop.appendChild(jobFrag);
		phaseDrop.appendChild(phaseFrag);
		costDrop.appendChild(costFrag);
		classDrop.appendChild(classFrag);

		document.getElementById('hidden_action_form').action = 'timeEntrySubmit.php';
		document.getElementById('hidden_action_form2').action = 'timeEntryEdit.php';

	//SUMMARY TABLE W/ Filter Arrays
	recTotal = <?= $recResNum ?>;
	recDateVars = <?= $recDateString ?>;
	recEnumVars = <?= $recEnumString ?>;
	recEnmeVars = <?= $recEnmeString ?>;
	recJobVars = <?= $recJobString ?>;
	recPhaseVars = <?= $recPhaseString ?>;
	recCstCdeVars = <?= $recCstCdeString ?>;
	recPayVars = <?= $recPayString ?>;
	recRegVars = <?= $recRegString ?>;
	recOvrVars = <?= $recOvrString ?>;
	recDblVars = <?= $recDblSting ?>;
	recNoteVars = <?= $recNoteString ?>;
	recNumVars = <?= $recNumString ?>;
	recExpVars = <?= $recExpString ?>;

	recDateWEVars =  <?= $recDateWEString ?>;
	recEnumWEVars =  <?= $recEnumWEString ?>;
	recEnmeWEVars =  <?= $recEnmeWEString ?>;
	recJobWEVars =   <?= $recJobWEString ?>;
	recPhaseWEVars = <?= $recPhaseWEString ?>;
	recCstCdeWEVars =<?= $recCstCdeWEString ?>;
	recPayWEVars =   <?= $recPayWEString ?>;
	recRegWEVars =   <?= $recRegWEString ?>;
	recOvrWEVars =   <?= $recOvrWEString ?>;
	recDblWEVars =   <?= $recDblWESting ?>;
	recNoteWEVars =  <?= $recNoteWEString ?>;
	recNumWEVars = <?= $recNumWEString ?>;
	recExpWEVars = <?= $recExpWEString ?>;

	recDateNameVars =  <?= $recDateNameString ?>;
	recEnumNameVars =  <?= $recEnumNameString ?>;
	recEnmeNameVars =  <?= $recEnmeNameString ?>;
	recJobNameVars =   <?= $recJobNameString ?>;
	recPhaseNameVars = <?= $recPhaseNameString ?>;
	recCstCdeNameVars =<?= $recCstCdeNameString ?>;
	recPayNameVars =   <?= $recPayNameString ?>;
	recRegNameVars =   <?= $recRegNameString ?>;
	recOvrNameVars =   <?= $recOvrNameString ?>;
	recDblNameVars =   <?= $recDblNameSting ?>;
	recNoteNameVars =  <?= $recNoteNameString ?>;
	recNumNameVars = <?= $recNumNameString ?>;
	recExpNameVars = <?= $recExpNameString ?>;

	var sumTable = document.getElementById('sum_table');
	var tblfrag = document.createDocumentFragment();
	
	var tblData = document.createElement("td");

	let recDateAll = [];
	let recEnumAll = [];
	let recEnmeAll = [];
	let recJobAll = [];
	let recPhaseAll = [];
	let recCstAll = [];
	let recPayAll = [];
	let recRegAll = [];
	let recOvrAll = [];
	let recDblAll = [];
	let recNoteAll =[];
	let recNumAll = [];
	let recExpAll = [];

	recDateAll = recDateVars; 
	recEnumAll = recEnumVars;
	recEnmeAll = recEnmeVars;
	recJobAll = recJobVars;
	recPhaseAll = recPhaseVars;
	recCstAll = recCstCdeVars;
	recPayAll = recPayVars;
	recRegAll = recRegVars;
	recOvrAll = recOvrVars;
	recDblAll = recDblVars;
	recNoteAll = recNoteVars;
	recNumAll = recNumVars;
	recExpAll = recExpVars;

	let recDateWE = [];
	let recEnumWE = [];
	let recEnmeWE = [];
	let recJobWE = [];
	let recPhaseWE = [];
	let recCstWE = [];
	let recPayWE = [];
	let recRegWE = [];
	let recOvrWE = [];
	let recDblWE = [];
	let recNoteWE =[];
	let recNumWE = [];
	let recExpWE = [];

	recDateWE = recDateWEVars; 
	recEnumWE = recEnumWEVars;
	recEnmeWE = recEnmeWEVars;
	recJobWE = recJobWEVars;
	recPhaseWE = recPhaseWEVars;
	recCstWE = recCstCdeWEVars;
	recPayWE = recPayWEVars;
	recRegWE = recRegWEVars;
	recOvrWE = recOvrWEVars;
	recDblWE = recDblWEVars;
	recNoteWE = recNoteWEVars;
	recNumWE = recNumWEVars;
	recExpWE = recExpWEVars;

	let recDateName = [];
	let recEnumName = [];
	let recEnmeName = [];
	let recJobName = [];
	let recPhaseName = [];
	let recCstName = [];
	let recPayName = [];
	let recRegName = [];
	let recOvrName = [];
	let recDblName = [];
	let recNoteName =[];
	let recNumName = [];
	let recExpName = [];

	recDateName = recDateNameVars; 
	recEnumName = recEnumNameVars;
	recEnmeName = recEnmeNameVars;
	recJobName = recJobNameVars;
	recPhaseName = recPhaseNameVars;
	recCstName = recCstCdeNameVars;
	recPayName = recPayNameVars;
	recRegName = recRegNameVars;
	recOvrName = recOvrNameVars;
	recDblName = recDblNameVars;
	recNoteName = recNoteNameVars;
	recNumName = recNumNameVars;
	recExpName = recExpNameVars;

	var text = 'Edit';
	var edit = text.link('#openModal');

function tableOnLoad()
{
	for (var i = 0; i < recTotal; i++) 
	{
		if (recExpAll[i] == 1) 
			i++;
		else
		{
			var rwAtt = document.createAttribute("onclick");
			rwAtt.value = "editIndex(this)"
			var tblRow = document.createElement("tr");
			tblRow.setAttributeNode(rwAtt);
				tblRow.innerHTML =
				'<td>' + recNumAll[i] +'</td>' +
				'<td>' + recDateAll[i] +'</td>' +
				'<td>' + recEnumAll[i] +'</td>' +
				'<td>' + recEnmeAll[i] +'</td>' +
				'<td>' + recJobAll[i] +'</td>' +
				'<td>' + recPhaseAll[i] +'</td>' +
				'<td>' + recCstAll[i] +'</td>' +
				'<td>' + recPayAll[i] +'</td>' +
				'<td>' + recRegAll[i] +'</td>' +
				'<td>' + recOvrAll[i] +'</td>' +
				'<td>' + recDblAll[i] +'</td>' +
				'<td>' + recNoteAll[i] +'</td>' +
				'<td>' + edit +'</td>';
			sumTable.appendChild(tblRow);
		}
	}
}


function sumSelect()
{
	var sum_table = document.getElementById("sum_table");
	sum_table.innerHTML = "";
	sum_table.innerHTML = 
	'<thead>' + 
		'<tr>' +
			'<th>'+ "Record #" +'</th>' +
			'<th>'+ "Date" +'</th>' +
			'<th>'+ "Emp #" + '</th>' +
			'<th>'+ "Employee" + '</th>' + 
			'<th>'+ "Job" + '</th>' +
			'<th>'+ "Phase" + '</th>' + 
			'<th>'+ "Cost Code" + '</th>' +
			'<th>'+ "Pay Type" + '</th>' +
			'<th>'+ "R" + '</th>' +
			'<th>'+ "O" + '</th>' +
			'<th>'+ "D" + '</th>' +
			'<th>'+ "Notes" + '</th>' +
			'<th>'+ "Edit" + '</th>' +
  		'</tr>' +
  	'</thead>';

	if(document.getElementById('sumFilter').value == "All") 
	{
		for (var i = 0; i < recTotal; i++) 
		{
			if (recExpAll[i] == 1) 
				i++;
			else
			{
				var rwAtt = document.createAttribute("onclick");
				rwAtt.value = "editIndex(this)"
				var tblRow = document.createElement("tr");
				tblRow.setAttributeNode(rwAtt);
					tblRow.innerHTML =
					'<td>' + recNumAll[i] +'</td>' +
					'<td>' + recDateAll[i] +'</td>' +
					'<td>' + recEnumAll[i] +'</td>' +
					'<td>' + recEnmeAll[i] +'</td>' +
					'<td>' + recJobAll[i] +'</td>' +
					'<td>' + recPhaseAll[i] +'</td>' +
					'<td>' + recCstAll[i] +'</td>' +
					'<td>' + recPayAll[i] +'</td>' +
					'<td>' + recRegAll[i] +'</td>' +
					'<td>' + recOvrAll[i] +'</td>' +
					'<td>' + recDblAll[i] +'</td>' +
					'<td>' + recNoteAll[i] +'</td>' +
					'<td>' + edit +'</td>';
				sumTable.appendChild(tblRow);
			}
		}
	}
	else if (document.getElementById('sumFilter').value == "Week Ending") 
	{
		for (var i = 0; i < recTotal; i++) 
		{
			if (recExpWE[i] == 1) 
				i++;
			else
			{
				var rwAtt = document.createAttribute("onclick");
				rwAtt.value = "editIndex(this)"
				var tblRow = document.createElement("tr");
				tblRow.setAttributeNode(rwAtt);
					tblRow.innerHTML =
					'<td>' + recNumWE[i] +'</td>' +
					'<td>' + recDateWE[i] +'</td>' +
					'<td>' + recEnumWE[i] +'</td>' +
					'<td>' + recEnmeWE[i] +'</td>' +
					'<td>' + recJobWE[i] +'</td>' +
					'<td>' + recPhaseWE[i] +'</td>' +
					'<td>' + recCstWE[i] +'</td>' +
					'<td>' + recPayWE[i] +'</td>' +
					'<td>' + recRegWE[i] +'</td>' +
					'<td>' + recOvrWE[i] +'</td>' +
					'<td>' + recDblWE[i] +'</td>' +
					'<td>' + recNoteWE[i] +'</td>' +
					'<td>' + edit +'</td>';
				sumTable.appendChild(tblRow);
			}
		}
	}
	else if (document.getElementById('sumFilter').value == "Name") 
	{
		for (var i = 0; i < recTotal; i++) 
		{
			if (recExpName[i] == 1) 
				i++;
			else
			{
				var rwAtt = document.createAttribute("onclick");
				rwAtt.value = "editIndex(this)"
				var tblRow = document.createElement("tr");
				tblRow.setAttributeNode(rwAtt);
					tblRow.innerHTML =
					'<td>' + recNumName[i] +'</td>' +
					'<td>' + recDateName[i] +'</td>' +
					'<td>' + recEnumName[i] +'</td>' +
					'<td>' + recEnmeName[i] +'</td>' +
					'<td>' + recJobName[i] +'</td>' +
					'<td>' + recPhaseName[i] +'</td>' +
					'<td>' + recCstName[i] +'</td>' +
					'<td>' + recPayName[i] +'</td>' +
					'<td>' + recRegName[i] +'</td>' +
					'<td>' + recOvrName[i] +'</td>' +
					'<td>' + recDblName[i] +'</td>' +
					'<td>' + recNoteName[i] +'</td>' +
					'<td>' + edit +'</td>';
				sumTable.appendChild(tblRow);
			}
		}
	}
}
function editIndex(trValue) 
{
	var recnum = recNumAll[trValue.rowIndex - 1];
	var date = recDateAll[trValue.rowIndex - 1];
	var name = recEnmeAll[trValue.rowIndex - 1];
	var clas = recPayAll[trValue.rowIndex - 1];
	var job = recJobAll[trValue.rowIndex - 1];
	var phase = recPhaseAll[trValue.rowIndex - 1];
	var costCode = recCstAll[trValue.rowIndex - 1];
	var regTime = recRegAll[trValue.rowIndex - 1];
	var overTime = recOvrAll[trValue.rowIndex - 1];
	var doubleTime = recDblAll[trValue.rowIndex - 1];
	var notes = recNoteAll[trValue.rowIndex - 1];

	var formRecnum = document.getElementById('recnum2');
	var formDate = document.getElementById('Date2');
	var formName = document.getElementById('name2');
	var formClass = document.getElementById('clas2');
	var formJob = document.getElementById('job2');
	var formPhase = document.getElementById('phase2');
	var formCost = document.getElementById('costCode2');
	var formReg = document.getElementById('RT2');
	var formOver = document.getElementById('OT2');
	var formDbl = document.getElementById('DT2');
	var formNotes = document.getElementById('notes2');

	formRecnum.value = recnum;
	formDate.value = date;
	formName.value = name;
	formClass.value = clas;
	formJob.value = job;
	formPhase.value = phase;
	formCost.value = costCode;
	formReg.value = regTime;
	formOver.value = overTime;
	formDbl.value = doubleTime;
	formNotes.value = notes;
}

</script>
</body>
</html>
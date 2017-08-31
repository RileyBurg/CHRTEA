<?php
session_start();
require 'database.php';

//Querys for drop downs
$employSql = "SELECT fulfst FROM employ";
$jobSql	 = "SELECT DISTINCT jobnum FROM jobphs";
$phaseSql = "SELECT phsnum, phsnme FROM jobphs";
$costCodeSql = "SELECT cstcde, cdenme FROM cstcde";
$classSql = "SELECT grpnme FROM paygrp";

//The result of the query for each connection
$empResult=mysqli_query($connection, $employSql);
$jobResult=mysqli_query($connection, $jobSql);
$phaseResult=mysqli_query($connection, $phaseSql);
$costCodeResult=mysqli_query($connection, $costCodeSql);
$classResult=mysqli_query($connection, $classSql);

//The amount of rows in the Query
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

//Array from php to json
$empString = json_encode($empArray);
$jobString = json_encode($jobArray);
$phaseString = json_encode($phaseArray);
$costString = json_encode($costArray);
$classString = json_encode($classArray);

$date = new DateTime();
$date -> modify('next sunday');

$lastRecord = "SELECT usrnme FROM dlytme ORDER BY linnum DESC LIMIT 1";
$resLastRecord = mysqli_query($connection, $lastRecord);
$lastRecArray = array();

while($lastRow = mysqli_fetch_array($resLastRecord))
{
    $lastRecArray[]= array($lastRow['usrnme']);
}

$lastRecString = json_encode($lastRecArray);

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
		
		<div style="text-align: center; padding-left: 10px; display: block; margin-left: auto;">
			<label style="display: inline-block;" for = "empName"> Employee Name: </label>
			<input style="margin-top: 10px; display: inline-block; margin-right: 85px;" list="eDropDown" name="employName"/>
				<datalist id="eDropDown"></datalist>

			<label style="display: inline-block;" for="class"> Class: </label>
			<input style="margin-top: 10px; margin-right: 90px;" list="cLDropDown" type="text" name="clas" />
				<datalist id = "cLDropDown"></datalist>	

			<label style="display: inline-block;" for="Date"> Date: </label>
			<input style="margin-top:10px;" type="date" value="<?php echo date('Y-m-d'); ?>" id="Date" name="inDate">
		</div>

		<div id="rectangle" class="shadow" style="
		border: 1px solid lightgrey;
    	height: 350px;
    	width: 900px;
    	margin-left: auto;
    	margin-right: auto;
    	margin-top:10px;
    	border-radius: 1%;
    	-webkit-box-shadow: 0 0 8px 5px #D3D3D3;">

			<div style="text-align: left; padding: 20px; display: block;">
				<label style="display: inline-block; padding-right: 5px;" for="job">Job: </label>
				<input style="margin-top: 5px;" list="jDropDown" type="text" id="job" name="job"/>
					<datalist id="jDropDown"></datalist>
			</div>
	
			<div style="text-align: left; padding-left: 10px; display: inline-block;">
				<label style="display: block;" for="costCode"> Cost Code: </label>
				<input style="margin-top:15px; display: inline-block;" list="cDropDown" type="text" id="costCode" name="costCode">
					<datalist id="cDropDown"></datalist>
			</div>
	
			<div style="text-align: left; padding-left: 10px; display: inline-block;">
				<label style="display: block;" for="phase">Phase: </label>
				<input style="margin-top:15px; display: inline-block;" list="pDropDown" type="text" id="phase" name="phase" />
					<datalist id="pDropDown"></datalist>
			</div>

			<div style="text-align: left; padding-left: 10px; display: inline-block;">
				<label style="display: block;" for = "regTime"> Regular Time: </label>
				<input style="margin-top:15px;margin-left: 10px; width: 70px;display: inline-block;" type="number" id="RT" name="regTime" value="0">
			</div>

			<div style="text-align: left; padding-left: 10px; display: inline-block;">
				<label style="display: block;" for = "overTime"> Over Time: </label>
				<input style="margin-top:15px; width: 70px;display: inline-block;" type="number" id="OT" name="overTime" value="0">
			</div>

			<div style="text-align: left; padding-left: 10px; display: inline-block;">
				<label style="display: block;" for = "doubleTime"> Double Time: </label>
				<input style="margin-top:15px; margin-left: 5px; width: 70px;display: inline-block;" type="number" id="DT" name="doubleTime" value="0">
			</div>

			<div style="text-align: left; padding-left: 10px; display: inline-block;">
				<label style="display: block;" for = "notes"> Notes: </label>
				<input style="margin-top:15px;height: auto;display: inline-block;" type="text" id="notes" name="notes">
			</div>
	
		<div style="margin-top: 15px;">
			<div style="text-align: left; padding-left: 10px; display: inline-block;">
				<input style="margin-top:10px; display: inline-block;" list="cDropDown" type="text" id="costCode" name="costCode2">
				<datalist id="cDropDown"></datalist>
			</div>
	
			<div style="text-align: left; padding-left: 10px; display: inline-block;">
				<input style="margin-top:10px; display: inline-block;" list="pDropDown" type="text" id="phase" name="phase2" />
				<datalist id="pDropDown"></datalist>
			</div>

			<div style="text-align: left; padding-left: 10px; display: inline-block;margin-right: 20px;">
				<input style="margin-top:10px;margin-left: 10px; width: 70px;display: inline-block;" type="number" id="RT" name="regTime2" value="0">
			</div>

			<div style="text-align: left; padding-left: 10px; display: inline-block; margin-right: 5px;">
				<input style="margin-top:10px; width: 70px;display: inline-block;" type="number" id="OT" name="overTime2" value="0">
			</div>

			<div style="text-align: left; padding-left: 10px; display: inline-block; margin-right: 19px;">
				<input style="margin-top:10px; margin-left: 5px; width: 70px;display: inline-block;" type="number" id="DT" name="doubleTime2" value="0">
			</div>

			<div style="text-align: left; padding-left: 10px; display: inline-block;">
				<input style="margin-top:10px;height: auto;display: inline-block;" type="text" id="notes" name="notes2">
			</div>
		</div>

		<div style="margin-top: 15px;">
			<div style="text-align: left; padding-left: 10px; display: inline-block;">
				<input style="margin-top:10px; display: inline-block;" list="cDropDown" type="text" id="costCode" name="costCode3">
				<datalist id="cDropDown"></datalist>
			</div>
	
			<div style="text-align: left; padding-left: 10px; display: inline-block;">
				<input style="margin-top:10px; display: inline-block;" list="pDropDown" type="text" id="phase" name="phase3" />
				<datalist id="pDropDown"></datalist>
			</div>

			<div style="text-align: left; padding-left: 10px; display: inline-block;margin-right: 20px;">
				<input style="margin-top:10px;margin-left: 10px; width: 70px;display: inline-block;" type="number" id="RT" name="regTime3" value="0">
			</div>

			<div style="text-align: left; padding-left: 10px; display: inline-block; margin-right: 5px;">
				<input style="margin-top:10px; width: 70px;display: inline-block;" type="number" id="OT" name="overTime3" value="0">
			</div>

			<div style="text-align: left; padding-left: 10px; display: inline-block; margin-right: 19px;">
				<input style="margin-top:10px; margin-left: 5px; width: 70px;display: inline-block;" type="number" id="DT" name="doubleTime3" value="0">
			</div>

			<div style="text-align: left; padding-left: 10px; display: inline-block;">
				<input style="margin-top:10px;height: auto;display: inline-block;" type="text" id="notes" name="notes3">
			</div>
		</div>
	
		<div style="margin-top: 15px;">
			<div style="text-align: left; padding-left: 10px; display: inline-block;">
				<input style="margin-top:10px; display: inline-block;" list="cDropDown" type="text" id="costCode" name="costCode4">
				<datalist id="cDropDown"></datalist>
			</div>
	
			<div style="text-align: left; padding-left: 10px; display: inline-block;">
				<input style="margin-top:10px; display: inline-block;" list="pDropDown" type="text" id="phase" name="phase4" />
				<datalist id="pDropDown"></datalist>
			</div>

			<div style="text-align: left; padding-left: 10px; display: inline-block;margin-right: 20px;">
				<input style="margin-top:10px;margin-left: 10px; width: 70px;display: inline-block;" type="number" id="RT" name="regTime4" value="0">
			</div>

			<div style="text-align: left; padding-left: 10px; display: inline-block; margin-right: 5px;">
				<input style="margin-top:10px; width: 70px;display: inline-block;" type="number" id="OT" name="overTime4" value="0">
			</div>

			<div style="text-align: left; padding-left: 10px; display: inline-block; margin-right: 19px;">
				<input style="margin-top:10px; margin-left: 5px; width: 70px;display: inline-block;" type="number" id="DT" name="doubleTime4" value="0">
			</div>

			<div style="text-align: left; padding-left: 10px; display: inline-block;">
				<input style="margin-top:10px;height: auto;display: inline-block;" type="text" id="notes" name="notes4">
			</div>
		</div>
			
		<div style="margin-top: 15px;">
			<div style="text-align: left; padding-left: 10px; display: inline-block;">
				<input style="margin-top:10px; display: inline-block;" list="cDropDown" type="text" id="costCode" name="costCode5">
				<datalist id="cDropDown"></datalist>
			</div>
	
			<div style="text-align: left; padding-left: 10px; display: inline-block;">
				<input style="margin-top:10px; display: inline-block;" list="pDropDown" type="text" id="phase" name="phase5" />
				<datalist id="pDropDown"></datalist>
			</div>

			<div style="text-align: left; padding-left: 10px; display: inline-block;margin-right: 20px;">
				<input style="margin-top:10px;margin-left: 10px; width: 70px;display: inline-block;" type="number" id="RT" name="regTime5" value="0">
			</div>

			<div style="text-align: left; padding-left: 10px; display: inline-block; margin-right: 5px;">
				<input style="margin-top:10px; width: 70px;display: inline-block;" type="number" id="OT" name="overTime5" value="0">
			</div>

			<div style="text-align: left; padding-left: 10px; display: inline-block; margin-right: 19px;">
				<input style="margin-top:10px; margin-left: 5px; width: 70px;display: inline-block;" type="number" id="DT" name="doubleTime5" value="0">
			</div>

			<div style="text-align: left; padding-left: 10px; display: inline-block;">
				<input style="margin-top:10px;height: auto;display: inline-block;" type="text" id="notes" name="notes5">
			</div>
		</div>

		</div>
			
		<input style="margin-top: 3%; margin-left auto; margin-right: auto; display: block;" type="submit"/>

	</form>
	
	<p>Message: <?=($_SESSION["message"]); ?></p>

	<h2 id="sumHead" style="margin-bottom: 5px; margin-top: 3%; text-align: left;margin-left: 16%;"></h2>
	
	<div id="rectangle" class="shadow" style="
	border: 1px solid lightgrey;
    height: 500px;
    width: 70%;
    margin-left: auto;
    margin-right: auto;
    margin-top:10px;
    border-radius: 2%;
    -webkit-box-shadow: 0 0 8px 5px #D3D3D3;">
    	<div style="display: block;">
    	<label style="display: inline-block; float: left; font-size: 18px; padding-left: 30px; padding-top: 20px;">Job: 4100</label>
    	<label style="display: inline-block; float: right; font-size: 18px; padding-right: 30px; padding-top: 20px;">Week Ending: 9/3/17</label>
  		</div>
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

	lastRec = <?= $lastRecString ?>;
	sumHead = document.getElementById("sumHead");
	sumHead.innerHTML = "Summary of " + lastRec;
</script>
</body>
</html>
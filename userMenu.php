<?php
session_start();
require 'database.php';
$usrnme = $_SESSION["username"];

$employSql = "SELECT fulnme FROM logins WHERE usrnme = '$usrnme'";
$empResult=mysqli_query($connection, $employSql);
$empArray = array();
while($empRow = mysqli_fetch_array($empResult))
{
    $empArray[]= array($empRow['fulnme']);
}
$empString = json_encode($empArray);

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

        <img style = "position: left; margin-right: 100%;" src="timesheet.gif" alt="Timesheet Header" width="500" height="90"/>
    <title>User Menu</title>
</head>
<body>
<div id="rectangle" class="shadow" style="
    border: 1px solid lightgrey;
    height: 35%;
    width: 50%;
    margin-left: auto;
    margin-right: auto;
    margin-top:70px;
    border-radius: 3%;
    -webkit-box-shadow: 0 0 8px 5px #D3D3D3;">
    <h1 id="welcome" style="margin-top: 40px; margin-bottom: 8%;"></h1>
<a href="timeEntry.php"> <button type="spaceButton">Time Entry</button></a>
<a href="editEntries.php"> <button type="spaceButton">Edit Entries</button></a>
<!--<a href="createUser.php"> <button type="spaceButton">Create User</button></a><br>-->
<!--<a href="crewBuilder.php"> <button type = "spaceButton">Crew Builder</button></a>-->
<a href="logout.php"><button type="button" style="margin-top: 5%; display: block;">Logout</button></a>

</div>

<script type="text/javascript">
    empVarList = <?= $empString ?>;
    let emps = [];
    emps = empVarList;
    var header = document.getElementById('welcome');
    header.innerText = "Welcome " + emps.toString() + "!";
</script>
</body>
</html>
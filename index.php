<?php

session_start();

?>

<!DOCTYPE html>
<html>

<head>
	<title> CHR Time </title>
	
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	
	
		<img style = "position: left; margin-right: 100%;" src="timesheet.gif" alt="Timesheet Header" width="500" height="90"/>
		

</head>

<body>
	<div id="rectangle" class="shadow" style="
	border: 1px solid lightgrey;
    height: 300px;
    width: 600px;
    margin-top: 70px;
    margin-left: auto;
    margin-right: auto;
    border-radius: 3%; 
    -webkit-box-shadow: 0 0 8px 5px #D3D3D3;">

	<h1 style="margin-top: 60px;">Welcome to Time Sheet!</h1>
	<p>Please Login With the Provided Credentials.</p>

	<a href="login.php"> <button type = "button" style="margin-top: 5%;">Login</button></a>
		
	</div>	

</body>
</html>
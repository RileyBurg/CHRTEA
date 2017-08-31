<?php 
	require 'database.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Create a User</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	
	<ul style="
	width: 100%;
	float: right;
	margin-top:0px ;
	margin-bottom: 5%;
	padding: 0;
	list-style: none;
	background-color: #0098cb;
	border-bottom: 1px solid #ccc; 
	border-top: 1px solid #ccc;">
  		<li style="float: right;"><a style="
  		display: block;
		padding: 12px 15px;
		text-decoration: none;
		font-weight: bold;
		color: WHITE;
 		background-color: #0098cb;
		border-right: 1px solid #ccc;" href="timeEntry.php">Time Entry</a></li>

 		<li style="float: right;"><a style="
  		display: block;
		padding: 12px 15px;
		text-decoration: none;
		font-weight: bold;
		color: WHITE;
 		background-color: #0098cb;
		border-right: 1px solid #ccc;" href="createUser.php">Create User</a></li>
  		
  		<li style="float: right;"><a style="
  		display: block;
		padding: 12px 15px;
		text-decoration: none;
		font-weight: bold;
		color: WHITE;
 		background-color: #0098cb;
		border-right: 1px solid #ccc;" href="editEntries.php">Edit Entries</a></li>
  		
  		<li style="float: right;"><a style="
  		display: block;
		padding: 12px 15px;
		text-decoration: none;
		font-weight: bold;
		color: WHITE;
 		background-color: #0098cb;
		border-right: 1px solid #ccc;" href="crewBuilder.php">Crew Builder</a></li>
	</ul>
		
</head>
<body>
<div id="rectangle" class="shadow" style="
	border: 1px solid lightgrey;
    height: 350px;
    width: 50%;
    margin-left: auto;
    margin-right: auto;
    margin-top:2%;
    border-radius: 3%;
    -webkit-box-shadow: 0 0 8px 5px #D3D3D3;">

    <h1 style="margin-top: 10px; margin-bottom: 8%;">Create a User</h1>

    	<div style="text-align: left; padding-left: 10px;">
			<label for = "newUser"> New User Name: </label>
			<input style="margin-top:10px; width: 70%;" type="text" id="userCreation" name="newUser">
		</div>

		<div style="text-align: left; padding-left: 10px;">
			<label for = "newPass"> New User Password: </label>
			<input style="margin-top:10px; width: 70%;" type="text" id="passCreation" name="newPass">
		</div>

		<button type="spaceButton">Create</button><br>

		<a href = "http://chrap.chreynolds.com/userMenu.php"><button style="margin-top: 10%;" type="spaceButton">User Menu</button></a>
    </div>

</body>
</html>
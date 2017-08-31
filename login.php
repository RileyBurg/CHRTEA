<?php
session_start();
require 'database.php';
if(isset($_POST) & !empty($_POST))
{
	$username = $_POST['username'];
	$password = $_POST['password'];

        $_SESSION["username"] = $_POST['username'];

	$sql = "SELECT usrnme, psswrd FROM logins WHERE usrnme = '$username' AND psswrd = '$password'";
	$result = mysqli_query($connection, $sql);
	$count = mysqli_num_rows($result);
	
        if ($count == 1) 
	{
	       header("Location: http://chrap.chreynolds.com/userMenu.php");
               session_start();
	}
	else
	{
	       $message = "Invalid Username/Password";
         }
}
?>
<!DOCTYPE html>

<html>

<head>
	<title>Login Below</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	
	
		<img style = "position: left; margin-right: 100%;" src="timesheet.gif" alt="Timesheet Header" width="500" height="90"/>
	

</head>

<body>

<div id="rectangle" class="shadow" style="
	border: 1px solid lightgrey;
    height: 350px;
    width: 600px;
    margin-left: auto;
    margin-right: auto;
    margin-top:70px;
    border-radius: 3%;
    -webkit-box-shadow: 0 0 8px 5px #D3D3D3;">

	<h1 style="margin-top: 40px; margin-bottom: 50px; ">Login</h1>
			<form action = "login.php" method="POST">
			<input type="username" placeholder="Enter your user number" name ="username">
			<input type="password" placeholder="Enter your password" name ="password">
			<input style="margin-bottom: 0px" type="submit">

			<?php if(!empty($message)): ?>
				<p style="padding-bottom:20px;"> <?= $message ?> </p>
			<?php endif; ?>
</div>
	
</body>
</html>
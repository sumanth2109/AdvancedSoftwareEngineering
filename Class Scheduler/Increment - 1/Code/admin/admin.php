<?php 
include "../connect.php";
if(!(isset($_SESSION['admin'])))
{
header("Location:login.php");
echo 'If you are not redirected to login page <a href="signin.php">Click toProceed to the Admin  login page</a>.';
exit(); 
}
?> 
	<!DOCtype html>
	<html>
	<head>
         <title>App Recommender</title>
		  <meta name="viewport" content="width=device-width, initial-scale=1" />
		<link href="../css/style.css" rel="stylesheet" type="text/css">
	</head>
	<center>

		<div id="header">
			<br><span class="button1">Class Scheduler</span>
		</div>
		<div id="data">
<?php
//echo '<h1>Welcome '.$_SESSION['user_name'].'</h1></center>	';			
echo'<br><center>
	<form><br>
	<br>Enter Semister name:<input type="text" class="field1" name="sem"><br>
	<br>Enter Course id:<input type="text" class="field1" name="cid"><br>
	<br>Enter Course name:<input type="text" class="field1" name="cname"><br>
	<input type="submit" class="button2" value="submit"><br><br>
	';
	
	
 ?>
			<div id="footer">
			<a href="signout.php" class="button2" style="">Sign Out</a><br>
		</div>
	
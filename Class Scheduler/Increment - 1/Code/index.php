<?php include 'connect.php';
if(!(isset($_SESSION['signed_in'])))
{
header("Location:signin.php");
echo 'If you are not redirected to login page <a href="signin.php">Click toProceed to the Admin  login page</a>.';
exit(); 
}
?> 
<!DOCtype html>
<html>
    <head>
 <meta name="viewport" content="width=device-width, initial-scale=1" />
         <title>App Recommender</title>
		<link href="css/style.css" rel="stylesheet" type="text/css">
    </head>
	<body>
<center>

		<div id="header">
			<br><span class="button1">Class Scheduler</span>
		</div>
		<div id="data">
		<br><br>Welcome <b><?php echo $_SESSION['user_name'] ;?></b><br><br>
		The schedule for this week is
		</div>
		<div id="footer">
			<a href="profile.php" class="button2" style="float:left;">Profile</a>
			<a href="signout.php" class="button2" style="float:right;">Sign Out</a><br>
		</div>
	
	
	</div>
</center>
	
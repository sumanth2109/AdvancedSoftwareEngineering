<?php include '../connect.php';
if(!(isset($_SESSION['admin'])))
{
header("Location:login.php");
echo 'If you are not redirected to login page <a href="signin.php">Click toProceed to the Admin  login page</a>.';
exit(); 
}
?> 
<?php
session_destroy();
?>
<html>
    <head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>App Recommender</title>
		<link href="../css/style.css" rel="stylesheet" type="text/css">
   </head>
	<body>


<center>
		<div id="header">
			<br><span class="button1">Class Scheduler</span><br><br>
		</div>
<div id="data">	<br><br><br>
Sign out success
<br><br><br>

		<div id="footer"><br><a href="login.php" class="button2">Sign In</a><br><br></div></center>
			</div>
	</body>
</html>
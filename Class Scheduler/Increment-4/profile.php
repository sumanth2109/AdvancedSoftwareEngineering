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
         <title>Class Scheduler</title>
		<link href="css/style.css" rel="stylesheet" type="text/css">
    </head>
	<body>
<center>

		<div id="header">
			<br><span class="button1">Class Scheduler</span><br><br>
		</div>
		<div id="data">
		<br><br>Welcome <b><?php echo $_SESSION['user_name'] ;?></b><br><br><br>
		<a href="changepw.php" class="button2">Change Password</a><br><br><br>

		</div><div id="footer">
		<?php
		if($_SESSION['user_level']==9) {echo '<a href="admin/index.php" class="button2" style="float:left;">Home</a>';}
		else{ echo'	<a href="index.php" class="button2" style="float:left;">Home</a>';}
		?>
		<a href="signout.php" class="button2" style="float:right;">Sign Out</a><br><br>
		</div>
</div></center></body></html>	
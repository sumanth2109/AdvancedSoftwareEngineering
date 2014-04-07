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
         <title>Route Finder</title>
		<link href="css/style.css" rel="stylesheet" type="text/css">
    </head>
	<body>
<center>

		<div id="header">
			<span class="button1">Route Finder<img src="images/logo.png" width="50" height="50" style="border:0px;"/></span>
		</div>
		<div id="data">
		<br><br>Welcome <b><?php echo $_SESSION['user_name'] ;?></b><br><br>
		<form action="location.php" method="post">
		<span style="font-size:15px;font-weight:bold;">Location:	</span>
		<input type="text" id="search1" class="field1" value="chennai"  name="location" onfocus="clearText(this)" onblur="clearText(this)" style="opacity:0.5;width: 20%;">
		<br><span style="font-size:15px;font-weight:bold;"><br>Venue:</span>
		<input type="text" id="query11" class="field1" value="KFC"  name="venue" onfocus="clearText(this)" onblur="clearText(this)" style="opacity:0.5;width: 20%;">
		<br><input type="hidden" value="50" name="limit">
		<input id="searchbtn" type="submit" class="button2" value="Search Venues & Find Routes">
		</div>
		<div id="footer">
			<a href="profile.php" class="button2" style="float:left;">Profile</a>
			<a href="signout.php" class="button2" style="float:right;">Sign Out</a><br>
		</div>
	
	
	</div>
</center>
	
 <?php include 'connect.php';
 if(!isset($_SESSION['signed_in']))
 { 
header("Location:signin.php"); 
echo 'If you are not redirected to login page <a href="../signin.php">Click link to Proceed to the Administrator  login page</a>.'; 
exit; 
 } 
  else { 
 if($_SESSION['user_level']=="1") {} 
  else 
  {
 header("Location:signin.php"); 
 echo 'If you are not redirected to login page <a href="../signin.php">Click link to Proceed to the Administrator  login page</a>.';
exit; 
 } 
  }
?>
<!DOCtype html>
<html>
    <head>
 <meta name="viewport" content="width=device-width, initial-scale=1" />
         <title>Class Scheduler</title>
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<style>
		#disptime{display:none;}
		</style>
		<script>
		function displaytime()
		{
		disptime.style.display="inline";
		}
		</script>
    </head>
	<body>
<center>

		<div id="header">
			<br><span class="button1">Class Scheduler</span>
		</div>
		<div id="data">
		<br><br>Welcome <b><?php echo $_SESSION['user_name'] ;?></b><br><br>
		<a href="myschedule.php" class="button2">Check My Schedule</a><br><br><br>
		</div>
		<div id="footer">
			<a href="profile.php" class="button2" style="float:left;">Profile</a>
			<a href="signout.php" class="button2" style="float:right;">Sign Out</a><br>
		</div>
	
	
	</div>
</center>
	
<?php include '../connect.php';
if(!isset($_SESSION['signed_in']))
 { 
header("Location:../signin.php"); 
echo 'If you are not redirected to login page <a href="../signin.php">Click link to Proceed to the Administrator  login page</a>.'; 
exit; 
 } 
  else { 
 if($_SESSION['user_level']==9) {} 
  else 
  {
 header("Location:../signin.php"); 
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
		<a href="addcourse.php" class="button2">Add a Subject/Course </a><br><br><br>
		<a href="addprof.php" class="button2">Add a Professor</a><br><br><br>
		<a href="addcourseprof.php" class="button2">Assign a Professor to Course</a><br><br><br>
		<a href="schedule.php" class="button2">Generate & Check Schedule</a><br><br><br>
		<a href="dependancy.php" class="button2" >Add a pre-requisite Course</a><br><br><br>
		<a href="#" onclick="displaytime()" class="button2">Check Schedule for particular time</a><br><br><br>
		<div id="disptime">
		<form action="partsch.php">
		Schedule from 
		<select name="time1" class="field1" style="width:100px;">
		<option value="1">8.00</option>
		<option value="2">9.00</option>
		<option value="3">10.00</option>
		<option value="4">11.00</option>
		<option value="5">12.00</option>
		<option value="6">13.00</option>
		<option value="7">14.00</option>
		<option value="8">15.00</option>
		<option value="9">16.00</option>
		<option value="10">17.00</option>
		<option value="11">18.00</option>
		<option value="12">19.00</option>
		<option value="13">20.00</option>
		<option value="14">21.00</option>
		</select>
		to
		<select name="time2" class="field1"  style="width:100px;">
		<option value="1">8.00</option>
		<option value="2">9.00</option>
		<option value="3">10.00</option>
		<option value="4">11.00</option>
		<option value="5">12.00</option>
		<option value="6">13.00</option>
		<option value="7">14.00</option>
		<option value="8">15.00</option>
		<option value="9">16.00</option>
		<option value="10">17.00</option>
		<option value="11">18.00</option>
		<option value="12">19.00</option>
		<option value="13">20.00</option>
		<option value="14">21.00</option>
		</select>
		<br>
		<input type="submit" value="Find Schedule" class="button2">
		</div>
		</div>
		<div id="footer">
			<a href="../profile.php" class="button2" style="float:left;">Profile</a>
			<a href="../signout.php" class="button2" style="float:right;">Sign Out</a><br>		</div>
	
	
	</div>
</center>
	
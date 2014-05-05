<?php
session_start();
 include 'connect1.php';
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
		<style>
		#disptime{display:none;}
		</style>
		<script>
		function validate()
		{
		if(scode1.value==scode2.value)
		{
		error.style.display="inline";
		return false;
		}
		return true;
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

		
		<form action="adddependency.php" onsubmit="return validate()">
		Select a subject to add Dependency:<br>
		<select name="scode1" id="scode1"  class="field1" style="width:250px;">
		<?php
		$sql1="select sid,scode,sname from subjects";
		$result1=mysql_query($sql1) or die('Error fetching subject id<br><br>');
		while($row1= mysql_fetch_array($result1))
		{
		echo '<option value="'.$row1['sid'].'">'.$row1['scode'].' - '.$row1['sname'].'</option>';
		}
		?>
		</select>
		<div id="scode2div" style=""><br>
		please choose dependent subject:<br>
		<select name="scode2" id="scode2" class="field1" style="width:250px;">
		<?php
		$sql1="select sid,scode,sname from subjects";
		$result1=mysql_query($sql1) or die('Error fetching subject id<br><br>');
		while($row1= mysql_fetch_array($result1))
		{
		echo '<option value="'.$row1['sid'].'">'.$row1['scode'].' - '.$row1['sname'].'</option>';
		}
		?>
		</select><br>
		<div id="error" style="display:none;color:red;">2 courses should not be same</div><br>
		<input type="submit" value="Add Dependency" class="button2">
		</div>
		
		
		</div>
		<div id="footer">
			<a href="profile.php" class="button2" style="float:left;">Profile</a>
			<a href="signout.php" class="button2" style="float:right;">Sign Out</a><br>
		</div>
	
	
	</div>
</center>
	
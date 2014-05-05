 <?php include '../connect.php';
 if(!isset($_SESSION['signed_in']))
 { 
header("Location:../signin.php"); 
echo 'If you are not redirected to login page <a href="../signin.php">Click link to Proceed to the Administrator  login page</a>.'; 
exit; 
 } 
  else { 
 if($_SESSION['user_level']=="9") {} 
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

  
  
  table,td,th,tr{
border-collapse:collapse;
border:1px solid #00aa00;
}
th{
background:#0014aa;
color:white;
}
</style>
    </head>
	<body>
<center>

		<div id="header">
			<br><span class="button1">Class Scheduler</span>
		</div>
		<div id="data">
		<br><br>Welcome <b><?php echo $_SESSION['user_name'] ;?></b><br><br>
<?php
if($_SERVER['REQUEST_METHOD'] != 'POST')
{
echo '		<form action="" method="post">
		Add a Professor:<br>
		Enter Professor Name:
		<input type="text" name="name" maxlength="16" class="field1" required><br><br>
		Enter Professor Email Id:
		<input type="email" name="email" maxlength="36" class="field1" required><br><br>
		Is he doing research:
		<select class="field1" style="width:100px;" name="research">
		<option value="1">No</option>
		<option value="9">Yes</option>
		</select><br>
		<input type="submit" class="button2" value="Add Professor">
		</form>
<br><br>';
}
else
{
$name=mysql_real_escape_string($_POST['name']);
$email=mysql_real_escape_string($_POST['email']);
$rm=mysql_real_escape_string($_POST['research']);
$sql="insert into professors(pname,researchMode) values('$name',$rm)";
$result=mysql_query($sql) or die('Error storing prof<br><br>');
echo "<br>Professor Added Successfully<br>";
$id=mysql_insert_id();
$pass=sha1("default");
$sql="insert into $userstable(user_name, user_pass,user_email,user_date, user_level, professorid) values('prof$id','$pass','$email',NOW(),1,$id)";
//echo $sql;
$result=mysql_query($sql) or die('Error creating  prof login info<br><br>');
echo $name.' Login Details<br>
User Id=prof'.$id.'<br>
Password=default
<br><br><br>
<a href="index.php" class="button2">Goto Home Page</a>
';

}
?>
		
		</div>
		<div id="footer">
			<a href="../profile.php" class="button2" style="float:left;">Profile</a>
			<a href="../signout.php" class="button2" style="float:right;">Sign Out</a><br>		</div>
	
	
	</div>
</center>
	
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

  
  
  table,td,tr{
border-collapse:collapse;
border:1px solid blue;
}
th{
background:#00aa00;
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
		<h3>Add a Course</h3>
		Enter Subject/Course Name:		<input type="text" name="name" maxlength="32" class="field1" required><br><br>
		Enter Subject/Course ID:	<input type="text" name="id" maxlength="10" class="field1" required><br><br>
		<input type="submit" class="button2" value="Add Course">
		</form>
<br><br>';
}
else
{
$name=mysql_real_escape_string($_POST['name']);
$id=mysql_real_escape_string($_POST['id']);
$sql="insert into subjects(scode,sname) values($id,'$name')";
$result=mysql_query($sql) or die('Error storing subject<br><br>');
echo 'Subject/Course Added Successfully<br><br><br>
<a href="index.php" class="button2">Goto Home Page</a>';
}
?>		
		</div>
		<div id="footer">
			<a href="../profile.php" class="button2" style="float:left;">Profile</a>
			<a href="../signout.php" class="button2" style="float:right;">Sign Out</a><br>		</div>
	
	
	</div>
</center>
	
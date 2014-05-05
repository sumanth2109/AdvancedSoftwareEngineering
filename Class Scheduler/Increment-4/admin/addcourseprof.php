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
		?>
		<form action="" method="post">
		
		<br><br>Select a Professor
		<select name="prof" class="field1" required>
		<?php
		$sql1="select pid,pname from professors";
		$result1=mysql_query($sql1) or die('Error fetching proff<br><br>');
		while($row1= mysql_fetch_array($result1))
		{
		echo '<option value="'.$row1['pid'].'">'.$row1['pname'].'</option>';
		}
		?></select>
		
		<br><br>Select a Course
		<select name="subject" class="field1"  required>
		<?php
		$sql1="select sid,scode,sname from subjects";
		$result1=mysql_query($sql1) or die('Error fetching subject id<br><br>');
		while($row1= mysql_fetch_array($result1))
		{
		echo '<option value="'.$row1['sid'].'">'.$row1['scode'].' - '.$row1['sname'].'</option>';
		}
		?>		</select>

		<br><br><input type="submit" class="button2" value="Assign">
		</form>
		<?php
		}
		else
		{
			$sid=mysql_real_escape_string($_POST['subject']);
			$pid=mysql_real_escape_string($_POST['prof']);
					$sql1="select researchMode from professors where pid=".$pid;
					$result1=mysql_query($sql1) or die('Error fetching professor id<br><br>');
					while($row1= mysql_fetch_array($result1)){$rs=$row1['researchMode'];}

			$sql="insert into assign(sid,pid,rs) values($sid,$pid,$rs)";
$result=mysql_query($sql) or die('Error storing subject<br><br>');
echo 'Subject/Course Assigned to professor Successfully<br><br><br>
<a href="index.php" class="button2">Goto Home Page</a>';

		}
		?>
		</div>
		<div id="footer">
			<a href="../profile.php" class="button2" style="float:left;">Profile</a>
			<a href="../signout.php" class="button2" style="float:right;">Sign Out</a><br>		</div>
	
	
	</div>
</center>
	
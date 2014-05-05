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
echo '<br>Schedule for Mon/Wed/Fri<table>
<tr><th>7 - 7:50</th><th>8 - 8:50</th><th>9 - 9:50</th><th>10 - 10:50</th><th>11 - 11:50</th><th>12 - 12:50</th><th>1 - 1:50</th><th>2 - 2:50</th><th>3 - 3:50</th><th>4 - 5:15</th><th>5:30 - 6:45</th><th>7 - 8:15</th><th>8:30 - 9:45</th></tr>
<tr>';
timetable(1,13);
echo '</tr></table>';

echo '<br><br>Schedule for Tuesday / Thursday <table>
<tr><th>7 - 8:15</th><th>8:30 - 9:45</th><th>10 - 11:15</th><th>11:30 - 12:45</th><th>1 - 2:15</th><th>2:30 - 3:45</th><th>4-5:15</th><th>5:30-6:45</th><th>7-8:15 </th><th>8:30 - 9:45</th></tr>
<tr>';
timetable(9,10);
echo '</tr></table>';

function timetable($rs,$periods)
{
	$sql="select * from assign where cid=1 and rs=$rs order by pid";
	$result=mysql_query($sql) or die('Error fetching assigned data<br><br>');
	$i=0;
	while($row = mysql_fetch_array($result))
	{
		$sql1="select sname from subjects where sid=".$row['sid'];
		$result1=mysql_query($sql1) or die('Error fetching subject id<br><br>');
		while($row1= mysql_fetch_array($result1)){$name=$row1['sname'];}

		$name.="@";
		$sql1="select pname from professors where pid=".$row['pid'];
		$result1=mysql_query($sql1) or die('Error fetching professor id<br><br>');
		while($row1= mysql_fetch_array($result1)){$name.=$row1['pname'];}
		//echo $name;
			echo '<td>'.str_replace("@","<br><b>",$name).'</b></td>';
		$i++;
		if($i==$periods) break;
	}
	while(1)
	{
	if($i==$periods) break;
	else echo '<td><b style="color:red;">Leisure</b></td>';
	$i++;
	}
}
		
?>
		
		
		
		
		
		</div>
		<div id="footer">
			<a href="../profile.php" class="button2" style="float:left;">Profile</a>
			<a href="../signout.php" class="button2" style="float:right;">Sign Out</a><br>		</div>
	
	
	</div>
</center>
	
 <?php include 'connect.php';
 if(!isset($_SESSION['signed_in']))
 { 
header("Location:../signin.php"); 
echo 'If you are not redirected to login page <a href="../signin.php">Click link to Proceed to the Administrator  login page</a>.'; 
exit; 
 } 
  else { 
 if($_SESSION['user_level']=="1") {} 
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
		<table border="0"><tr><th>Day</th><th>Course</th><th>Name</th><th>Time</th></tr>

	
		
		
		
		<?php		
echo '<tr>';
timetable(1,13);
timetable(9,10);
echo '</tr></table>';

function timetable($rs,$periods)
{
	$sql="select * from assign where cid=1 and rs=$rs order by pid";
	$result=mysql_query($sql) or die('Error fetching assigned data<br><br>');
	$i=0;
	while($row = mysql_fetch_array($result))
	{
		if($row['pid']==$_SESSION['pid'])
		{if($periods==10) echo '<td>Tuesday / Thursday</td>';
		else echo '<td>Mon/Wed/Fri</td>';
		}

		$sql1="select sname from subjects where sid=".$row['sid'];
		$result1=mysql_query($sql1) or die('Error fetching subject id<br><br>');
		while($row1= mysql_fetch_array($result1)){if($row['pid']==$_SESSION['pid']){ echo '<td>'.$row1['sname'].'</td>';}  }

		$sql1="select pname from professors where pid=".$row['pid'];
		$result1=mysql_query($sql1) or die('Error fetching professor id<br><br>');
		while($row1= mysql_fetch_array($result1)){if($row['pid']==$_SESSION['pid']){ echo '<td>'.$row1['pname'].'</td><td>'.getTime($periods,$i).'</td>';}  }

		$i++;
		if($i==$periods) break;
	}
}
function getTime($periods,$count)
{
	if($periods==10)
	{	if($count==1)	return '7 - 8:15';
		elseif($count==2)  return '8:30 - 9:45';
		elseif($count==3) return '10 - 11:15';
		elseif($count==4) return '11:30 - 12:45';
		elseif($count==5) return '13 - 14:15';
		elseif($count==6) return '14:30 - 15:45';
		elseif($count==7) return '16-17:15';
		elseif($count==8) return '17:30-18:45';
		elseif($count==9) return '19-20:15';
		elseif($count==10) return '20:30 - 21:45';
	}
	if($periods==13)
	{
		if($count==1)	return '7 - 7:50';
		elseif($count==2)  return '8 - 8:50';
		elseif($count==3) return '9 - 9:50';
		elseif($count==4) return '10 - 10:50';
		elseif($count==5) return '11 - 11:50';
		elseif($count==6) return '12 - 12:50';
		elseif($count==7) return '13 - 13:50';
		elseif($count==8) return '14 - 14:50';
		elseif($count==9) return '15 - 15:50';
		elseif($count==10) return '16 - 17:15';
		elseif($count==11) return '17:30 - 18:45';
		elseif($count==12) return '19 - 20:15';
		elseif($count==13) return '20:30 - 21:45';
	}
}		
?>
	
				
		

		
		
		
		
		
		</div>
		<div id="footer">
			<a href="profile.php" class="button2" style="float:left;">Profile</a>
			<a href="signout.php" class="button2" style="float:right;">Sign Out</a><br>		</div>
	
	
	</div>
</center>
	
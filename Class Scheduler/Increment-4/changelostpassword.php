	<?php
        include 'connect.php'; ?><<!DOCtype html>
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
		<?php
	$user=mysql_real_escape_string($_GET['user']);	
	$password=mysql_real_escape_string($_GET['id']);
	$sql = "SELECT 	* FROM $userstable	WHERE user_pass='$password' and user_name='$user'";
$result = mysql_query($sql);
if(!$result)
{
	echo 'Did not found the user.Invalid Link';
}
else
{
	
	while($row = mysql_fetch_assoc($result))
	{
	echo '<center><div style="width:500px;margin:auto;padding:10px;"><h2>Change Lost Password</h2>
					Hello '.$row['user_name'].'<br><br><form action="changecomplete.php" method="post">
	<input type="hidden" name="username" value="'.$row['user_name'].'"><input type="hidden" name="oldpassword" value="'.$password.'">
	Enter new password:<input type="password" name="newpwd" maxlenth="16" class="field1" required><br>
	<br>Confirm new password:<input type="password" name="newpwdcfm" maxlenth="16" class="field1" required>
	<br><input type="submit" value="change password" class="button2">
	</form> </div>';
	}
}

echo '	</div></div>';  ?>

  				<br><br><br>

		</div><center><div id="footer"><br><a href="signin.php" class="button2">Proceed</a><br><br></div></center>
			</div>
	</body>
</html>
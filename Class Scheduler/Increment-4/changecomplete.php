	<?php
        include 'connect.php'; ?><!DOCtype html>
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
		<br><br><div id="data">
		<?php
if($_SERVER['REQUEST_METHOD'] != 'POST')
{

	echo 'page forbidden';
}	
else
{
	$mypassword=$_POST['oldpassword'];
	$new=sha1($_POST['newpwd']);
	$new1=sha1($_POST['newpwdcfm']);
	$userid=$_POST['username'];
	if($new==$new1)
	{
			$result1 = mysql_query("UPDATE $userstable SET user_pass='$new' WHERE user_name='$userid' and user_pass='$mypassword'");
			if(!$result1)
			{
				echo 'Something went wrong while updating your details. Please try again later.';
			}
			else
			{
				echo 'Password changed successfully.You can <a href="signin.php"> Signin </a> to your account now.';
			}
		
	}
	
	else 
	{
	echo "Entered new passwords does not match";
	}	
}
echo '	</div></div>'; ?>
  				<br><br><br>

		</div><center><div id="footer"><br><a href="signin.php" class="button2">Proceed</a><br><br></div></center>
			</div>
	</body>
</html>
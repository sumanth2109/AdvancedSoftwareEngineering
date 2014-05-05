<?php 
session_start();

//sql and database information
$server	    = 'RepYaCity.db.10737671.hostedresource.com';
$username	= 'RepYaCity';
$password	= 'Projectweb2@';
$database	= 'RepYaCity';
$userstable='users1';

$website='repyacity.com';    	
$company_name='Class Scheduler ';
$from='sumanth2109@gmail.com';
$host='repyacity.com/test1/classsch';	//webaddress folder in which the forgot pw link is present

$debug=0;    //Show the sending mail info,some errors used for debugging.
error_reporting('E_NONE');

if(!mysql_connect($server, $username, $password))
{
 	exit('Error: could not establish database connection');
}
if(!mysql_select_db($database))
{
 	exit('Error: could not select the database');
}
?>
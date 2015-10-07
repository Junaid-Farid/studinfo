<?php
require_once('includes/dbcon.php');
include("includes/functions.php");

if(isset($_POST['idno']))
{
	$name=mysql_real_escape_string($_POST['idno']);
	$query = 'select session_id from std_session where session_id="'.$name.'"';
	
	
	$rs=mysql_query($query);
	
	$row=mysql_num_rows($rs);
	if($row==0)
	{
		echo "<span style='color:green;'>Available</span>";
	}
	else
	{
		echo "<span style='color:red;'>Already exist</span>";
	}
}


//for contact
if(isset($_POST['sday']))
{
	$contact=mysql_real_escape_string($_POST['sday']);
	$query = 'select std_session_start from std_session where std_session_start="'.$contact.'"';
	
	
	$rs=mysql_query($query);
	
	$row=mysql_num_rows($rs);
	if($row==0)
	{
		echo "<span style='color:green;'>Available</span>";
	}
	else
	{
		echo "<span style='color:red;'>Already exist</span>";
	}
}


//for email
if(isset($_POST['eday']))
{
	$email = mysql_real_escape_string($_POST['eday']);
	$query = 'select std_session_end from std_session where std_session_end="'.$email.'"';
	
	
	$rs=mysql_query($query);
	
	$row=mysql_num_rows($rs);
	if($row==0)
	{
		echo "<span style='color:green;'>Available</span>";
	}
	else
	{
		echo "<span style='color:red;'>Already exist</span>";
	}
}
// name of this file is  validate_std_session.php
?>

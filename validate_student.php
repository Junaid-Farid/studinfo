<?php
require_once('includes/dbcon.php');
include("includes/functions.php");

if(isset($_POST['idno']))
{
	$name=mysql_real_escape_string($_POST['idno']);
	$query = 'select s_id from student where s_id="'.$name.'"';
	
	
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
if(isset($_POST['s_contact']))
{
	$contact=mysql_real_escape_string($_POST['s_contact']);
	$query = 'select s_contact from student where s_contact="'.$contact.'"';
	
	
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
if(isset($_POST['st_email']))
{
	$email = mysql_real_escape_string($_POST['st_email']);
	$query = 'select s_email from student where s_email="'.$email.'"';
	
	
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

?>

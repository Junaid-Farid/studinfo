<?php
require_once('includes/dbcon.php');
include("includes/functions.php");

if(isset($_POST['idno']))
{
	$name=mysql_real_escape_string($_POST['idno']);
	$query = 'select instruc_id from instructor where instruc_id="'.$name.'"';
	
	
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
	$query = 'select instruct_contact from instructor where instruct_contact="'.$contact.'"';
	
	
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
if(isset($_POST['p_email']))
{
	$email = mysql_real_escape_string($_POST['p_email']);
	$query = 'select email_add from instructor where email_add="'.$email.'"';
	
	
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

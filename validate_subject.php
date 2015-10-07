<?php
require_once('includes/dbcon.php');
include("includes/functions.php");

if(isset($_POST['subj']))
{
	$name=mysql_real_escape_string($_POST['subj']);
	$query = 'select subj_code from subjects where subj_code="'.$name.'"';
	
	
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

if(isset($_POST['subj_name']))
{
	$name=mysql_real_escape_string($_POST['subj_name']);
	$query = 'select subject from subjects where subject="'.$name.'"';
	
	
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


// name of this file is  validate_subject.php
?>

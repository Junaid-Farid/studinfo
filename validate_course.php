<?php
require_once('includes/dbcon.php');
include("includes/functions.php");

if(isset($_POST['course']))
{
	$name=mysql_real_escape_string($_POST['course']);
	$query = 'select course_name from course where course_name="'.$name.'"';
	
	
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



// name of this file is  validate_course.php
?>

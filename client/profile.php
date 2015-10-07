<?php
require_once('includes/dbcon.php');
require_once("includes/session.php");
include("includes/functions.php");
include("header.php");
$sql = "SELECT * FROM `student` WHERE `s_email`='". $_SESSION['std_email'] ."' and `s_password`='". $_SESSION['std_password'] ."'";
	
	$result = mysql_query($sql) or die;
	confirm_query($result);
	while($row = mysql_fetch_array($result))
	{
		$name = $row['s_name'];
		$address = $row['s_address'];
		$contact = $row['s_contact'];
		$email  = $row['s_email'];
		$guardian = $row['s_guardian'];
		$course = $row['course_id'];
		$session = $row['sy'];
		$dept = $row['dept_id'];
		$semester = $row['semester'];
		
		//for course
		$query = "SELECT course_name FROM course WHERE course_id = '".$course."'";
		$rs = mysql_query($query) or die;
		confirm_query($rs);
		while ($course_row = mysql_fetch_array($rs))
		{
			$course_name = $course_row['course_name'];	
		}
		
		//for dept
		$dept_query = "SELECT dept_name FROM department WHERE dept_id = '".$dept."'";
		$dept_rs = mysql_query($dept_query) or die;
		confirm_query($dept_rs);
		while ($dept_row = mysql_fetch_array($dept_rs))
		{
			$dept_name = $dept_row['dept_name'];	
		}
		
		
		
	}
	
	
?>
<div class="container">
<?php include("html/profilePage.html");?>

</div>

<!--content--->
<?php
include("footer.php");
?>
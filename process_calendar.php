<?php
	require_once('includes/dbcon.php');
?>
<?php include("includes/functions.php");?>
<?php
			$dept = $_POST['dept_list'];
			$course = $_POST['course_list'];
			$sem   = $_POST['sem'];
		   	$edate = $_POST['edate'];
			$ocasion  = $_POST['ocasion'];
			$ocasion_detail = $_POST['ocasion_detail'];
?>	
    <?php
		if($ocasion == ''){?>
			<script type="text/javascript">
				alert("Ocasion Cannot be NULL!...");
				window.location = "calendar.php";
			</script>
	<?php
		}else{
				$query = "INSERT INTO `schoolcal`
								(cal_date,event,event_description , semester,cal_dept_id,cal_course_id)
							VALUES ('{$edate}','{$ocasion}', '{$ocasion_detail}','{$sem}','{$dept}','{$course}')";
				$result = mysql_query($query);
				confirm_query($result);
		}		 
	?>
    	
<script type="text/javascript">
	alert("Successfully added.");
	window.location = "calendar_list.php";
</script>

		
     
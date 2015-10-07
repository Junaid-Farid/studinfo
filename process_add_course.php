<?php
	require_once('includes/dbcon.php');
?>
<?php include("includes/functions.php");?>
<?php
			$dept 	= $_POST['dept_list'];
			$course = $_POST['course'];
			$desc = $_POST['description'];
			
?>	
    <?php

				$query = "INSERT INTO course
								(course_name,description, dept_id)
							VALUES ('".$course."','".$desc."','".$dept."' )";
				$result = mysql_query($query);
				confirm_query($result);
	?>
    	
<script type="text/javascript">
	alert("Successfully added.");
	window.location = "add_course.php";
</script>

		
     
<?php
	require_once('includes/dbcon.php');

	
	
			$dept = $_POST['dept'];
			$desc = $_POST['deptdesc'];
			$id   = $_POST['id'];
			
			 $sql = "UPDATE `course` SET `course_name` = '{$dept}',
								`description` = '{$desc}'
								WHERE `course_id` =".$id;
				mysql_query($sql)or die ('Error in Updating Database');

			?>
			<script type="text/javascript">
				alert("Department Updated!");
				window.location = "dept.php";
			</script>
			

				
		
<?php
	require_once('includes/dbcon.php');

	
	
			$dept = $_POST['dept'];
			$desc = $_POST['deptdesc'];
			$id   = $_POST['id'];
			
			 $sql = "UPDATE `department` SET `dept_name` = '{$dept}',
								`dept_description` = '{$desc}'
								WHERE `dept_id` =".$id;
				mysql_query($sql)or die ('Error in Updating Database');

			?>
			<script type="text/javascript">
				alert("Department Updated!");
				window.location = "dept_list.php";
			</script>
			

				
		
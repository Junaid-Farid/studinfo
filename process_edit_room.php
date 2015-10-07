<?php
	require_once('includes/dbcon.php');

	
	
			$dept = $_POST['dept'];
			$desc = $_POST['deptdesc'];
			$id   = $_POST['id'];
			
			 $sql = "UPDATE `room` SET `room_name` = '{$dept}',
								`room_desc` = '{$desc}'
								WHERE `room_id` =".$id;
				mysql_query($sql)or die ('Error in Updating Database');

			?>
			<script type="text/javascript">
				alert("Room Updated!");
				window.location = "room_list.php";
			</script>
			

				
		
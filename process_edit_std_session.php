<?php
	require_once('includes/dbcon.php');

	
	        $rec_id = $_POST['id'];
			$id = $_POST['idno'];
			$desc = $_POST['sday'];
			$dept = $_POST['eday'];
			
			 $sql = "UPDATE `std_session` SET `session_id` = '{$id}',
								`std_session_start` = '{$desc}', std_session_end = '{$dept}'
								WHERE `session_id` =".$rec_id;
			
				mysql_query($sql)or die ('Error in Updating Database');

			?>
			<script type="text/javascript">
				alert("Student Session Updated!");
				window.location = "std_session_list.php";
			</script>
			

				
		
<?php
	require_once('includes/dbcon.php');

	
	
			$subj = $_POST['subj'];
			$desc = $_POST['subjdesc'];
			$unit = $_POST['subjunit'];
			$id   = $_POST['id'];
			$yr   = $_POST['yr'];
			$sem  = $_POST['sem'];
			$course  = $_POST['course'];	
			
			 $sql = "UPDATE `studinfosms`.`subjects` SET `subject` = '{$subj}',
								`description` = '{$desc}', `unit` = '{$unit}',
								`yr` = '{$yr}', `semester` = '{$sem}', `course_id` = '{$course}'
								WHERE `subjects`.`subj_id` =".$id;
				mysql_query($sql)or die ('Error in Updating Database');

			?>
			<script type="text/javascript">
				alert("Subject Updated!");
				window.location = "subject_list.php";
			</script>
			

				
		
<?php
	require_once('includes/dbcon.php');
?>
<?php include("includes/functions.php");?>
<?php
			$subj = $_POST['subj'];
			$desc = $_POST['subjdesc'];
			$unit = $_POST['subjunit'];
			$yr   = $_POST['yr'];
			$sem  = $_POST['sem'];
			$course  = $_POST['course'];
			$pre  = $_POST['pre'];
?>	
    <?php

				$query = "INSERT INTO subjects
								(subject,description,unit,yr,semester,course_id,pre)
							VALUES ('".$subj."','".$desc."','.$unit.','.$yr.','".$sem."','.$course.','".$pre."')";
				$result = mysql_query($query);
				confirm_query($result);
				
	?>
    	
<script type="text/javascript">
	alert("Successfully added.");
	window.location = "add_subject.php";
</script>

		
     
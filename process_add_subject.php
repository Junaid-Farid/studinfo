<?php
	require_once('includes/dbcon.php');
?>
<script src="javascripts/customAlert.js" language="javascript"></script>
<?php include("includes/functions.php");?>
<?php
			$subj = $_POST['subj'];
			$desc = $_POST['subjdesc'];
			$unit = $_POST['subjunit'];
			$yr   = $_POST['yr'];
			$sem  = $_POST['sem'];
			$course  = $_POST['course'];
			$pre  = $_POST['pre'];
			$sub_name = $_POST['subj_name'];
?>	
    <?php

				$query = "INSERT INTO subjects
								(subj_code,subject,description,unit,yr,semester,course_id,pre)
							VALUES ('".$subj."','".$sub_name."','".$desc."','.$unit.','.$yr.','".$sem."','.$course.','".$pre."')";
				$result = mysql_query($query);
				confirm_query($result);
				
	?>
    	
<script type="text/javascript">
	alert("Successfully added.");
	window.location = "add_subject.php";
</script>

		
     
<?php
	require_once('includes/dbcon.php');
?>
<?php include("includes/functions.php");?>
<?php
			$subj   = $_POST['subj1'];
			$s_id   = $_POST['s_id'];
			$sem    = $_POST['sem'];
		   	$yr     = $_POST['yr'];
			$sy	    = $_POST['sy'];
			$course = $_POST['course_id'];
?>	
    <?php
			$sql = "Select * from `grades` where s_id = '{$s_id}' AND subj_code = '{$subj}' ";
			$result = mysql_query($sql);
			confirm_query($result);
			$numrows = mysql_num_rows($result);
			if($numrows == 1){?>
					 	
				<script type="text/javascript">
					alert("Subject selected is already added!.");
					window.location = "add_grades.php?s_id=<?php echo $s_id; ?>&courseid=<?php echo $course;?>";
				</script>
   
	<?php			
			}else{
	
				$query = "INSERT INTO `grades`
								(s_id,subj_code,sy,semester,yr)
							VALUES ('.$s_id.','.$subj.','".$sy."','".$sem."','.$yr.')";
				$result = mysql_query($query);
				confirm_query($result);
			}
	?>
    	
<script type="text/javascript">
	alert("Successfully added.");
	window.location = "student_filter.php";
</script>
   
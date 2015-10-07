<?php
	require_once('includes/dbcon.php');
?>
<?php include("includes/functions.php");?>
<?php

if(isset($_POST['submit']))
{
			$dept = $_POST['dept_list'];
			$course = $_POST['course_list'];
		    $session = $_POST['session_list'];
			$sems = $_POST['sems_list'];
			$subj = $_POST['subj_list'];
			$instructor = $_POST['inst_list'];
			$room = $_POST['room_list'];
			$day = $_POST['day_list'];
		
			$t_start = $_POST['time_start'];
			$t_end = $_POST['time_end'];
			
			
			if ($t_start ==''){
					?>
					<script type="text/javascript">
						alert("Start Time Cannot be null!");
						window.location = "add_schedule.php";
					</script>
					<?php
					}
					else if($t_end==''){
					?>
					<script type="text/javascript">
						alert("End Time Cannot be null!");
						window.location = "add_schedule.php";
					</script>
					<?php 
				}
					
	

					
					
				     	$query = "INSERT INTO schedule (room_id,dept_id, course_id, subject_id, instruct_id, day_id, time_s, time_e, session_id, semester_id) VALUES ('".$room."','".$dept."','".$course."','".$subj."','".$instructor."','".$day."','".$t_start."','".$t_end."','".$session."','".$sems."')";
								
						$result = mysql_query($query);
						confirm_query($result);
						 
					
						?> 
						 <script type="text/javascript">
							alert("Successfully added.");
						    window.location = "add_schedule.php";
						 </script>
						<?php
					}
	?>
				
	
}
?>
   
      
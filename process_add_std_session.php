<?php
	require_once('includes/dbcon.php');
    include("includes/functions.php");

			$session_ID = $_POST['idno'];
			$start_date = $_POST['sday'];
			$end_date   = $_POST['eday'];
			
	

					if ($session_ID ==''){
					?>
					<script type="text/javascript">
						alert("Please Enter Unique Session ID!");
						window.location = "add_std_session.php";
					</script>
					<?php
					} else if ($start_date ==''){
					?>
					<script type="text/javascript">
						alert("Start Date Cannot be null!");
						window.location = "add_std_session.php";
					</script>
					<?php
					}else if($end_date==''){
					?>
					<script type="text/javascript">
						alert("Please End date!");
						window.location = "add_std_session.php";
					</script>
					
					<?php
					
					}else{
					
					$query = "Select session_id from std_session where session_id = '".$session_ID."' ";
					$result = mysql_query($query);
					confirm_query($result);
					$numrows = mysql_num_rows($result);
					
					if ($numrows == 1){
					?>
					<script type="text/javascript">
						alert("Id No. already exist!");
						window.location = "add_student.php";
					</script>
					<?php
					}
				     	$query = "INSERT INTO std_session
								(std_session_start,std_session_end, session_id)
							VALUES ('".$start_date."','".$end_date."','".$session_ID."')";
						$result = mysql_query($query);
						confirm_query($result);
						 
						
						?> 
						 <script type="text/javascript">
							alert("Successfully added.");
						    window.location = "add_std_session.php";
						 </script>
						<?php
					}
	?>
    	
      <?php /*?><a href="main.php"> Return to Index </a></p><?php */?>
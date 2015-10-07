<?php include("includes/dbcon.php");?>
<?php include("includes/functions.php");?>
<?php

		
		$cal_id 	= $_GET['id'];
 		$query = "Delete from std_session where session_id = ".$cal_id;
        $result = mysql_query($query);
       confirm_query($result);
		?>
			  	
			<script type="text/javascript">
				alert("Student Session Successfully deleted!");
				window.location = "std_session_list.php";
			</script>

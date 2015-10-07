<?php include("includes/dbcon.php");?>
<?php include("includes/functions.php");?>
<?php

		
		$cal_id 	= $_GET['id'];
 		$query = "Delete from schoolcal where cal_id = ".$cal_id;
        $result = mysql_query($query);
       confirm_query($result);
		?>
			  	
			<script type="text/javascript">
				alert("Activity Successfully deleted!");
				window.location = "calendar_list.php";
			</script>

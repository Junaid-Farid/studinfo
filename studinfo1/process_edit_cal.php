<?php
	require_once('includes/dbcon.php');

	
	 
			$sem = $_POST['sem'];
			$date = $_POST['edate'];
			$event   = $_POST['ocasion'];
			$id		= $_GET['id'];
			
			 $sql = "UPDATE  `studinfosms`.`schoolcal` SET  `cal_date` = '{$date}',
						`event` =  '{$event}',
						`semester` =  '{$sem}' WHERE  `schoolcal`.`cal_id` =".$id;
				mysql_query($sql)or die ('Error in Updating Database');

 			?>
			<script type="text/javascript">
				alert("Calendar Updated!");
				window.location = "calendar_list.php";
			</script>
			

				
		
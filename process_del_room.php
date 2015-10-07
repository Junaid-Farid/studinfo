<?php include("includes/dbcon.php");?>
<?php include("includes/functions.php");?>
<?php

		
		$room_id 	= $_GET['id'];
 		$query = "Delete from room where room_id = ".$room_id;
        $result = mysql_query($query);
       confirm_query($result);
		?>
			  	
			<script type="text/javascript">
				alert("Room Successfully deleted!");
				window.location = "room_list.php";
			</script>

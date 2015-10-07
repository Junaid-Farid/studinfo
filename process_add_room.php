<?php
	require_once('includes/dbcon.php');
?>
<?php include("includes/functions.php");?>
<?php
			$rm_name = $_POST['room'];
			$desc = $_POST['description'];
			
?>	
    <?php

				$query = "INSERT INTO room
								(room_name,room_desc)
							VALUES ('".$rm_name."','".$desc."')";
				
				$result = mysql_query($query);
				confirm_query($result);
	?>
    	
<script type="text/javascript">
	alert("Successfully added.");
	window.location = "add_room.php";
</script>

		
     
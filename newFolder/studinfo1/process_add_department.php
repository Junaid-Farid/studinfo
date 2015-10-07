<?php
	require_once('includes/dbcon.php');
?>
<?php include("includes/functions.php");?>
<?php
			$course = $_POST['course'];
			$desc = $_POST['description'];
			
?>	
    <?php

				$query = "INSERT INTO department
								(dept_name,dept_description)
							VALUES ('".$course."','".$desc."')";
				$result = mysql_query($query);
				confirm_query($result);
	?>
    	
<script type="text/javascript">
	alert("Successfully added.");
	window.location = "add_department.php";
</script>

		
     
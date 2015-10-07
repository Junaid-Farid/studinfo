<?php
	require_once('includes/dbcon.php');
?>
<?php include("includes/functions.php");?>
<?php
			$sem   = $_POST['sem'];
		   	$edate = $_POST['edate'];
			$ocasion  = $_POST['ocasion'];
?>	
    <?php
		if($ocasion == ''){?>
			<script type="text/javascript">
				alert("Ocasion Cannot be NULL!...");
				window.location = "calendar.php";
			</script>
	<?php
		}else{
				$query = "INSERT INTO `schoolcal`
								(cal_date,event,semester)
							VALUES ('{$edate}','{$ocasion}','{$sem}')";
				$result = mysql_query($query);
				confirm_query($result);
		}		 
	?>
    	
<script type="text/javascript">
	alert("Successfully added.");
	window.location = "calendar_list.php";
</script>

		
     
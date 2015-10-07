<?php include("includes/dbcon.php");?>
<?php include("includes/functions.php");?>
<?php

		
		$cal_id 	= $_GET['id'];
 		$query = "Delete from subjects where subj_code = ".$cal_id;
        $result = mysql_query($query);
       confirm_query($result);
		?>
			  	
			<script type="text/javascript">
				alert("Department Successfully deleted!");
				window.location = "subject_list.php";
			</script>

<?php include("includes/dbcon.php");?>
<?php include("includes/functions.php");?>
<?php

		
		$cal_id 	= $_GET['id'];
		
		//deleting the file 
		$query		= "select file_name from files where file_id = ".$cal_id;
		$rs			= mysql_query($query);
		$row		= mysql_fetch_array($rs);
		$delFile	= $row['file_name'];
		
		unlink("files/".$delFile);
	//end of of the deleting file
		
 		$query = "Delete from files where file_id = ".$cal_id;
        $result = mysql_query($query);
       confirm_query($result);
		?>
			  	
			<script type="text/javascript">
				alert("Notice Successfully deleted!");
				window.location = "notice_list.php";
			</script>

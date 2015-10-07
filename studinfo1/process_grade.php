<?php
	require_once('includes/dbcon.php');
?>

<?php
			$subjgrade 	= $_POST['subjgrade'];
			$grade_id	= $_POST['grade_id'];
			$s_id		= $_POST['s_id'];
?>	
    <?php
		
		if($subjgrade >100){
		?>
			<script type="text/javascript">
				alert("Input Grade is not valid!.");
				window.location = "grades_info.php?id=<?php echo $grade_id;?>";
			</script>
<?php		
		}elseif($subjgrade < 70 ){
			
			$subjgrade = 70;

			$query = "UPDATE  `studinfosms`.`grades` SET  `grades` =  '{$subjgrade}' WHERE  `grades`.`grades_id` =" . $grade_id;
			mysql_query($query)or die ('Error in Updating Database');

?>
				<script type="text/javascript">
					alert("Updated Successfully.");
					window.location = "stud_subj_list.php?s_id=<?php echo $s_id;?>";
				</script>			
<?php   }else{
	
			$query = "UPDATE  `studinfosms`.`grades` SET  `grades` =  '{$subjgrade}' WHERE  `grades`.`grades_id` =" . $grade_id;
			mysql_query($query)or die ('Error in Updating Database');

?>
				<script type="text/javascript">
					alert("Updated Successfully.");
					window.location = "stud_subj_list.php?s_id=<?php echo $s_id;?>";
				</script>			
<?php 

		}
	
	?>
    	

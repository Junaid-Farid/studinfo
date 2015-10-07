<?php
	require_once('includes/dbcon.php');
?>

<?php
			$idno = $_POST['idno'];
			$fname = $_POST['s_fullname'];
		    $s_address = $_POST['s_address'];
			$sex = $_POST['sex'];
			$scontact = $_POST['s_contact'];
			$instrct_email= $_POST['instruct_email'];
	
?>	
    <?php

					if ($idno ==''){
					?>
					<script type="text/javascript">
						alert("Id No. Cannot be null!");
						window.location = "edit_instructor.php";
					</script>
					<?php
					}else if($fname==''){
					?>
					<script type="text/javascript">
						alert("Please Provide a name of student!");
						window.location = "edit_instructor.php";
					</script>
					<?php
					}else if($s_address==''){
					?>
					<script type="text/javascript">
						alert("Address Cannot be null!");
						window.location = "edit_instructor.php";
					</script>
                    
                    <?php
					}else if($instrct_email==''){
					?>
					<script type="text/javascript">
						alert("Email Cannot be null!");
						window.location = "edit_instructor.php";
					</script>
                    
                    <?php
					}else if($scontact==''){
					?>
					<script type="text/javascript">
						alert("Contact Cannot be null!");
						window.location = "edit_instructor.php";
					</script>
					
					
					<?php
					}else{
							 	$sql = "UPDATE `instructor` SET 
									`instruc_id` = '{$idno}', `name` = '{$fname}', `address` = '{$s_address}', 
									`sex` = '{$sex}', `email_add` = '{$instrct_email}',
									`s_bplace` = '{$bplace}', `sex` = '{$sex}', 
									`instruct_contact` = '{$scontact}' WHERE `instruc_id`=" .$idno;
							mysql_query($sql)or die ('Error in Updating Database');
						
						
						?>  
						 <script type="text/javascript">
							alert("Updated Successfully");
						    window.location = "student_list.php";
						 </script>
						<?php
					}
	?>
    	
      <?php /*?><a href="main.php"> Return to Index </a></p><?php */?>
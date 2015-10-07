<?php
	require_once('includes/dbcon.php');
?>

<?php
			$idno = $_POST['idno'];
			$fname = $_POST['s_fullname'];
		    $s_address = $_POST['s_address'];
			$s_age = $_POST['s_age'];
			$bday = $_POST['bday'];
			$bplace = $_POST['bplace'];
			$sex = $_POST['sex'];
			$scontact = $_POST['s_contact'];
			$scontact = $_POST['s_contact'];
		    $semail = $_POST['s_email'];
			$course = $_POST['course'];
			$status = $_POST['status'];
			$parents = $_POST['parents'];
			$p_contacts = $_POST['p_contacts'];
			$pemail = $_POST['s_g_email'];
			$p_address = $_POST['p_address'];
			$sy = $_POST['sy'];
			$sem = $_POST['sem'];
			$dept = $_POST['dept'];
			$key= $_POST['key'];
			$yr = $_POST['yr'];
	
?>	
    <?php

					if ($idno ==''){
					?>
					<script type="text/javascript">
						alert("Id No. Cannot be null!");
						window.location = "regedit.php";
					</script>
					<?php
					}elseif($fname==''){
					?>
					<script type="text/javascript">
						alert("Please Provide a name of student!");
						window.location = "regedit.php";
					</script>
					<?php
					}elseif($s_address==''){
					?>
					<script type="text/javascript">
						alert("Address Cannot be null!");
						window.location = "regedit.php";
					</script>
					<?php
					}elseif($s_age==''){
					?>
					<script type="text/javascript">
						alert("Age Cannot be null!");
						window.location = "regedit.php";
					</script>
					<?php
					}elseif($course=='---Select---'){
					?>
					<script type="text/javascript">
						alert("Please Select course.");
						window.location = "regedit.php";
					</script>
					<?php
					}else{
							 	$sql = "UPDATE `student` SET 
									`s_name` = '{$fname}', `s_address` = '{$s_address}', 
									`s_age` = '{$s_age}', `s_bday` = '{$bday}',
									`s_bplace` = '{$bplace}', `sex` = '{$sex}', 
									`s_status` = '{$status}', `s_contact` = '{$scontact}',
									`s_guardian` = '{$parents}', `course_id` = '{$course}', 
									`s_guardian_add` = '{$p_address}', `s_guardian_contact` = '{$p_contacts}',
									`semester` = '{$sem}',`sy` = '{$sy}',`dept_id` = '{$dept}',`yr` ='{$yr}' WHERE `key`=" .$key;
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
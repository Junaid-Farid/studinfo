<?php
	require_once('includes/dbcon.php');
?>
<?php include("includes/functions.php");?>
<?php
			$idno = $_POST['idno'];
			$fname = $_POST['s_fullname'];
		    $s_address = $_POST['s_address'];
			$bday = $_POST['bday'];
			$bplace = $_POST['bplace'];
			$sex = $_POST['sex'];
			$scontact = $_POST['s_contact'];
		    $semail = $_POST['s_email'];
			$spassword = $_POST['s_password'];
			$course = $_POST['course'];
			$status = $_POST['status'];
			$parents = $_POST['parents'];
			$p_contacts = $_POST['p_contacts'];
			$pemail = $_POST['s_g_email'];
			$p_address = $_POST['p_address'];
			$sy = $_POST['sy'];
			$sem = $_POST['sem'];
	
			$yr = $_POST['yr'];
	
?>	
    <?php

					if ($idno ==''){
					?>
					<script type="text/javascript">
						alert("Id No. Cannot be null!");
						window.location = "register.php";
					</script>
					<?php
					}else if($fname==''){
					?>
					<script type="text/javascript">
						alert("Please Provide a name of student!");
						window.location = "register.php";
					</script>
					<?php
					}else if($s_address==''){
					?>
					<script type="text/javascript">
						alert("Address Cannot be null!");
						window.location = "register.php";
					</script>
					<?php
					
					
					}else{
					
					$query = "Select s_id from student where s_id = '".$idno."' ";
					$result = mysql_query($query);
					confirm_query($result);
					$numrows = mysql_num_rows($result);
					
					if ($numrows == 1){
					?>
					<script type="text/javascript">
						alert("Id No. already exist!");
						window.location = "register.php";
					</script>
					<?php
					}
				     	$query = "INSERT INTO student
								(s_id, s_name, s_address, s_bday, s_bplace, sex, s_status, s_contact, s_email, s_password, s_guardian, course_id, s_guardian_add, s_guardian_contact, s_g_email, sy,semester, yr)
							VALUES ('".$idno."','".$fname."','".$s_address."','".$bday."','".$bplace."',
								'".$sex."','".$status."','".$scontact."','".$semail."','".$spassword."','".$parents."','".$course."',
								'".$p_address."','".$p_contacts."','".$pemail."','".$sy."','".$sem."','".$yr."')";
						$result = mysql_query($query);
						confirm_query($result);
						 
						
						?> 
						 <script type="text/javascript">
							alert("Successfully added.");
						    window.location = "register.php";
						 </script>
						<?php
					}
	?>
    	
      <?php /*?><a href="main.php"> Return to Index </a></p><?php */?>
<?php
	require_once('includes/dbcon.php');
?>
<?php include("includes/functions.php");?>
<?php
			$idno = $_POST['idno'];
			$fname = $_POST['s_fullname'];
		    $s_address = $_POST['s_address'];
			$sex = $_POST['sex'];
			$scontact = $_POST['s_contact'];
			$semail = $_POST['p_email'];
			$spassword = $_POST['p_password'];
	
?>	
    <?php

					if ($idno ==''){
					?>
					<script type="text/javascript">
						alert("Id No. Cannot be null!");
						window.location = "add_instructor.php";
					</script>
					<?php
					}else if($fname==''){
					?>
					<script type="text/javascript">
						alert("Please Provide a name of student!");
						window.location = "add_instructor.php";
					</script>
					<?php
					}else if($s_address==''){
					?>
					<script type="text/javascript">
						alert("Address Cannot be null!");
						window.location = "add_instructor.php";
					</script>
					
					<?php
					
					}else{
					
					$query = "Select instruc_id from instructor where instruc_id = '".$idno."' ";
					$result = mysql_query($query);
					confirm_query($result);
					$numrows = mysql_num_rows($result);
					
					if ($numrows == 1){
					?>
					<script type="text/javascript">
						alert("Id No. already exist!");
						window.location = "add_student.php";
					</script>
					<?php
					}
				     	$query = "INSERT INTO instructor
								(instruc_id, name, address,sex, instruct_contact,
								email_add, instruct_password)
							VALUES ('".$idno."','".$fname."','".$s_address."',
								'".$sex."','".$scontact."','".$semail."','".$spassword."')";
						$result = mysql_query($query);
						confirm_query($result);
						 
						
						?> 
						 <script type="text/javascript">
							alert("Successfully added.");
						    window.location = "add_instructor.php";
						 </script>
						<?php
					}
	?>
    	
      <?php /*?><a href="main.php"> Return to Index </a></p><?php */?>
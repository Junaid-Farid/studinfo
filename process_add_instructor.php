<?php
	require_once('includes/dbcon.php');
?>
<script type="text/javascript" src="javascripts/gen_validatorv4.js"></script>

<?php include("includes/functions.php");
 			
			
			$dept 	= $_POST['dept_list'];
			$idno = $_POST['idno'];
			$fname = $_POST['s_fullname'];
		    $s_address = $_POST['s_address'];
			$sex = $_POST['sex'];
			$scontact = $_POST['s_contact'];
			$semail = $_POST['p_email'];
			$spassword = $_POST['p_password'];


			$query = "Select instruc_id from instructor where instruc_id = '".$idno."' ";
					$result = mysql_query($query);
					confirm_query($result);
					$numrows = mysql_num_rows($result);
					
					if ($numrows == 1){
					?>
					<script type="text/javascript">
						alert("Id No. already exist!");
						window.location = "add_instructor.php";
					</script>
					<?php
					}
					$query = "Select instruct_contact from instructor where instruct_contact = '".$scontact."' ";
					$result = mysql_query($query);
					confirm_query($result);
					$numrows = mysql_num_rows($result);
					if($numrows == 1)
					{
						?>
					<script type="text/javascript">
						alert("Contact No. already exist!");
						window.location = "add_instructor.php";
					</script>
					<?php
					}
					$query = "Select email_add from instructor where email_add = '".$semail."' ";
					$result = mysql_query($query);
					confirm_query($result);
					$numrows = mysql_num_rows($result);
					if($numrows == 1)
					{
						?>
					<script type="text/javascript">
						alert("Email No. already exist!");
						window.location = "add_instructor.php";
					</script>
					<?php }
					else
					{
			
				
					
					
						$query = "INSERT INTO instructor
								(instruc_id, name, address,sex, instruct_contact,
								email_add, instruct_password, dept_id)
							VALUES ('".$idno."','".$fname."','".$s_address."',
								'".$sex."','".$scontact."','".$semail."','".$spassword."','".$dept."')";
						
							$result = mysql_query($query);
						
							confirm_query($result);
						 
						
						?> 
						 <script type="text/javascript">
							alert("Successfully added.");
						    window.location = "add_instructor.php";
						 </script>
				<?php }?>
	
    	
      <?php /*?><a href="main.php"> Return to Index </a></p><?php */?>
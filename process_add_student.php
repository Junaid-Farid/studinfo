<?php
	require_once('includes/dbcon.php');
   include("includes/functions.php");
			$idno = $_POST['idno'];
			$fname = $_POST['s_fullname'];
		    $s_address = $_POST['s_address'];
			$bday = $_POST['bday'];
			$bplace = $_POST['bplace'];
			$sex = $_POST['sex'];
			$scontact = $_POST['s_contact'];
			$email  = $_POST['st_email'];
			$gemail  = $_POST['st_g_email'];
		
			$course = $_POST['course'];
			$status = $_POST['status'];
			$parents = $_POST['parents'];
			$p_contacts = $_POST['p_contacts'];
			$p_address = $_POST['p_address'];
			//$sy = $_POST['sy'];
			$sem = $_POST['sem'];
	
			$yr = $_POST['yr'];
	

					
					
					$query = "Select s_id from student where s_id = '".$idno."' ";
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
					$query = "Select s_contact from student where s_contact = '".$scontact."' ";
					$result = mysql_query($query);
					confirm_query($result);
					$numrows = mysql_num_rows($result);
					
					if ($numrows == 1){
					?>
					<script type="text/javascript">
						alert("Contact already exist!");
						window.location = "add_student.php";
					</script>
					<?php
					}
					$query = "Select s_email from student where s_email = '".$email."' ";
					$result = mysql_query($query);
					confirm_query($result);
					$numrows = mysql_num_rows($result);
					
					if ($numrows == 1){
					?>
					<script type="text/javascript">
						alert("Email already exist!");
						window.location = "add_student.php";
					</script>
					<?php
					}
					else
					{
					
					
					
				     	$query = "INSERT INTO student
								(s_id,s_name, s_address, s_bday, s_bplace,sex,s_status,s_contact,
								s_guardian,course_id,s_guardian_add,s_guardian_contact,semester,yr, s_g_email, s_email)   
							VALUES ('".$idno."','".$fname."','".$s_address."','".$bday."','".$bplace."',
								'".$sex."','".$status."','".$scontact."','".$parents."','".$course."',
								'".$p_address."','".$p_contacts."','".$sem."','".$yr."','".$gemail."','".$email."')";
						$result = mysql_query($query);
						confirm_query($result);
						 
						
						?> 
						 <script type="text/javascript">
							alert("Successfully added.");
						    //window.location = "add_student.php";
						 </script>
						<?php
					}
	?>
    	
      <?php /*?><a href="main.php"> Return to Index </a></p><?php */?>
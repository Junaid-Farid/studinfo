<?php 

function check($idno, $scontact, $semail)
			{
				$sql = 'SELECT instruc_id, instruct_contact, email_add FROM instructor';
				$result = mysql_query($sql);
				confirm_query($result);
				while ($row = mysql_fetch_array($result))
					{
						if($idno == $row['instruc_id'] )
						{ ?>
							<script type="text/javascript">
							 alert("ID already Exist!");
							 window.location("add_instructor.php");
							 </script>
						 <?php
						}
						else if($scontact == $row['instruct_contact'])
						{
							?>
							<script type="text/javascript">
							 alert("Contact already Exist!");
							 window.location("add_instructor.php");
							 </script>
						 <?php
						}
						else if($semail == $row['email_add'])
						{
							?>
							<script type="text/javascript">
							 alert("Email already Exist!");
							 window.location("add_instructor.php");
							 </script>
						 <?php
						}
					}
					return true;
				}
?>
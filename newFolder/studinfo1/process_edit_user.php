<?php include("includes/dbcon.php");?>
<?php include("includes/functions.php");?>
<?php

		
		$id 		= trim($_POST['id']);
		$name		= trim($_POST['user_name']);
		$username	= trim($_POST['uname']);
		$pass		= trim($_POST['upass']);
		$type		= trim($_POST['utype']);
		$h_upass = sha1($pass);
		
 		$query = "UPDATE users set users_name = '{$name}', uname = '{$username}', u_pass = '{$h_upass}', utype = '{$type}' where user_id = ". $id;
        $result = mysql_query($query);
        confirm_query($result);
		?>
			  	
			<script type="text/javascript">
				alert("User successfully updated!");
				window.location = "user_list.php";
			</script>
	
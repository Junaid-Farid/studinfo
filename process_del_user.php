<?php include("includes/session.php");?>
<?php include("includes/dbcon.php");?>
<?php include("includes/functions.php");?>
<?php
		$user_id = $_GET['id'];
		if($_SESSION['user_id'] != $user_id){
				$query = "Delete from users where user_id = ".$user_id;
				$result = mysql_query($query);
				confirm_query($result);
			?>   
					<script type="text/javascript">
						alert("User Successfully deleted!");
						window.location = "user_list.php";
					</script>
		<?php
		
		}else{
		?>
					<script type="text/javascript">
						alert("User account currently in used!");
						window.location = "user_list.php";
					</script>

<?php
		}
?>
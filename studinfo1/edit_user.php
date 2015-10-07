<?php require_once("includes/session.php");?>
<?php require_once("includes/functions.php");?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/dbcon.php");?>
<?php include("includes/header.php");?>

<div id="menubar">

</script>
	<?php include("menus.php");?>
	</div>

<div id="module-name">Edit User

</div>
<?php
	$user_id = $_GET['id'];
	
	$sql = 'Select * from users where user_id = '. $user_id;
	$result = mysql_query($sql);
	confirm_query($result);
	while($row = mysql_fetch_array($result)){
		$id 	= $row['user_id'];
		$name 	= $row['users_name'];
		$uname	= $row['uname'];
		
	}
	
?>

<div id="content">

<form  method="post" action="process_edit_user.php">


<table class="app_table">
	<tr>
		<th> <div class="_title">Details</div></th>
	</tr>
	<tr>
		<td class="form">
			<table width="50%">
				<tr>
				   <td class="_label">Name :: </td>
				  <td>
					 <input type="text" name="user_name" id="user_name"  class="txtbox" value = "<?php echo $name;?>"/>
					</td>
				</tr>				
				<tr>
				   <td class="_label">Username :: </td>
				  <td>
					 <input type="text" name="uname" id="uname"  class="txtbox" value = "<?php echo $uname;?>"/>
					</td>
				</tr>
				<tr>
				   <td class="_label">Password :: </td>
				  <td>
					 <input type="password" name="upass" id="upass"  class="txtbox" />
					</td>
				</tr>
				<tr>
				   <td class="_label">User Type :: </td>
				  <td>
					 <select name="utype" id="utype" >
					  <option value="Administrator">Administrator</option>
					  <option value="Registrar">Registrar</option>
					  <option value="Teacher">Teacher</option>
					  <option value="SSG">SSG</option>
					 
				  </select>
					</td>
				</tr>		
				  <tr>
					<td><input type="hidden" name="id" id="id"  class="txtbox" value = <?php echo $id?> /></td>
					<td>
					
					  <input type="submit" name="submit" value="Save" />
				   </td>
				  </tr>
				  	  
				
			</table>	
		</tr>		
</table>
</form>

<?php include("includes/footer.php");?>

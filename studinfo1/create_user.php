<?php require_once("includes/session.php");?>
<?php require_once("includes/functions.php");?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/dbcon.php");?>
<?php include("includes/header.php");?>

<div id="menubar">

</script>
	<?php include("menus.php");?>
	</div>

<div id="module-name">New User

</div>
<?php
	if (isset($_POST['submit'])){
		//form has been submitted1
		$name	= trim($_POST['user_name']);
		$uname	= trim($_POST['uname']);
		$upass	= trim($_POST['upass']);
		$utype	= trim($_POST['utype']);
		
		if($name == ''){
			echo 'Name is not Valid!';
			exit;
		}elseif($uname == ''){	
			echo 'Username is not Valid!';
			exit;
		}elseif($upass == ''){	
			echo 'Password is not Valid!';
			exit;
		
		}else{
			$h_upass = sha1($upass);
			$sql = "INSERT INTO users(users_name, uname, u_pass, utype)
								values('{$name}','{$uname}', '{$h_upass}', '{$utype}')";
			$result = mysql_query($sql);
			confirm_query($result);
		}	
	}else{
		$name	= "";
		$uname	= "";
		$upass	= "";
		$utype	= "";
	}

?>

<div id="content">

<form  method="post" action="create_user.php">


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
					 <input type="text" name="user_name" id="user_name"  class="txtbox" />
					</td>
				</tr>				
				<tr>
				   <td class="_label">Username :: </td>
				  <td>
					 <input type="text" name="uname" id="uname"  class="txtbox" />
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
					<td></td>
					<td>
					  <input type="submit" name="submit" value="Save" />
				   </td>
				  </tr>
				  	  
				
			</table>	
		</tr>		
</table>
</form>

<?php include("includes/footer.php");?>

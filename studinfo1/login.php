<?php require_once("includes/session.php");?>
<?php require_once("includes/functions.php");?>
<?php require_once("includes/dbcon.php");?>
<?php include("includes/login_header.php");?>
<?php 
	if (logged_in()){?>
		<script type="text/javascript">
				window.location = "index.php";
		</script>
<?php
	}

?>
<div id="module-name"></div>

<div id="content">

<div style="width: 500px; margin: 10px auto;">
<?php
	if (isset($_POST['submit'])){
		//form has been submitted1
		
		$uname	= trim($_POST['uname']);
		$upass	= trim($_POST['upass']);
		//$utype	= trim($_POST['utpye']);
		$h_upass = sha1($upass);
		if($uname == ''){	
			echo 'Username or Password Not Registered! Contact Your administrator...';
		}elseif($upass == ''){	
			echo 'Username or Password Not Registered! Contact Your administrator...';
		
		}else{
			
			
			$sql = "SELECT * FROM `users` WHERE `uname`='". $uname ."' and `u_pass`='". $h_upass ."'";
			$result = mysql_query($sql) or die;
			$numrows = mysql_num_rows($result);
			if ($numrows == 1){
				$found_user = mysql_fetch_array($result);
				$_SESSION['user_id'] = $found_user['user_id'];
				$_SESSION['username'] = $found_user['users_name'];
				$_SESSION['usersname'] = $found_user['uname'];
				$_SESSION['userpass'] = $found_user['u_pass'];
				$_SESSION['usertype'] = $found_user['utype'];
		?>	<script type="text/javascript">
				alert("Welcome! <?php echo $_SESSION['username'];?> your are successfully logged in.");
				window.location = "index.php";
			</script>
		<?php

				
			}else{
				echo 'Username or Password Not Registered! Contact Your administrator...';
			
			}
				
		}	
	}else{
		
		$uname	= "";
		$upass	= "";
		$utype	= "";
	}

?>
<form id="form4" name="form4" method="post" action="login.php">


<table class="app_table">

	<tr>
		<th> <div class="_title">Welcome Users::</div></th>
	</tr>
	<tr>
		<td class="form">
			<table width="100%">
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
					   <td align="Right">
						<td>
							<input type="submit" name="submit" id="seacrh" value="Log in"/>
							
						</td>
					   </td>
				  </tr>
				  
				
			</table>	
		</td>
	</tr>		
</table>

</div>
</form>


	</table>

<?php include("includes/footer.php");?>
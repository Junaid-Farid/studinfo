<?php require_once("includes/session.php");?>
<?php require_once("includes/functions.php");?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/dbcon.php");?>
<?php include("includes/header.php");?>
<!--for checking if already exit---->
<script type="text/javascript" src="javascripts/jquery.min.js"></script>
<script type="text/javascript">
			$(document).ready(function(){
			$("#uname").keyup(function() {
				var uname = $('#uname').val();
				if(uname=="")
				{
					$("#disp").html("");
				}
				else
				{
					$.ajax({
					type: "POST",
					url: "validate_user.php",
					data: "uname="+ uname ,
					success: function(html){
						$("#disp").html(html);
					}
				});
				return false;
				}
				});
			})

</script>

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

<form  method="post" action="create_user.php" name="user" id="user">


<table class="app_table">
	<tr>
		<th> <div class="_title">Details</div></th>
	</tr>
	<tr>
		<td class="form">
			<table width="89%">
				<tr>
				   <td width="159" class="_label">Name :: </td>
				  <td width="69%">
					 <input type="text" name="user_name" id="user_name"  class="txtbox" placeholder="Name" onblur="return allLetter();"/>
					</td>
				</tr>				
				<tr>
				   <td class="_label">Email :: </td>
				  <td>
					 <input type="text" name="uname" id="uname"  class="txtbox" placeholder="Enter your email" onblur="return ValidateEmail();"/><span><div id="disp"></div></span>
					</td>
				</tr>
				<tr>
				   <td class="_label">Password :: </td>
				  <td>
					 <input type="password" name="upass" id="upass"  class="txtbox" placeholder="Enter your password" onblur="return passid_validation(5, 9);" />
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
<script language="JavaScript" type="text/javascript">
// This function will validate Name.  
  function allLetter()  
  {   
	  var uname = document.user.user_name; 
	  if(uname.value == "") 
	  {
		alert("Name cannot be empty!");  
	  	uname.focus();
		return false;
	  }
	  
	  else
	  {	
			  var letters = /^[a-zA-Z ]*$/; 
		  if(uname.value.match(letters))  
		  {  
			  // Focus goes to next field i.e. Address.
			    
			  document.user.uname.focus();  
			  return true;  
		  }  
		  else  
		  {  
			  alert('Username must have alphabet characters only');  
			  uname.focus();  
			  return false;  
		  }
	  }
  }
  
   // This function will validate Email.  
  function ValidateEmail()  
  {  
	  var uemail = document.user.uname; 
	  
	  if(uemail.value=="")
	  {
		alert("Email cann't be empty!");  
		uemail.focus();
		return false;
	  }
	   
	  else
	  {
		  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
		  if(uemail.value.match(mailformat))  
		  {  
		  	 
			  	
			  document.user.upass.focus(); 
			  return true;  
		  }  
		  else  
		  {  
			  alert("You have entered an invalid email address!");  
			  uemail.focus();  
			  return false;  
		  } 
	  }
  }  
  
  // This function will validate Password.  
  function passid_validation(mx,my)  
  {  
	  var passid = document.user.upass;  
	  var passid_len = passid.value.length;  
	  if (passid_len == 0 ||passid_len >= my || passid_len < mx)  
	  {  
		  alert("Password should not be empty / length be between "+mx+" to "+my);  
		  passid.focus();  
		  return false;  
	  }  
		  // Focus goes to next field i.e. Name.  
		  document.document.user.utype.focus();  
		  return true;  
  }  
  
 
  
 </script>

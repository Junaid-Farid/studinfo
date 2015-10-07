<?php
 include("header.php");
 require_once("includes/session.php");
 require_once("includes/functions.php");
 require_once("includes/dbcon.php");

 include("slider.php"); ?>
<?php
$message = "";
	if (isset($_POST['btnLogin'])){
		//form has been submitted1
		
		
		$uname	= trim($_POST['txtLoginEmail']);
		$upass	= trim($_POST['txtLoginPassword']);
		//$utype	= trim($_POST['utpye']);
		$h_upass = sha1($upass);
		if($uname == ''){	
			$message = 'Username or Password Not Registered! Contact Your administrator...';
		}elseif($upass == ''){	
			$message ='Username or Password Not Registered! Contact Your administrator...';
		
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
				document.location.href = '../index.php';
                </script>
                
                
		<?php

				
			}else{
				$message = 'Username or Password Not Registered! Contact Your administrator...';
			
			}
				
		}	
	}else{
		
		$uname	= "";
		$upass	= "";
		$utype	= "";
	}
	//end admin login
 ?>
<?php //user login
$userMessage = "";
	if (isset($_POST['btnUserLogin'])){
		//form has been submitted1
		
		
		$uname	= trim($_POST['txtUserLoginEmail']);
		$upass	= trim($_POST['txtUserPassword']);
		//$utype	= trim($_POST['utpye']);
		//$h_upass = sha1($upass);
		if($uname == ''){	
			$userMessage = 'Username or Password Not Registered! Contact Your administrator...';
		}elseif($upass == ''){	
			$userMessage ='Username or Password Not Registered! Contact Your administrator...';
		
		}else{
			
			$sql = "SELECT * FROM `student` WHERE `s_email`='". $uname ."' and `s_password`='". $upass ."'";
			
			
			
			$result = mysql_query($sql) or die;
			$numrows = mysql_num_rows($result);
			if ($numrows == 1){
				$found_user = mysql_fetch_array($result);
				$_SESSION['std_id'] = $found_user['s_id'];
				$std_ID = $_SESSION['std_id'];
				$_SESSION['std_name'] = $found_user['s_name'];
				$_SESSION['std_email'] = $found_user['s_email'];
				$_SESSION['std_password'] = $found_user['s_password'];
		?>	<script type="text/javascript">          			
				document.location.href = 'profile.php';
                </script>
                
                
		<?php

				
			}else{
				$userMessage = 'Username or Password Not Registered! Contact Your administrator...';
			
			}
				
		}	
	}else{
		
		$uname	= "";
		$upass	= "";
		$utype	= "";
	}
	
	//end user login
 ?>
		<style>
/*---loging form --*/
.login{
  text-align:center;
  margin-bottom:100px;
  margin-right:60px;
  margin-top:100px;
  margin-left:120px;
  position:relative;
  width:300px;
  display: inline-block;
  
  
}

.login  input[type="text"], input[type="password"]{
	resize:none;
        font-size:1.1em;
        font-weight: 600;
        padding:0.6em 1em;

      

}
.login input[type="submit"]{
	background:#e21737;
	color:#fff;
	font-size:1.1em;
	border:none;
	outline:none;
	font-weight: 600;
	padding:0.6em 1em;
	transition: 0.5s all;
	-webkit-transition: 0.5s all;
	-moz-transition: 0.5s all;
	-o-transition: 0.5s all;
     margin-right:12px
}
.login input[type="submit"]:hover{
	background:#0b648f;
	border: 1px solid;
}

  </style>

<div class="login">
<span style="color:#FF0000" ><?php echo $message; ?></span>
<form id="loginFrmm" name="loginFrm" method="post" enctype="multipart/form-data">
                <h2>Admin Login                </h2>
                <p>&nbsp;</p>
    <p>
                  <input type="text" placeholder="Enter Your Email" id="txtLoginEmail" name="txtLoginEmail">
                </p>
                <p><br/>
                  <input type="password" placeholder="Enter Your Password"id="txtLoginPassword" name="txtLoginPassword">
                </p>
    <p>&nbsp;</p>
                <p>
                  <input type="submit" name="btnLogin" id="btnLogin" value="Login" />
    </p>
</form>
</div>
<div class="login">
<span style="color:#FF0000"> <?php echo $userMessage; ?></span>
<form id="loginUserFrmm" name="loginFrm" method="post" enctype="multipart/form-data">
                <h2>User Login                </h2>
                <p>&nbsp;</p>
    <p>
                  <input type="text" placeholder="Enter Your Email" id="txtUserLoginEmail" name="txtUserLoginEmail">
                </p>
                <p><br/>
                  <input type="password" placeholder="Enter Your Password"id="txtUserPassword" name="txtUserPassword">
                </p>
                <p>&nbsp;</p>
                <p>
                  <input type="submit" name="btnUserLogin" id="btnUserLogin" value="Login" onclick="return validateme();"/>
    </p>
</form>
</div>


<script language="JavaScript" type="text/javascript"
    xml:space="preserve">//<![CDATA[
//You should create the validator only after the definition of the HTML form
  var frmvalidator  = new Validator("loginFrmm");
  
  frmvalidator.addValidation("txtLoginEmail","maxlen=50", "Please Enter your email");
  frmvalidator.addValidation("txtLoginEmail","req", "Please Enter your email");
  frmvalidator.addValidation("txtLoginEmail","email", "Please Enter your valid email");
  
  frmvalidator.addValidation("txtLoginPassword","req","Please enter your passwore");
  frmvalidator.addValidation("txtLoginPassword","maxlen=20",	"Max length for passwore is 20");
  frmvalidator.addValidation("txtLoginPassword","alpha","Alphabetic chars only");
  
 
//]]></script>

<?php include("footer.php");?>
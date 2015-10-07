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
				header("location:index.php");
		?>	
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


       <!-- CSS -->
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
        <link rel="stylesheet" href="assets/css/reset.css">
        <link rel="stylesheet" href="assets/css/supersized.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <style>
        	#loginForm input[type="text"], input[type="password"], input[type="submit"]{
				width:270px;
				height:44px;
				font-size:17px;
				letter-spacing:1px;
				
			}
			#loginForm button{
				width:300px;
				height:44px;
				font-size:16px;
				font-weight:bold;
				letter-spacing:1px;
			}
        </style>

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

          <div class="page-container">
            <h1>Login</h1>
            <form id="loginForm" name="loginForm" method="post" action="login.php">
                <input type="text" name="uname" class="username" placeholder="Enter Your Username">
                <input type="password" name="upass" class="password" placeholder="Enter Your Password">
                <button type="submit" name="submit" id="seacrh">Sign me in</button>
                <div class="error"><span>+</span></div>
            </form>
            <div class="connect">
                <p></p>
                <p>
                    <a class="#" href=""></a>
                    <a class="#" href=""></a>
                </p>
            </div>
        </div>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.8.2.min.js"></script>
        <script src="assets/js/supersized.3.2.7.min.js"></script>
        <script src="assets/js/supersized-init.js"></script>
        <script src="assets/js/scripts.js"></script>

   



<?php include("includes/footer.php");?>
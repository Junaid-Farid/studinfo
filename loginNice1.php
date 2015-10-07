<?php require_once("includes/session.php");?>
<?php require_once("includes/functions.php");?>
<?php require_once("includes/dbcon.php");?>
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

<html lang="en" class="no-js">

    <head>

        <meta charset="utf-8">
        <title>Fullscreen Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
        <link rel="stylesheet" href="assets/css/reset.css">
        <link rel="stylesheet" href="assets/css/supersized.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    </head>

    <body>

        <div class="page-container">
            <h1>Login</h1>
            <form id="form4" name="form4" method="post" action="loginNice1.php">
                <input type="text" name="uname"  id="uname" class="username" placeholder="Username">
                <input type="password" name="upass" id="upass" class="password" placeholder="Password">
                <button type="submit">Sign me in</button>
                <div class="error"><span>+</span></div>
            </form>
            <div class="connect">
                <p>Or connect with:</p>
                <p>
                    <a class="facebook" href=""></a>
                    <a class="twitter" href=""></a>
                </p>
            </div>
        </div>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.8.2.min.js"></script>
        <script src="assets/js/supersized.3.2.7.min.js"></script>
        <script src="assets/js/supersized-init.js"></script>
        <script src="assets/js/scripts.js"></script>

    </body>

</html>


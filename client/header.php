<?php require_once("includes/session.php");?>
<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Swift Info </title>
<!----facebook comment box link --->
<meta property="fb:admins" content="{YOUR_FACEBOOK_USER_ID}"/>

<!----end facebook comment box link --->



<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="jquery/jquery.js"></script>
<script src="js/jquery.min.js"></script>
<script src="jquery/readmore.js"></script>
<script src="js/gen_validatorv.js" type="text/javascript"></script></script>









<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Edification Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Viga' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,700,900,100' rel='stylesheet' type='text/css'>
<!--//fonts-->
<!--login link-->
<style>
#loginLogout{
	margin-left:auto;
	margin-right:auto;
	float:right;
	
	}
#loginLogout a{
	border:none;
	margin:6px;
	}


</style>


<!---->
 

</head>
<body>
<!--header-->
	<div class="header">
		<div class="container">
			<div class="header-top">
				
				<div class="logo">
					<h1><a href="index.php"><span>S</span>wift Info</a></h1>
				
				</div>
                <div id="loginLogout">
                <a class="hvr-shutter-in-horizontal" href="auto_search.php" >Search Activity</a>
                <?php if(isset($_SESSION['std_email']))
				{?>
                <a class="hvr-shutter-in-horizontal" href="profile.php" >Profile</a><a class="hvr-shutter-in-horizontal" href="logout.php" >Logout</a> </div>
                <?php }
				else
				{?>
				<a class="hvr-shutter-in-horizontal" href="login.php" >Login</a><a class="hvr-shutter-in-horizontal" href="register.php" >Register</a> </div>
                <?php }?>
				<div class="clearfix"> </div>
		</div>
			<?php $current_page = basename($_SERVER['PHP_SELF']); ?>
				<div class="top-nav">
					<span class="menu"><img src="images/menu.png" alt=" "/> </span>
					<ul>
						
                        <li class="<?php if ($current_page == "index.php"){ echo "active "; }?>"><a href="index.php">Home</a></li>
						
                        <li class="<?php if ($current_page == "about.php"){ echo "active "; }?>"><a href="about.php">About</a></li>
                        <li class="<?php if ($current_page == "client_notice_list.php"){ echo "active "; }?>"><a href="client_notice_list.php">Notice</a></li>
                        <li class="<?php if ($current_page == "gallery.php"){ echo "active "; }?>"><a href="gallery.php">Gallery</a></li>	
                        <li class="<?php if ($current_page == "contact.php"){ echo "active "; }?>"><a href="contact.php">Contact</a></li>
					<div class="clearfix"> </div>
					</ul>	
				<script>
					$("span.menu").click(function(){
						$(".top-nav ul").slideToggle(500, function(){
						});
					});
				</script>
					
						
			</div>
		</div>
		</div>

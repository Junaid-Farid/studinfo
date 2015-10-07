<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Edification A Education</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="jquery/jquery.js"></script>
<script src="js/jquery.min.js"></script>
<script src="jquery/readmore.js"></script>


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
	margin-left:960px;
	
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
                <div id="loginLogout"><a class="hvr-shutter-in-horizontal" href="login.php" >Login</a><a class="hvr-shutter-in-horizontal" href="#" >Register</a> </div>
				<div class="search">
					<form>
						<input type="text" value="Search " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
						<input type="submit" value="">
					</form>
			</div>
				<div class="clearfix"> </div>
		</div>
			<?php $current_page = basename($_SERVER['PHP_SELF']); ?>
				<div class="top-nav">
					<span class="menu"><img src="images/menu.png" alt=" "/> </span>
					<ul>
						
                        <li class="<?php if ($current_page == "index.php"){ echo "active "; }?>"><a href="index.php">Home</a></li>
						
                        <li class="<?php if ($current_page == "about.php"){ echo "active "; }?>"><a href="about.php">About</a></li>
                        <li class="<?php if ($current_page == "services.php"){ echo "active "; }?>"><a href="services.php">Services</a></li>
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

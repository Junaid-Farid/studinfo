<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Flat Nav</title>

<style>
nav ul {
	list-style: none; overflow: hidden; position: relative;
}
	nav ul li {
		float: left; margin: 0 20px 0 0;
	}
		nav ul li a {
			display: block; width: 120px; height: 120px;
			background-image: url(icons.png); background-repeat: no-repeat;
		}
			nav ul li:nth-child(1) a {
				background-color: #5bb2fc;
				background-position: 28px 28px;
			}
			nav ul li:nth-child(2) a {
				background-color: #58ebd3;
				background-position: 28px -96px;
			}
			nav ul li:nth-child(3) a {
				background-color: #ffa659;
				background-position: 28px -222px;
			}
			nav ul li:nth-child(4) a {
				background-color: #ff7a85;
				background-position: 28px -342px;
			}
		
				nav ul li a span {
					font: 50px "Dosis", sans-serif; text-transform: uppercase; 
					position: absolute; left: 580px; top: 29px;
					display: none;
				}
					nav ul li a:hover span {
						display: block;
					}
				
				nav ul li:nth-child(1) a span {
					color: #5bb2fc;
				}
				nav ul li:nth-child(2) a span {
					color: #58ebd3;
				}
				nav ul li:nth-child(3) a span {
					color: #ffa659;
				}
				nav ul li:nth-child(4) a span {
					color: #ff7a85;
				}
					
</style>

<link href='http://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>

</head>
<body>

<div id="demo">
	<nav>
		<ul>
			<li>
				<a href="#">
					<span>Home</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span>About</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span>Portfolio</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span>Contact</span>
				</a>
			</li>
			
		</ul>
	</nav>
</div>

</body>
</html>
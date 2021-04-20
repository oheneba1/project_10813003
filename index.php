<?php 
session_start();

include("connection.php");
include("function.php");

$user_data = check_login($con);


 ?>
 <!DOCTYPE html>
<head>

	<style type="text/css" media="screen">
		
	*{
	margin: 0;
	padding: 0;
	font-family: sans-serif;
}
.hero{
	height: 100vh;
	background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url(images/andy3.jpg);
	background-position: center;
	background-size: cover;
	overflow-x: hidden;
	position: relative;
}
.nav-bar{
	display: flex;
	padding: 40px 60px;
	background-color: black;
	margin: 0px;
	padding: 15px;
	position: relative;
	width: 100%;
}
.logo{
	width: 80px;
	padding:0px;
	margin: 0px;
}
.nav-links{
	flex: 1;
}
.nav-links ul{
	margin-left: 24px;
	display: inline;
}
.nav-links ul li{
	list-style: none;
	display: inline-block;
	padding: 8px 25px;
}
.nav-links ul a{
	color: #fff;
	text-decoration: none;
	font-size: 13px;
}
.nav-links ul li::after{
	content: '';
	width: 0;
	height: 2px;
	background: yellow;
	display: block;
	margin: auto;
	transition: 0.5s;
}
.nav-links ul li:hover::after{
	width: 100%;
}

.nav-links .btn{
	float: right;
	padding: 8px 25px;
	border: 0;
	color: white;
	cursor: pointer;
	list-style: none;
	margin-right: 50px;
	text-decoration: none;
	font-size: 13px;
}
.nav-links .btn::after{
	content: '';
	width: 0;
	height: 2px;
	background: yellow;
	display: block;
	margin: auto;
	transition: 0.5s;
}
.nav-links .btn:hover::after{
	width: 100%;
}

.banner-title{
	margin: 150px 50px;
	color: white;
}
.banner-title h1{
	font-size: 64px;
	margin-bottom: 50px;
}
.banner-title h1 span{
	color: orange;
}

.contents{
	flex-basis: 50%;
	padding: 20px;
}
.contents a{
	text-decoration: none;
	color: #000;
	font-size: 13px;
	margin: 0 10px;
}
.contents p{
	text-align: right;
	margin-top: 10px;
}

@media (max-width: 700px){
	.banner-title{
		margin: 80px 40px;
	}
	.banner-title h1{
		font-size: 50px;
	}
	.nav-bar{
		padding: 10px 30px;
	}
	.nav-links{
		height: 100vh;
		width: 200px;
		background: #000;
		top: 0;
		right: -200px;
		position: absolute;
		text-align: left;
		z-index: 2;
		transition: 0.5s;
	}
	.nav-links ul a{
		display: block;
	}
	.nav-links .btn{
		float: none;
		margin-left: 25px;
		margin-top: 10px;
	}
}
#images img{
	width: 100px;
	height: 100px;
	display: inline-block;
	border-radius: 5px;
	float: right;
	padding: 5px;
	position: relative;
	border-radius: 10px;
}
.banner-image{
	text-align: center;
	padding: 30px;
	margin: 10px;
}

	</style>
	<title>WELCOME</title>
	<meta name="viewport" content="width=device-width,initial-scale=1" http-equiv="X-UA-Compatible" content="IE=Edge">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,900&display=swap" rel="stylesheet">

</head>
<body>
				
	<div class="hero">
	<div class="nav-bar">
			<div class="nav-links" id="nav-links">
		<ul>
			<a href="#"><li>HOME</li></a>
			<a href="#about"><li>ABOUT</li></a>
			<a href="tel:0554309541"><li>CONTACT</li></a>
			<a href="#"><li>SUPPORT</li></a>
		</ul>
		<a href="logout.php" class="btn">
		LOG OUT
		</a><br>
	</div>
	</div>
<img src="images/TICXIS1.png" style="text-align: center; padding: 10px;float: right; margin-right: 15px;">
	<div class="banner-title">
		
		<h1 style="font-family: 'Merriweather', serif;font-size: 60px; ">Hi <?php echo $user_data['username']; ?>,</h1>
		<h1>Best <span>Quality Pictures <br></span>for your designs and wallpapers</h1>
		<!--<button type="button" class="btn">EXPLORE</button>-->
		<!--<a href="logout.php">
			<button class="btn">LOG OUT</button>
		</a><br>-->
	</div>
	<div class="banner-image">
		<img src="images/andy1.jpg" style="margin: auto; text-align: center">
		<img src="images/pic31.jpg" style="display: inline-flex;">
		<img src="images/andy4.jpg">
	</div>
	<div style="padding: 10px; margin: 5px; text-align: center">
		<img src="images/pic1.jpg">
		<img src="images/pic2.jpg">
		<img src="images/pic3.jpg">
		<img src="images/pic4.jpg">
		<img src="images/pic5.jpg">
		<img src="images/pic6.jpg">
		<img src="images/pic7.jpg">
		<img src="images/pic8.jpg">
		<img src="images/pic9.jpg">
		<img src="images/pic10.jpg">
		<img src="images/pic11.jpg">
		<img src="images/pic12.jpg">
		<img src="images/pic13.jpg">
		<img src="images/pic15.jpg">
		<img src="images/pic16.jpg">
		<img src="images/pic17.jpg">
		<img src="images/pic18.jpg">
		<img src="images/pic19.jpg">
		<img src="images/pic20.jpg">
		<img src="images/pic21.jpg">
		<img src="images/pic22.jpg">
		<img src="images/pic23.jpg">
		<img src="images/pic24.jpg">
		<img src="images/pic25.jpg">
		<img src="images/pic26.jpg">
		<img src="images/pic27.jpg">
		<img src="images/pic28.jpg">
		<img src="images/pic29.jpg">
		<img src="images/pic30.jpg">

	</div>
	<img src="images/TICXIS1.png" style="float: right; margin-right: 15px;">
<h3 id="about" style=" text-align: center;">This website provides you with the best quality high definition wallpapers of any kind. Follow us on social and on gmail as xclusicwallpaper@gmail.com</h3>

</div>
</body>
</html>
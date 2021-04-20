<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0" http-equiv="X-UA-Compatible" content="IE=Edge">
<style type="text/css">
	body{
		height: 100vh;
		background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url(images/andy3.jpg);
		background-position: center;
		background-size: cover;
		margin: 0px;
		padding: 0px;
	}
	#one{
		text-align: center;
		transform: translate(-50%,-50%);
		top: 50%;
		left: 50%;
		position: absolute;
		margin: 0px;
		padding: 0px;
	}
	#one .two{
		font-size: 150px;
		color: white;
		font-weight: bolder;
	}
	#one a{
		border: 0;
		background: none;
		margin: 5px auto;
		text-align: center;
		padding: 14px 5px;
		outline: none;
		color: white; 
		border-radius: 24px;
		transition: 0.25s;
		margin: 5px;
		list-style: none;
		text-decoration: none;
		border: 2px solid white;

	}
	#one a .three{
		text-decoration: none;
		color: white;
		background: none;
		border: 0;
		padding: 14px 5px;
		width: 150px;
		list-style: none;
		color: white;
		outline: none;

	}
	#one a:hover{
		cursor: pointer;
		background: white; 
	}
	#one a .three:hover{
		color: black;
		cursor: pointer;
	}
</style>
</head>
<body>
	<div id="one">
	<div class="two">Welcome</div>
	<a href="login.php"><input type="submit" value="LOG IN" class="three"></a>
	<a href="signup.php"><input type="submit" value="SIGN UP" class="three"></a>
	</div>
</body>
</html>
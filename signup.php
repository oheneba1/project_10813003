<?php
session_start();
include("connection.php");
include("function.php");



if ($_SERVER['REQUEST_METHOD']=="POST") 
{
	//something was posted
	$firstname= $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$username = $_POST['username'];
	$email    = $_POST['email'];
	$password = $_POST['password'];

	if(!empty($firstname) && !empty($lastname) && !empty($username) && !empty($email) && !empty($password) && !is_numeric($firstname) && !is_numeric($lastname) && !is_numeric($username))
	{
		//save to database
		$user_id = random_num(20);
		$query = "insert into users (user_id,firstname,lastname,username,email,password) values ('$user_id','$firstname','$lastname','$username','$email','$password')";
		mysqli_query($con, $query);
		header("Location: login.php");
		die;
	}else
	{
		echo "Please enter some valid information!";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
<style type="text/css" media="screen">
		body{
		background-image: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)),url(images/andy3.jpg);
		padding: 0;
		background-size: cover;
		font-family: sans-serif;
	}
	#text{
		border: 0;
		background: none;
		display: block;
		margin: 20px auto;
		text-align: center;
		border: 2px solid white;
		padding: 14px 10px;
		width: 200px;
		outline: none;
		color: white; 
		border-radius: 24px;
		transition: 0.25s;
	}
	#text :focus{
		width: 280px;
		border-color: white;
	}

	#button{
		border: 0;
		background: none;
		display: block;
		margin: 20px auto;
		width: 80px;
		text-align: center;
		border: 2px solid white;
		padding: 14px 40px;
		width: 150px;
		outline: none;
		color: white;
		border-radius: 24px;
		transition: 0.25s;
		cursor: pointer;
	}
	#button:hover{
		background: white;
		color: black;
		border-color: white;
	}

	#box{
		background-color: black;
		margin: auto;
		width: 300px;
		padding: 20px;
		transform: translate(-50%,-50%);
		top: 50%;
		left: 50%;
		position: absolute;
		text-align: center;
		border-radius: 30px;
	}
	.one{
		font-size: 20px; 
		margin: 10px; 
		color: white;
	}
	#img1{
		width: 100px;
	}
	h1{
		color: white;
		text-transform: uppercase;
		font-weight: 500;
	}


</style>

	<html lang="en">
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HOME  |  SIGN UP</title>
</head>
<body>
<div>
<div id="box">
	<form method="post" class="form">
		<img src="images/img1.svg" alt="image" id="img1">
		<h1>SIGN UP</h1>
		<input id="text" type="text" name="firstname" required placeholder="Enter your name">
		<input id="text" type="text" name="lastname" required placeholder="Enter your last name here">
		<input id="text" type="text" name="username" required placeholder="Enter your username here">
		<input id="text" type="email" name="email" required placeholder="**********@****.com">
		<input id="text" type="password" name="password" required placeholder="Enter your password">
		<input id="button" type="submit"  value="SIGN UP">
	</form>
	
</div>
</div>
</body>
</html>
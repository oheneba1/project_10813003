<?php
session_start();
include("connection.php");
include("function.php");


if ($_SERVER['REQUEST_METHOD']=="POST") 
{
	//something was posted
	$username = $_POST['username'];
	$password = $_POST['password'];

	if(!empty($username) && !empty($password) && !is_numeric($username))
	{
		//read to database
		$query = "select * from users where username = '$username' limit 1";
		$result = mysqli_query($con, $query);

		if($result)
		{
			if($result && mysqli_num_rows($result) > 0)
			{
				$user_data = mysqli_fetch_assoc($result);
				if($user_data['password'] === $password)
				{	
					$_SESSION['user_id'] = $user_data['user_id'];
					 header("Location: index.php");
					die;
				}
			}
		}
		
		echo "wrong username or password!";
	}else
	{
		echo "wrong username or password!";
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
	.form{
		width: 300px;
		padding: 40px;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%,-50%);
		background: black;
		background: linear-gradient(rgba(0,0,0,0.5));
		text-align: center;
		border-radius: 30px;
	}
	.form h1{
		color: white;
		text-transform: uppercase;
		font-weight: 500;
	}
	.form input[type="text"], .form input[type="password"]{
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
	.form input[type="text"]:focus ,.form input[type="password"]:focus{
		width: 280px;
		border-color: white;
	}

	.form input[type="submit"]{
		border: 0;
		background: none;
		display: block;
		margin: 20px auto;
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
	.form input[type="submit"]:hover{
		background: white;
		color: black;
		border-color: white;
	}
	#button{
		padding: 10px;
		font-weight: bold;
		background-color: #eee;
		color: #000;
	}
	#img{
		width: 100px;
	}
	h6{
		color: white;
		text-align: center;
		font-family: sans-serif;
	}
	pre a{
		font-size: 14px;
		font-family: sans-serif;
	}
	

</style>



	<html lang="en">
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HOME | LOG IN</title>
</head> 
<body>
<div>
<div >
	<form method="post" class="form">
		<img src="images/img.svg" id="img" alt="image">
		<h1>login</h1>
		<input type="text" name="username" placeholder="Username" required autocomplete>
		<input type="password" name="password" placeholder="Password" required>
		<input type="submit"  value="Login">
		<h6>Don't have an account?<pre> <a href="signup.php">CLICK HERE</a></pre> </h6>

		
	</form>
</div>
</div>
</body>
</html>
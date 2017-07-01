<?php
	session_start();

	//connect to the database
	$db = mysqli_connect("localhost","root","","project");

	if (isset($_POST['register_btn'])) {
		# code...
		session_start();
		$username = mysqli_real_escape_string($_POST['username']);
		$email = mysqli_real_escape_string($_POST['email']);
		$password = mysqli_real_escape_string($_POST['password']);
		$password2 = mysqli_real_escape_string($_POST['password2']);

		if ($password == $password2) {
			//create user
			$password = md5($password); // hash type display for the password: security rsns
			$sql = ("INSERT INTO users(username,email,password) VALUES('$username','$email','$password')");

			mysqli_query($db, $sql);			
			$_SESSION['message']="You are now logged in ";
			$_SESSION["username"]= $username;
			header("location: home.php"); //redirect to home page
		}else{
			//failed
			$_SESSION['message']="The passwords do not match";
		}
	}

?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Registration_login_Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
	<h1>Basic Registration login form</h1>	
</div>

<form method="post" action="register.php">
	<table>
		<tr>
			<td>Username:</td>
			<td><input type="text" name="username" class="textInput"></td>
		</tr>
		<tr>
			<td>Email Id:</td>
			<td><input type="text" name="email" class="textInput"></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="text" name="password" class="textInput"></td>
		</tr>
		<tr>
			<td>Confirm Password:</td>
			<td><input type="text" name="password2" class="textInput"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="register_btn" value="Register"></td>
		</tr>
	</table>

</form>
</body>
</html>

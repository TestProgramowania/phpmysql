<?php
	session_start();
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
 
<h1>HOME</h1>
<div><h4>welcome<?php echo $_SESSION['username']; ?></h4></div>


</body>
</html>

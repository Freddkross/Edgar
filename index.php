<!DOCTYPE html> 
<html>
<head>
	<meta charset="utf-8">
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="css/master.css">
</head>
<body>
<div class="login-box">
	<img  class="avatar" src="img/lg.png"> 
	<h1>Login Here</h1>
	<form method="POST" action="php/login.php">
		<!--USERNAME -->
		<label for="username">username</label>
		<input type="text" name="User" placeholder="Enter Username">
		<!--Password -->
		<label for="Password">password</label>
		<input type="Password" name="Password" placeholder="Enter Password">
		<input type="submit" value="Login">
		<a href="#">Lost your password?</a><br>
		<a href="Altas.html">Don't have an account?</a>
	</form>

</body>
</html>
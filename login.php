<!DOCTYPE html>
<html>
<head>
	<title>User Login</title>
</head>
<body>
	<h2>User Login</h2>
	<form method="post" action="login.php">
	  <label for="username">Username:</label>
	  <input type="text" id="username" name="username" required>
	  <br>
	  <label for="password">Password:</label>
	  <input type="password" id="password" name="password" required>
	  <br>
	  <input type="submit" name="login" value="Login">
	</form>
</body>
</html>
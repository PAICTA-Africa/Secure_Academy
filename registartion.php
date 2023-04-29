<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>
</head>
<body>
	<h2>User Registration</h2>
	<form method="post" action="register.php">
	  <label for="username">Username:</label>
	  <input type="text" id="username" name="username" required>
	  <br>
	  <label for="password">Password:</label>
	  <input type="password" id="password" name="password" required>
	  <br>
	  <label for="confirm_password">Confirm Password:</label>
	  <input type="password" id="confirm_password" name="confirm_password" required>
	  <br>
	  <input type="submit" name="register" value="Register">
	</form>
</body>
</html>

<?php
if(isset($_POST['register'])){
  // Get form data
  $username = $_POST['username'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];

  // Validate form data
  if(empty($username) || empty($password) || empty($confirm_password)){
    echo "All fields are required.";
  } elseif($password != $confirm_password){
    echo "Passwords do not match.";
  } else {
    // Connect to database (replace DB_HOST, DB_USERNAME, DB_PASSWORD, and DB_NAME with your own database information)
    $conn = mysqli_connect("DB_HOST", "DB_USERNAME", "DB_PASSWORD", "DB_NAME");
    if(mysqli_connect_errno()){
      echo "Failed to connect to database: " . mysqli_connect_error();
      exit();
    }

    // Check if username already exists
    $query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0){
      echo "Username already exists.";
    } else {
      // Add user to database
      $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
      if(mysqli_query($conn, $query)){
        echo "User registered successfully.";
      } else {
        echo "Error: " . mysqli_error($conn);
      }
    }

    mysqli_close($conn);
  }
}
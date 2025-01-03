<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'db_connect.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "Login successful!";
    } else {
        echo "Invalid email or password.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | StudyConnect</title>
  <link rel="stylesheet" href="login.css">
</head>

<body>
  <div class="form-container">
    <form class="form-form" onsubmit="login(event);">
      <h2>Login to StudyConnect</h2>
      <div class="input-group">
        <label for="email">Email:</label>
        <input type="email" id="email" placeholder="Enter your email" required>
      </div>
      <div class="input-group">
        <label for="password">Password:</label>
        <input type="password" id="password" placeholder="Enter your password" required>
      </div>
      <button type="submit" class="login-button">Log In</button>
      <p class="text-center">Don't have an account? <a href="registration.html" class="create-account-link">Create Account</a></p>
    </form>
  </div>
  
  <script src="script.js"></script>
</body>
</html>

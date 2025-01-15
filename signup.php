<?php include("server.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background: url('img.webp') no-repeat center center fixed;
      backdrop-filter: blur(9px);
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .signup-container {
      background: rgba(255, 255, 255, 0.9); 
      padding: 30px 40px;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
      text-align: center;
    }

    .signup-container h1 {
      margin-bottom: 20px;
      color: #333333;
      font-size: 24px;
    }

    .signup-form {
      text-align: left;
    }

    .signup-form label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
      color: #555555;
      font-size: 14px;
    }

    .signup-form input {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #cccccc;
      border-radius: 15px;
      font-size: 14px;
    }

    .signup-form button {
      width: 100%;
      padding: 10px;
      background-color:rgb(12, 13, 17);
      color: #ffffff;
      border: none;
      border-radius: 15px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .signup-form button:hover {
      background-color:rgb(28, 60, 167);
    }

    .signup-container p {
      margin-top: 10px;
      font-size: 16px;
      color: #666666;
      margin-top:20px;
    }

    .signup-container p a {
      color:rgb(28, 60, 167);
      text-decoration: none;
      font-weight: bolder;
    }

    .signup-container p a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="signup-container">
    <h1>Sign Up</h1>
    <form action="login.php" method="post" class="signup-form">
      <?php include("error.php")?>
      <div class="input-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="input-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="input-group">
        <label for="password">New Password</label>
        <input type="password" id="password" name="password_1" required>
      </div>
      <div class="input-group">
        <label for="password">Confirm Password</label>
        <input type="password" id="password" name="password_2" required>
      </div>
      <div class="input-group"><button type="submit" class="btn"name="reg_user">Sign Up</button></div>
    </form>
    <p>Already have an account? <a href="login.php">Log In</a></p>
  </div>
</body>
</html>

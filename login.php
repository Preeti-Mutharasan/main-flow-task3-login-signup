<?php include("server.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-image: url('img.webp');
            backdrop-filter: blur(15px);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }

        .login-container {
            background:rgba(255, 255, 255, 0.9);
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 8px 8px 8px 8px rgba(10, 10, 10, 0.91);
            width: 100%;
            max-width: 400px;
        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 1.5rem;
            color: #333333;
        }

        .input-group {
            margin-bottom: 1rem;
        }

        .input-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: #555555;
        }

        .input-group input {
            width: 100%;
            padding: 0.55rem;
            border: 1px solid #ddd;
            border-radius: 15px;
            font-size: 1rem;
        }

        .input-group input:focus {
            border-color:rgb(51, 34, 146);
            outline: none;
            box-shadow: 0 0 3px rgba(47, 45, 139, 0.5);
        }

        .login-button {
            width: 60%;
            padding: 0.75rem;
            border: none;
            border-radius: 15px;
            background-color:rgb(14, 14, 17);
            color: #ffffff;
            font-size: 1rem;
            cursor: pointer;
            margin-left:70px;
            margin-top:10px;
            transition: background-color 0.3s;
        }

        .login-button:hover {
            background-color:rgb(28, 60, 167);
        }

        .footer {
            text-align: center;
            margin-top: 1.5rem;
            font-size: 1.1rem;
            color: #777777;
        }

        .footer a {
            color: rgb(28, 60, 167);
            text-decoration: none;
            font-weight: bolder;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="login.php" method="post">
            <?php include("error.php")?>
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username">
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password">
            </div>
            <div class="input-group">
            <button type="submit" class="login-button"name="login_user">Log In</button>
            </div>
        </form>
        <div class="footer">
            <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
        </div>
    </div>
</body>
</html>

<?php
session_start();

// Initialize variables
$username = "";
$email = "";
$errors = array();

// Connect to database
$db = mysqli_connect('localhost', 'root', '', 'bms2') or die("Could not connect to database");

// Register user
if (isset($_POST['reg_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = $_POST['password_1'];
    $password_2 = $_POST['password_2'];

    // Form validation
    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($password_1)) { array_push($errors, "Password is required"); }
    if ($password_1 != $password_2) { array_push($errors, "Passwords do not match"); }

    // Check for existing user
    $user_check_query = "SELECT * FROM user WHERE username=? OR email=?";
    $stmt = mysqli_prepare($db, $user_check_query);
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $user = mysqli_fetch_assoc($result);

    if ($user) {
        if ($user['username'] === $username) {
            array_push($errors, "Username already exists");
        }
        if ($user['email'] === $email) {
            array_push($errors, "Email already exists");
        }
    }

    // Register user if no errors
    if (count($errors) == 0) {
        $password = password_hash($password_1, PASSWORD_DEFAULT); // Secure hash
        $query = "INSERT INTO user (username, email, password) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($db, $query);
        mysqli_stmt_bind_param($stmt, "sss", $username, $email, $password);
        mysqli_stmt_execute($stmt);
        
        $_SESSION['username'] = $username;
        header("location: login.php");
        exit();
    }
}

if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = $_POST['password'];

    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($password)) { array_push($errors, "Password is required"); }

    if (count($errors) == 0) {
        $query = "SELECT * FROM user WHERE username=?";
        $stmt = mysqli_prepare($db, $query);
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $user = mysqli_fetch_assoc($result);

        if ($user) {
            $stored_password = $user['password'];

            // Verify the password using password_hash() stored values
            if (password_verify($password, $stored_password)) {
                $_SESSION['username'] = $username;
                header("Location: index.html");
                exit();
            } else {
                array_push($errors, "Wrong username/password combination");
          }
        } else {
            array_push($errors, "User not found");
        }
    }
}

?>

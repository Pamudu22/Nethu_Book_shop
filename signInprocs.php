<?php
session_start();

// Database connect
$mysqli = require __DIR__."/DBconnect.php";

// Data assign to attributes
$email = mysqli_real_escape_string($mysqli, $_POST['email']);
$pswd = mysqli_real_escape_string($mysqli, $_POST['pswd']);

// SQL query to select email
$sql = sprintf("SELECT * FROM user WHERE email = '%s'", $email);
$result = $mysqli->query($sql);
$user = $result->fetch_assoc();

if ($user) {
    if (password_verify($pswd, $user["password_Hash"])) {
        $_SESSION['status'] = "Login Succesfully";
        $_SESSION['status_code'] = "success";
        
        // Set the session variables
        $_SESSION['userId'] = $user["id"];
        $_SESSION['auth_role'] = $user["auth_role"];

        // Check if the "Remember Me" checkbox is selected
        if (isset($_POST['remember_me']) && $_POST['remember_me'] == '1') {
            $remember_token = $user["id"];
            // Set the remember_token cookie with a 30 day expiration time 
            setcookie('remember_token', $remember_token, time() + 30 * 24 * 60 * 60);
        } else {
            // If the checkbox is not selected, remove the remember_token cookie (if exists)
            setcookie('remember_token', '', time() - 3600);
        }

        // Redirect to the appropriate page based on user role
        if ($user["auth_role"] == 0) {
            header("Location: index.php");
        } elseif ($user["auth_role"] == 1) {
            header("Location: Admin.php");
        }
        exit();
    } else {
        $_SESSION['status'] = "Login invalid";
        $_SESSION['status_code'] = "error";
        header("Location: sign-in.php");
        exit();
    }
}

// Logout functionality
if (isset($_POST['logout_btn'])) {
    $_SESSION['status'] = "Logged out Succesfully";
    $_SESSION['status_code'] = "success";
    
    unset($_SESSION['userId']);
    unset($_SESSION['auth_role']);
    
    //unset($_SESSION['status']);
    header("Location: sign-in.php");
    exit();
}
?>

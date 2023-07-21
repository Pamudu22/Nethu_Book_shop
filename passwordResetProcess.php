<?php
session_start();

//Database connect
$mysqli = require __DIR__."/DBconnect.php";


// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the new password and confirmation password from the form
    $username = $_POST['Name'];
    $newPassword = $_POST['new_password'];
    $confirmPassword = $_POST['confirm_password'];

    
    

    // Retrieve the reset token from the hidden field

    // Validate the new password and confirmation password
    if ($newPassword !== $confirmPassword) {
        
        $_SESSION['status'] = "New password and confirm password do not match.";
        $_SESSION['status_code']= "error";
        header("Location: Password_Reset.php");
        
        
        exit;
    }


    //Update password in the table 
    $sql = "UPDATE  user SET password_Hash = '$newPassword ' WHERE uname = '$username' ";

    // Execute the SQL statement 
    $result = mysqli_query($mysqli, $sql);

    // Check if the update was successful
    if ($result) {
        
        header("Location: Sign-in.php");
        $_SESSION['status'] = "Reset the password complete";
        $_SESSION['status_code']= "success";
    } else {
        echo "Error updating password: " . mysqli_error($mysqli);
        $_SESSION['status'] = "Something went worng";
        $_SESSION['status_code']= "error";
        header("Location: passwordResetProcess.php");
    }
    
    
            

}
?>







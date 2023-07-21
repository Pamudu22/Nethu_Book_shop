<?php
// Assuming you have a database connection already established
session_start();

    //Database connect
    $mysqli = require __DIR__."/DBconnect.php";
   

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the user's email from the form
    $email = $_POST["email"];
    
    // Check if the email exists in the user table
    $sql = sprintf("SELECT * FROM user 
                    WHERE email = '%s'",
                    $email);
                    
  
    $result = $mysqli ->query($sql);
    
    $user = $result-> fetch_assoc();

    if ($user){
        
        header("Location: Password_Reset.php");
        exit(0);
    }
    else{
        $_SESSION['status'] = "Something went worng";
        $_SESSION['status_code']= "error";
        header("Location: forgotPassword.php");
        exit(0);
    }
}
unset($_SESSION['status']);
include('forgotmessage.php');
include('forgotalert.php');
 
?>

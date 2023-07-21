<?php
session_start();

$_SESSION['status'] = "Invalid OTP";
$_SESSION['status_code']= "error";
header("Location:shoppingNew.php");
exit(0);

    








?>

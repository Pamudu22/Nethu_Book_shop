<?php
session_start();
$_SESSION['status'] = "Payment Successful !";
$_SESSION['status_code']= "success";
header("Location:shoppingNew.php");
exit(0);


    








?>

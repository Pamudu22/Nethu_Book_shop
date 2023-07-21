<?php 
    session_start();

    $mysqli = require __DIR__."/DBconnect.php";

    $image = $_FILES['image'];

    if(isset($_FILES["submit"])){
        var_dump($image);
    }
?>
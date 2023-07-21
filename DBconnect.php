<?php 
    $DbserverName = "localhost";
    $DbUserName = "root";
    $DbPassword = "";
    $DbName = "nethu_book_shopdb";

    $mysqli = new mysqli($DbserverName,$DbUserName,$DbPassword,$DbName);

    if ($mysqli -> connect_errno){
        die ("Connection Error: ". $mysqli->connect_error);
        
    }
    return $mysqli;
?>
<?php
  /*  
   


    //input fiel restriction in server side
    if (empty($_POST["Name"])){
        die ("Name is Required");
    }

    if ( ! filter_var($_POST["Email"], FILTER_VALIDATE_EMAIL)){
        die ("valid Email is required");
    }
     
    if (strlen($_POST["password"])<8){
        die ("Password must contain at least 8 characters.");
    }

    if (! preg_match("/[a-z]/i",$_POST["password"])){
        die ("Password must contain at leadt one letter");

    }
    if (! preg_match("/[0-9]/",$_POST["password"])){
        die ("Password must contain at leadt one number");

    }

    if ($_POST["password"] !== $_POST["password2"]){
        die ("password didn't match");
    }
    //password hashing

    $password_hash =  password_hash($_POST["password"],PASSWORD_DEFAULT);

    //include DB
    $mysqli = require __DIR__. "/DBconnect.php";
    
    //Adding placeholders

    $sql = "INSERT INTO users (uname, email, password_Hash)
            VALUES (?,?,?)";

    //getting error code 

    $stmt = $mysqli->stmt_init();

    if( ! $stmt->prepare($sql)){
        die("SQL error: ". $mysqli->error);
    }
    //binding the parameters

    $stmt->bind_param("sss",
    $_POST["name"],
    $_POST["email"],
    $password_Hash);
    //$stmt->execute();

    

   

    echo "sign-up succesflly..";


   
?> 
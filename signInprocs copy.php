<?php
    session_start();

   

  //Database connect
    $mysqli = require __DIR__."/DBconnect.php";

  //data assign to  attribute 
    $email = mysqli_real_escape_string($mysqli,$_POST['email']);
    $pswd = mysqli_real_escape_string($mysqli,$_POST['pswd']);

  //SQL query to select email
    $sql = sprintf("SELECT * FROM user 
                    WHERE email = '%s'",
                    $email);
  
    $result = $mysqli ->query($sql);
  
    $user = $result-> fetch_assoc();
    

    if ($user){

       if (password_verify($pswd,$user["password_Hash"])){
        if ($user["auth_role"] == 0){
          $_SESSION['status'] = "Login Succesfully";
          $_SESSION['status_code']= "success";
          header("Location:index.php");
          
          $_SESSION['userId'] = $user["id"];
          exit(0);
          }
          if($user["auth_role"] == 1){
            $_SESSION['status'] = "Login Succesfully";
            $_SESSION['status_code']= "success";
            header("Location:Admin.php");
            exit(0);
            
          }
       
       }
       else{
        $_SESSION['status'] = "Login invalid";
        $_SESSION['status_code']= "error";
        header("Location:sign-in.php");
        exit(0);
       }
    }
    

   

  /* var_dump($user);
    exit;*/
    

    if(isset($_POST['logout_btn'])){
      
        
         $_SESSION['status'] = "Logged out Succesfully";
                $_SESSION['status_code']= "success";
                unset($_SESSION['status']);
                unset($_SESSION['userId']);
                header("Location:sign-in.php");
                exit(0);
                

    }
    
    
?>
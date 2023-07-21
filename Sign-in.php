<!--SQL DATABASE connection-->
<?php
session_start();
 
  

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="NethuStyle.css">
    <!--fontawesome link-->
    <script src="https://kit.fontawesome.com/22142c7d49.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--Bootstraps JS-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link href="background.css" rel="stylesheet">
    <title>Sign in</title>
  </head>

  <body>
    <div class="background">
      <nav class="navbar navbar-expand-lg navbar-dark py-5" style="background-color: rgba(10, 10, 102, 0.541);">
          <div class="container">
           

            <a class="navbar-brand" href="#">  <img src="New_logo.png" alt="Book_shop_logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="category.php">Category</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="faq.php">Help/FAQ</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-warning active" aria-current="page" href="#">Sign-in</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " aria-current="page" href="Sign-up.php">Sign-up</a>
                </li>
               <li class="nav-item">
                  <a class="nav-link " aria-current="page" href="newWishlist.php">Wishlist</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="shoppingNew.php">Shopping cart</a>
                </li>
                
              </nav>
              <!--Start of the content-->
              <?php include('message.php');
              include('alert.php');?>
             
              <div class="container">
                <div class="vh-100 d-flex justify-content-center align-items-center">
                  <div class="container">
                    <div class="bodrer p-4">
                      <div class="row d-flex justify-content-center">
                        <div class="col-12 col-md-8 col-lg-6">
                          <div class="card bg " style="border-radius: 8px; background-color:rgba(255, 255, 255, 0.788);">
                            <div class="card-body p-5">
                              <form class="mb-3 mt-md-4" action="signInprocs.php" method="post" novalidate name="Signinform" onsubmit="return validateForm()">

                                <h2 class="fw-bold mb-2 text-uppercase ">Nethu Book store</h2>
                                <p class=" mb-5">Please enter your login and password!</p>
                                <div class="mb-3">
                                  <label for="email" class="form-label ">Email address</label>
                                  <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                                </div>
                  
                  
                                <div class="mb-3">
                                  <label for="password" class="form-label ">Password</label>
                                  <input type="password" name="pswd" class="form-control" id="password" placeholder="*******">
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="rememberMe" name="remember_me" value="1">
                                    <label class="form-check-label" for="rememberMe">Remember Me</label>
                                </div>
                  
                                <p class="small"><a class="text-primary" href="forgotPassword.php">Forgot password?</a></p>
                                <script>function validateForm() {
                                               
                                                let email = document.forms["Signinform"]["email"].value;
                                                if (email == "") {
                                                  alert(" Email field is required");
                                                  return false;
                                                }
                                                let pass = document.forms["Signinform"]["pswd"].value;
                                                if (pass == "") {
                                                  alert("Password field is required");
                                                  return false;
                                                }

                                }</script>
                  
                                <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                  <button type="submit" class="btn btn-primary btn-lg">Login</button>
                                </div>
                              </form>
                              
                              <div>
                                <p class="mb-0  text-center">Don't have an account? <a href="signup.html" class="text-primary fw-bold">SignUp</a></p>
                              </div>
                              
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <?php 
      require_once('Footer.php');
    ?>

                

  </body>

</html>

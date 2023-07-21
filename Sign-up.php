<!--SQL DATABASE connection-->
<?php
session_start();
  include_once "DBconnect.php";
  
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!--fontawesome link-->
     <script src="https://kit.fontawesome.com/22142c7d49.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="NethuStyle.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--Bootstraps JS-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title>Sign up</title>
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
                <a class="nav-link" aria-current="page" href="Sign-in.php">Sign-in</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-warning active" aria-current="page" href="#">Sign-up</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="newWishlist.php">Wishlist</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="shoppingNew.php">Shopping cart</a>
              </li>
              
            </nav>
          <!--Start of slide-->

          <?php include('message.php');
          include "alert.php"; ?>
            <section style="margin-top: 2%;">
              <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                  <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px; background-color:rgba(255, 255, 255, 0.63) ;" >
                      <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                          <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
            
                            <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
            
                            <form class="mx-1 mx-md-4" action="signupPrcs.php" method="POST" novalidate name="Signupform" onsubmit="return validateForm()">
            
                              <div class="d-flex flex-row align-items-center mb-4">
                                <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                <div class="form-outline flex-fill mb-0">
                                  <label class="form-label" for="Name" >Your Name</label>
                                  <input required type="text" id="Name" name="Name" class="form-control" placeholder="Nethu Fernando" />
                                  
                                </div>
                              </div>
            
                              <div class="d-flex flex-row align-items-center mb-4">
                                <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                <div class="form-outline flex-fill mb-0">
                                  <label class="form-label" for="Email">Your Email</label>
                                  <input required type="email" id="Email" name="Email" class="form-control" placeholder="ex:-nethu@gmail.com"/>
                                  
                                </div>
                              </div>
            
                              <div class="d-flex flex-row align-items-center mb-4">
                                <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                <div class="form-outline flex-fill mb-0">
                                  <label class="form-label" for="password">Password</label>
                                  <input required type="password" id="password" name="password" class="form-control" placeholder="*******" />
                                  
                                </div>
                              </div>
            
                              <div class="d-flex flex-row align-items-center mb-4">
                                <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                <div class="form-outline flex-fill mb-0">
                                  <label class="form-label" for="password2">Repeat your password</label>
                                  <input required type="password" id="password2" name="password2" class="form-control" placeholder="*******"/>
                                  
                                </div>
                              </div>
            
                              <div class="form-check d-flex justify-content-center mb-5">
                                <input class="form-check-input me-2" type="checkbox" name="agreement" value="" id="agreement" />
                                <label class="form-check-label" for="agreement">
                                  I agree all statements in <a href="#!">Terms of service</a>
                                </label>
                              </div>
                              <script>function validateForm() {
                                                let name = document.forms["Signupform"]["Name"].value;
                                                if (name == "") {
                                                  alert("Name must be filled out");
                                                  return false;
                                                }
                                                let emil = document.forms["Signupform"]["Email"].value;
                                                if (email == "") {
                                                  alert(" Email field is required");
                                                  return false;
                                                }
                                                let pass = document.forms["Signupform"]["password"].value;
                                                if (pass == "") {
                                                  alert("Password field is required");
                                                  return false;
                                                }
                                                let pass2 = document.forms["Signupform"]["password2"].value;
                                                if (pass2 == "") {
                                                  alert("Password confirmation field is required");
                                                  ret
                                                  
                                                  
                                                   false;
                                                }
                                              }</script>
                                                          
                              <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                <button type="submit" class="btn btn-primary btn-lg" onclick="validateForm()">Register</button>
                              </div>
            
                            </form>

            
                          </div>
                          <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
            
                            <img src="pngwing.png"
                              class="img-fluid" alt="Sample image">
            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <?php require "Footer.php";
             ?>

  </body>
</html>
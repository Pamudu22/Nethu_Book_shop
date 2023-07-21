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
    
    <title>Nethu Book Shop</title>
  </head>
  <body>
    <div class="Homeback">
           
    <nav class="navbar navbar-expand-lg navbar-dark py-5">
        <div class="container">
          <a class="navbar-brand" href="#">  <img src="New_logo.png" alt="Book_shop_logo"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link text-warning active" aria-current="page" href="#">Home</a>
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
                <a class="nav-link" aria-current="page" href="Sign-up.php">Sign-up</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="newWishlist.php">Wishlist</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="shoppingNew.php">Shopping cart</a>
              </li>
            </nav>
            <?php include('message.php');
              include "alert.php";?>
              <div class="Front">
                <br><br>
                <div class="Bname">Nethu Book Shop</div><br><br>
                <h1>Where everything <br>you need to know <br>is only an arm’s length away!</h1>
                <form action="Advncd_search.php" method="post">
                    <input type="text" placeholder="Search Book" name="search" style="padding:2%;">
                    <button type="submit"name="submit" class="btn"><img class="icon" src="search_iconBlk.png"></button>

                </form>
              </div>

              
   


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <?php 
      require_once('Footer.php');
    ?>
    


</div>

  </body>
</html>
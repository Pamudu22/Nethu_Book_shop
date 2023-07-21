<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
     <!--fontawesome link-->
  <script src="https://kit.fontawesome.com/22142c7d49.js" crossorigin="anonymous"></script>

    <meta http-equiv="X-UA-Campatible" content="IE-edge">
    <meta name="viewport" content="width=device-width,initial-scal=1.0">
    <link rel="stylesheet" href="catagory.css">
    <link rel="stylesheet" href="NethuStyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="background.css" rel="stylesheet">
    <title>Category</title>
    
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
                  <a class="nav-link text-warning active" aria-current="page" href="catagory">Category</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="faq.php">Help/FAQ</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " aria-current="page" href="sign-in.php">Sign-in</a>
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
            <form class="navsrch d-flex mt-5 mb-5" style="margin-left: 15%;" action="Advncd_search.php" method="post">
            <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search" style="width: 50%;">
            <button class="btn btn-outline-santra"name="submit" type="submit"><i class="fa-solid fa-magnifying-glass fa-beat-fade fa-lg" style="color: #ffffff;"></i></button>
          </form>z
    <div class="container">
    <h1 class="heading"> Welcome to Book Haven!   </h1>
    <div class="box-container">
        <div class="box">
            <img src="p1.png" alt="">
            <h3> PAST PAPERS A/L</h3>
            <a href="#" class="btn"> See More...</a>
        </div>
        <div class="box">
            <img src="p2.png" alt="">
            <h3> PAST PAPERS O/L</h3>
            <a href="OLpastP.php" class="btn"> See More...</a>
    </div>
    <div class="box">
        <img src="p3.png" alt="">
        <h3> NOVELS</h3>
        <a href="Novel.php" class="btn"> See More...</a>
</div> 
    <div class="box">
        <img src="p4.png" alt="">
        <h3> SHORT STORIES</h3>
        <a href="#" class="btn"> See More...</a> 
    </div> 
    
    <div class="box">
        <img src="p5.png" alt="">
        <h3> DETECTIVE STORIES</h3>
        <a href="#" class="btn"> See More...</a>
    </div> 
  
    <div class="box">
        <img src="p6.png" alt="">
        <h3> EDUCATION</h3>
        <a href="#" class="btn"> See More...</a>
    </div>
    <div class="box">
        <img src="p7.png" alt="">
        <h3> CHILDREN'S</h3>
        <a href="#" class="btn"> See More...</a>
    </div>
    <div class="box">
        <img src="p8.png" alt="">
        <h3> POETRY</h3>
        <a href="#" class="btn"> See More...</a>
    </div>
    </div>
    </div>
    <?php 
      require "Footer.php";
    ?>
</body>
</html>

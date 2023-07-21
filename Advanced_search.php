<!DOCTYPE html>
<?php
  $mysqli = require __DIR__."/DBconnect.php";

  
?>

<html>
<head>
  <!-- Required meta tags -->
    
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="NethuStyle.css">
    <link rel="stylesheet" href="catagory.css">

    <!--fontawesome link-->
    <script src="https://kit.fontawesome.com/22142c7d49.js" crossorigin="anonymous"></script>
   

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--Bootstraps JS-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link href="background.css" rel="stylesheet">

  <meta http-equiv="X-UA-Campatible" content="IE-edge">
  
  <title>Adanced search</title>
    
    
  </head>
</head>
<body> 
  <div class="backgound">
    <nav class="navbar navbar-expand-lg navbar-dark py-5" style="background-color: rgba(10, 10, 102, 0.541);">
      <div class="container">
       

        <a class="navbar-brand" href="#">  <img src="New_logo.png" alt="Book_shop_logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
       
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="category.php">Category</a>
            </li>
           
            
          </nav>
          <form class="navsrch d-flex mt-5 mb-5" style="margin-left: 15%;"  method="post">
            <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search" style="width: 50%;">
            <button class="btn btn-outline-santra"name="submit" type="submit"><img class ="icon" src="serach.png" ></button>
          </form>
          <div class="container">
          
          <div class="box-container">
          
          <?php 
          if(isset($_POST['submit'])){
            $search = $_POST['search'];
        
            $sql = "SELECT * FROM 'book' WHERE ISBN_No like '%$search%' OR Book_Name like '%$search%' OR Author_Name like '%$search%' OR Publisher_Name like '%$search%' ;";
            $result = mysqli_query($mysqli,$sql); 
         
            while($row = mysqli_fetch_assoc($result)){
          ?>
  
  
   
        <div class="box" style="background-color:rgba(255, 255, 255, 0.729);">
            <img src="<?php echo $row['image_url'] ?>" alt="<?php echo $row['image_name'] ?>">
            <h3 style="color:darkblue; "><?php echo $row['Book_Name'] ?></h3>
            <h2 style="color:brown;text-align: left;">Rs. <?php echo $row['Book_Price'] ?>.00</h2>
            <h4 style="color:black;text-align: left;"><?php echo $row['Language'] ?> </h4>
            <h6 style="color:maroon; text-align: left"><?php echo $row['Author_Name'] ?></h6>
            <h6 style="color:midnightblue;text-align: left;">ISBN: <?php echo $row['ISBN_No'] ?></h6>

            <footer>
            <a  href="#" class="btn mb-0" style = "background-color:darkred;margin-bottom:1px;"> <i class="fa-solid fa-heart"></i></a><br>
            <a href="#" class="btn mb-0"> Add To Cart</a>
            </footer>

            
           
            </div>
            
          
        
         

        
        <?php 
         }
            }
          ?>
          </div>
          
             
        </div>
       
         
 
  
        <?php 
          require "Footer.php";
        ?>
         </div>
      
        
</body>
</html>

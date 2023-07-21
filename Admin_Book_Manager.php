<!--SQL DATABASE connection-->
<?php
  include_once "DBconnect.php";
  session_start();

  $sqlCat = "SELECT * FROM `category`; ";
  $allcategory = $mysqli->query($sqlCat);


  $sqlPub = "SELECT * FROM `publisher`; ";
  $allpublisher = $mysqli->query($sqlPub);

  $sqlAut = "SELECT * FROM `author`; ";
  $allAuthor = $mysqli->query($sqlAut);


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
    
    <title>Inventory Manager</title>

    <style>
      .button{
        width: 100px;
        
      }
      .inpttxt{
        height: 55px;
      }
      .inpttxtH{
         width: 80%;
        padding: 12px 20px;
        margin: 8px 0;
        border-style: none;
        border-radius: 6px;
        padding: 5px;
        color: black;
      }
    </style>
  </head>
  <body>
    <!--background-->
    
    <div class="adminbkback">
      <!--Navigation bar-->
      <nav class="navbar navbar-expand-lg navbar-dark py-5">
      <div class="container">
        <a class="navbar-brand" href="#">  <img src="New_logo.png" alt="Book_shop_logo" class="Book_shop_logo"></a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="Admin.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="new_Inventory.php">Inventory</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-warning active" aria-current="page" href="#">Inventory Manager</a>
            </li>
            <li class="nav-item">
              <a class="admintxt" aria-current="page" >Hello Admin!</a>
            </li>
          </nav>
          <!--End of navigation-->
          <?php 
           
          
           include "alert.php";
           include "message.php";
         ?>
          ?>
          <!--Slide-->
          <div class="slide">
           
            <div class="mb-3">

            <!--Search Function--
            
                <div>
                  <label >Search Book</label><br>
                  <form action="search.php" method="post">
                    <input type="text" placeholder="Search Book" name="search" class="Ainput" search="submit"><br>
                    <button type="submit"name="submit" class="button Search">Search</button>
                  </form>
                </div>
                <br> -->

                <h1 class="fw-bold mb-5 text-black " style="padding-left: 35%; color: white; font-weight: 800;">Nethu Book Shop</h1>
            <div style=" display: grid; grid-template-columns: 1fr 1fr; justify-content: space-around;" class="mt-5">
           
            <!--add new category-->
                <form action="CrudAdmin.php" method="post">
            <label for="catgry">Add New Category</label><br>
                <input style="width: 50%;" class="inpttxtH" name="catgry" type="text" id="catgry" >
                <button class="button add" type="submit" name="addC">Add</button>
            </form>

            <!--Delete Existing Publisher-->
            <form action="CrudAdmin.php" method="post">
            <label for="publish">Delete Existing Publisher</label><br>
                <input style="width: 50%;" class="inpttxtH" name="publishD" type="text" id="publish">
                <button class="button del" type="submit" name="DeleteP">Delete</button>
            </form>

            

            <!--add new Publisher-->
            <form action="CrudAdmin.php" method="post">
            <label for="publish">Add New Publisher</label><br>
                <input style="width: 50%;" class="inpttxtH" name="publish" type="text" id="publish">
                <button class="button add" type="submit" name="addP">Add</button>
            </form>

             <!--Delete Existing category-->
              
             <form action="CrudAdmin.php" method="post">
            <label for="catgryD">Delete Existing category</label><br>
                <input style="width: 50%;" class="inpttxtH" name="catgryD" type="text" id="catgryD" >
                <button class="button del" type="submit" name="DeletC">Delete</button>
            </form>

            <!--add new Author-->
            <form action="CrudAdmin.php" method="post">
            <label for="aut">Add New Author</label><br>
                <input style="width: 50%;"  class="inpttxtH " name="aut" type="text" id="aut" >
                <button class="button add" type="submit" name="addA">Add</button>
            </form>

            
            
               

            <!--Delete Existing Author-->
            <form action="CrudAdmin.php" method="post">
            <label for="aut">Delete Existing Author</label><br>
                <input style="width: 50%;"  class="inpttxtH mb-5" name="autD" type="text" id="aut" >
                <button class="button del" type="submit" name="DeleteA">Delete</button>
            </form>
            </div><br> 


            <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; justify-content: space-around;" class="mt-5">
           <!--Update Category-->
            <form action="CrudAdmin.php" method="post">
              <div>
              <label for="catU">Current Category Name</label><br>
                <input style="width: 50%;"  class="inpttxtH mb-1" name="catU" type="text" id="catU" >
              </div>

              <div>
              <label for="catN">New Category Name</label><br>
                <input style="width: 50%;"  class="inpttxtH mb-5" name="catN" type="text" id="catN" >
                <button class="button updt" type="submit" name="updateC">Update</button>
              </div>
            
                
            </form>

                       <!--Update Author-->
                       <form action="CrudAdmin.php" method="post">
              <div>
              <label for="autU">Current Author Name</label><br>
                <input style="width: 50%;"  class="inpttxtH mb-1" name="autU" type="text" id="autU" >
              </div>

              <div>
              <label for="autN">New Author Name</label><br>
                <input style="width: 50%;"  class="inpttxtH mb-5" name="autN" type="text" id="autN" >
                <button class="button updt" type="submit" name="updateA">Update</button>
              </div>
            
                
            </form>

                       <!--Update Publisher-->
                       <form action="CrudAdmin.php" method="post">
              <div>
              <label for="pubU">Current Publisher Name</label><br>
                <input style="width: 50%;"  class="inpttxtH mb-1" name="pubU" type="text" id="pubU" >
              </div>

              <div>
              <label for="pubN">New Publisher Name</label><br>
                <input style="width: 50%;"  class="inpttxtH mb-5" name="pubN" type="text" id="pubN" >
                <button class="button updt" type="submit" name="updateP">Update</button>
              </div>
            
                
            </form>


            </div>
         
            



             
            </div>
          </div>
          Second slide
          <div class="slide"> 
          
            
            <form action="adminbookMgProcess1.php"  method="POST" enctype="multipart/form-data">
             <input   class="mb-3 mt-5" type="file" name="image" id="image" accept="image/*">

              <!---Div class flex split-->
              <div class="contain">
            
              <div>
                <!--Book ID-->
                <label for="bid">Book ID</label><br>
                <input  class="inpttxt" name="Bid" type="text" id="bid" placeholder="ISBN0122011234">
              </div>
              <!--Book Name-->
              <div>
                <label for="bname">Book Name</label><br>
                <input  class="inpttxt" name="book_Name" type="text" id="bname" placeholder="The Adventures Trio">
              </div>
              <!--Book Language-->

              <div>
                <label for="lng" class="mb-2">Language</label><br>
              <select id="lng" name="lng">
                    <option value="Sinhala">Sinhala</option>
                    <option value="English">English</option>
                    <option value="Tamil">Tamil</option>
                    
             </select><br>
              </div>
              <!--Publisher Name-->
              <div>
                <label for="pub" class="mb-2">Publisher</label><br>
              <select id="pub" name="pub">
              <?php 
                    while ($row = mysqli_fetch_assoc($allpublisher)) {
                    ?>
                      <option value="<?php echo $row['publisher_id']; ?>"><?php echo $row['publisher']; ?></option>
                    <?php
                    }?>
             </select><br>
              </div>
              <!--Author Name-->
              <div>
                <label for="autName" class="mb-2">Author</label><br>
              <select id="autName" name="autName">
              <?php 
                    while ($row = mysqli_fetch_assoc($allAuthor)) {
                    ?>
                      <option value="<?php echo $row['author_id']; ?>"><?php echo $row['author_name']; ?></option>
                    <?php
                    }?>
             </select><br>
              </div>
              <!--Publish Date-->
              <div>
                <label for="pdate">Publish Date</label><br>
                <input  class="inpttxt"  type="date" id="pdate" name="pudate">
              </div>
              <!--Category-->
              <div>
             
                <label for="catgry" class="mb-2">Category</label><br>
                <select id="catgry" name="catgry">
                    <?php 
                    while ($row = mysqli_fetch_assoc($allcategory)) {
                    ?>
                      <option value="<?php echo $row['category_id']; ?>"><?php echo $row['category_name']; ?></option>
                    <?php
                    }?>
                  </select><br>

             </div>
             <!--Book price-->
             <div>
              <label for="Bprice">Book price(per unit)</label><br>
              <input  class="inpttxt" name="book_Price" type="number" id="Bprice" placeholder="100">
            </div>
             <!--Actual Sotck-->
             <div>
              <label for="Astk">Actual Stock</label><br>
              <input  class="inpttxt" name="act_Stock" type="number" id="Astk" placeholder="100">
            </div>
            <!--Current Stock-->
             <div>
              <label for="Cstk">Current Stock</label>
              <input  class="inpttxt" type="number" id="Cstk" name="Cstk" placeholder="15" disabled><br><br>
             </div>
              <!--Issued Books-->
              <div>
                <label for="Istk">Issued Books</label>
                <input  class="inpttxt" type="number" id="Istk" name="Istk" placeholder="3" ><br><br>
               </div>
              
              </div>
              <!--End of flex split-->
              
               <button class="button add" type="submit" name="submit">Add</button>
            </form>

            
           

            

                
              
            
                    
         

           
          
          
         
        

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js">
           
        </script>
          </div>

        <?php 
          include_once('footerAdmin.php');
        ?>


</div>
  </body>
</html>
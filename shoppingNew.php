<!--SQL DATABASE connection-->
<?php
  
  session_start();
  $mysqli = require __DIR__."/DBconnect.php";
  
  if (!isset($_SESSION['userId'])) {
    $_SESSION['status'] = "You are not Logged in";
            $_SESSION['status_code']= "error";
            
    header("Location: Sign-in.php"); 
    exit(0);
    
  }
  $userID = $_SESSION['userId'];

  $sql = "SELECT * FROM `shopping_cart` WHERE userID = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("i", $userID);
$stmt->execute();
$allproduct = $stmt->get_result();


  /*$sql1 = "SELECT * FROM book WHERE Stocked_Books >= Current_Stock";
  $result = $mysqli->query($sql1);*/

   
  

  if(isset($_POST['deletebutton'])){
    $deleteItem = $_POST['delete'];

    $sql = "DELETE FROM `shopping_cart` WHERE book_name = '$deleteItem';";
    if($result = $mysqli->query($sql)){
      $_SESSION['message'] = "product Removed From cart succesfully";
      header("Location:shoppingNew.php");
      exit(0);
    }

  }
?>


<!doctype html>
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
    <title>Shopping Cart</title>
    <script>
        function totalclick(click){
          const totalclick =document.getElementById('totalclick');
          const sumvalue =parseInt(totalclick.innerText) +click;
          console.log(sumvalue + click);
          totalclick.innerText =sumvalue;
        }

    </script>
  </head>
<body>
    <div class="background">
        <nav class="navbar navbar-expand-lg navbar-dark py-5" style="background-color: rgba(10, 10, 102, 0.541);">
            <div class="container">
              <a class="navbar-brand" href="#">  <img src="New_logo.png" alt="Book_shop_logo"></a>
              <h1 class="cartname">Shopping cart</h1><br>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="category.php">Catagory</a>
                  </li>
				  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="newWishlist.php">Wishlist</a>
                  </li>
				  <li class="nav-item">
                    <a class="nav-link text-warning active" aria-current="page" href="#">Shopping cart</a>
                  </li>
                 
                  

                </nav>
<!--shopping cart-->
<?php 
  include "alert.php";
  include "message.php";
?>
<section class="h-100 h-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12">
          <div class="card card-registration card-registration-2" style="border-radius: 15px;background-color: rgba(255, 255, 255, 0.871);">
            <div class="card-body p-0">
              <div class="row g-0">
                <div class="col-lg-8">
                  <div class="p-5">
                    <div class="d-flex justify-content-between align-items-center mb-5">
                      <h1 class="fw-bold mb-0 text-black">Shopping Cart</h1>
                      <h6 class="mb-0 text-muted">3 items</h6>
                    </div>
                    
          <?php 
            while($row = mysqli_fetch_assoc($allproduct)){
          ?>
                    <hr class="my-4">
                    
                    <form action="" method="post">
                    <div class="row mb-4 d-flex justify-content-between align-items-center">
                      <div class="col-md-2 col-lg-2 col-xl-2">
                        <img
                          src="<?php echo $row['image_url'] ?>"
                          class="img-fluid rounded-3" alt="Cotton T-shirt">
                      </div>
                      <div class="col-md-3 col-lg-3 col-xl-3">
                        <h6 class="text-muted"><?php echo $row['category'] ?></h6>
                        <h6 class="text-black mb-0"><?php echo $row['book_name'] ?></h6>
                      </div>
                      <div class="col-md-3 col-lg-3 col-xl-2 d-flex">

                        <button  class="input-group-text" onclick="totalclick(-1)" type="hidden">-</button>
                        <span  class="input-group-text" type="number" id="totalclick">0</span>
                        <button class="input-group-text" onclick="totalclick(1)" type="hidden">+</button>

                      </div>
                      <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                        <h6 class="mb-0">Rs. <?php echo $row['price'] ?>.00</h6>
                      </div>
                      <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                      
                          <input type="hidden" name="delete" value="<?php echo $row['book_name'] ?>">
                        <button class="btn" type="submit" name="deletebutton" ><i class="fas fa-times"></i></button>
                      </form>
                        
                      </div>
                    </div>
                    <?php
            }
            ?>
  
                   
  
                    <hr class="my-4">
  
                    <div class="pt-5">
                      <h6 class="mb-0"><a href="#!" class="text-body"><i
                            class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a></h6>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 bg-grey">
                  <div class="p-5">
                    <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
                    <hr class="my-4">
  
                    <div class="d-flex justify-content-between mb-4">
                      <h5 class="text-uppercase">items 3</h5>
                      <h5>Rs. 1,650.00</h5>
                    </div>
  
                    
  
                    
  
                    <h5 class="text-uppercase mb-3">Promo Code</h5>
  
                    <div class="mb-5">
                      <div class="form-outline">
                        <input type="text" id="form3Examplea2" class="form-control form-control-lg" placeholder="Enter your code" />
                        
                      </div>
                    </div>
  
                    <hr class="my-4">
  
                    <div class="d-flex justify-content-between mb-5">
                      <h5 class="text-uppercase">Total price</h5>
                      <h5>Rs. 4,650.00</h5>
                    </div>
  
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--card payment-->
      <div class="card shadow-2-strong mb-5 mb-lg-0" style="border-radius: 16px; background-color: rgba(255, 255, 255, 0.847); margin: 5%;">
        <div class="card-body p-4">

          <div class="row">
            <div class="col-md-6 col-lg-4 col-xl-3 mb-4 mb-md-0">
              <form>
                <div class="d-flex flex-row pb-3">
                  <div class="d-flex align-items-center pe-2">
                    <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel1v"
                      value="" aria-label="..." checked />
                  </div>
                  <div class="rounded border w-100 p-3">
                    <p class="d-flex align-items-center mb-0">
                      <i class="fab fa-cc-mastercard fa-2x text-dark pe-2"></i>Credit
                      Card
                    </p>
                  </div>
                </div>
                <div class="d-flex flex-row pb-3">
                  <div class="d-flex align-items-center pe-2">
                    <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel2v"
                      value="" aria-label="..." />
                  </div>
                  <div class="rounded border w-100 p-3">
                    <p class="d-flex align-items-center mb-0">
                      <i class="fab fa-cc-visa fa-2x fa-lg text-dark pe-2"></i>Debit Card
                    </p>
                  </div>
                </div>
                <div class="d-flex flex-row">
                  <div class="d-flex align-items-center pe-2">
                    
                  </div>
                  <div class="rounded border w-100 p-3">
                   
                  </div>
                </div>
              </form>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-6">
              <div class="row">
                <div class="col-12 col-xl-6">
                  <div class="form-outline mb-4 mb-xl-5">
                    <input type="text" id="typeName" class="form-control form-control-lg" siez="17"
                      placeholder="John Smith" />
                    <label class="form-label" for="typeName">Name on card</label>
                  </div>

                  <div class="form-outline mb-4 mb-xl-5">
                    <input type="text" id="typeExp" class="form-control form-control-lg" placeholder="MM/YY"
                      size="7" id="exp" minlength="7" maxlength="7" />
                    <label class="form-label" for="typeExp">Expiration</label>
                  </div>
                </div>
                <div class="col-12 col-xl-6">
                  <div class="form-outline mb-4 mb-xl-5">
                    <input type="text" id="typeText" class="form-control form-control-lg" siez="17"
                      placeholder="1111 2222 3333 4444" minlength="19" maxlength="19" />
                    <label class="form-label" for="typeText">Card Number</label>
                  </div>

                  <div class="form-outline mb-4 mb-xl-5">
                    <input type="password" id="typeText" class="form-control form-control-lg"
                      placeholder="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3" />
                    <label class="form-label" for="typeText">Cvv</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-xl-3">
              <div class="d-flex justify-content-between" style="font-weight: 500;">
                <p class="mb-2">Subtotal</p>
                <p class="mb-2">Rs. 4,650.00</p>
              </div>

              <div class="d-flex justify-content-between" style="font-weight: 500;">
                <p class="mb-0">Discount</p>
                <p class="mb-0">Rs. 0.00</p>
              </div>

              <hr class="my-4">

              <div class="d-flex justify-content-between mb-4" style="font-weight: 500;">
                <p class="mb-2">Total</p>
                <p class="mb-2">Rs. 4,650.00</p>
              </div>
           
            <!--bank simulator-->
               <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalToggleLabel">Authenticate Transacion</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <!--First model detail start-->
                  
                   <div class="text-success" style="background-color: antiquewhite; padding: 6%; border-radius: 2px;" aria-disabled="true">
                    <p>
                      We have sent an OTP to your registered mobile number xxxxxxx908 please enter your OTP to authenticate this transacion
                    </p>
                  </div>
                  <label style="font-weight: 600; color: gray;">One Time Password (OTP)</label><br>
                 
                  
                  <!--Text restriction-->
                  <script>function checkInput(ob) {
                    const invalidChars = /[^0-9]/gi;
                    if(invalidChars.test(ob.value)) {
                      ob.value = ob.value.replace(invalidChars, "");
                    }

                    
                  };
                </script> 
                <!--OTP verification-->
                <button  onclick="generateOTPcode()" class="btn btn-primary">Send OTP</button>
                  <br><br>
                  <input maxlength="6" onChange="checkInput(this)"style="padding:10px;"
                   onKeyup="checkInput(this)" type="text" id="userInput"  placeholder="Enter the OTP">
                  <br><br>
                  <button class="btn btn-primary" style="margin-left: 80%;" onclick="confirmOTPcode()">Confirm</button>
                  <div id="result" class="result"></div>

                  
                   <!--First model detail end-->
                 </div>
                 <div class="modal-footer">
                
                </div>
              </div>
            </div>
          </div>
          <a class="btn btn-primary"  data-bs-toggle="modal" href="#exampleModalToggle" role="button" >Checkout</a>

            </div>
          </div>

        </div>
  </section>
  <script>
 


let OTPcode;
    
    function generateOTPcode() {
      
      OTPcode = Math.floor(100000 + Math.random() * 900000);
      
      
      alert("Your OTP Number is: " + OTPcode);
    }
    
    function confirmOTPcode() {
      
      const userInput = document.getElementById("userInput").value;
      
      
      if (userInput === OTPcode.toString()) {
        location.href = "otpvalid.php";
      } else {
        location.href = "otpinvalid.php";
      }
    }





</script>

                    

   

    <?php 
      require_once('Footer.php');
    ?>


  
  </div>
  </div>
</div>
  </body>
</html>
<?php

session_start();

    //Database connect
    $mysqli = require __DIR__."/DBconnect.php";
   


// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
   // Check if the file was uploaded without errors
   if (isset($_FILES["image"]) && $_FILES["image"]["error"] === UPLOAD_ERR_OK) {
      // Define the file path to save the uploaded file
      $uploadDirectory = "up/";
      $fileName = $_FILES["image"]["name"];
      $filePath = $uploadDirectory . $fileName;

      // Move the uploaded file to the specified location
      if (move_uploaded_file($_FILES["image"]["tmp_name"], $filePath)) {
      
         // File was successfully saved, now store the file URL and book details in the database
         $book_Id =$_POST["Bid"];
         $bookName = $_POST["book_Name"];
         $bookPrice = $_POST["book_Price"];
         $language = $_POST["lng"];
         $publisher = $_POST["pub"];
         $author = $_POST["autName"];
         $category = $_POST["catgry"];
         $publishDate = $_POST["pudate"];
         $stockedBook = $_POST["act_Stock"]; 

         

         if (!empty($fileName) && !empty($book_Id) && !empty($bookName) && !empty($bookPrice) && !empty($language) && !empty($publisher) && !empty($author) && !empty($category) && !empty($publishDate) && !empty($stockedBook)) {
            $query = "INSERT INTO book (ISBN_No, image_name, image_url, Book_Name, Book_Price, Language, publisher_fk, author_fk, category_fk, Publish_date, Stocked_Books) VALUES ('$book_Id','$fileName', '$filePath','$bookName','$bookPrice','$language','$publisher','$author','$category','$publishDate','$stockedBook')";
            
            if ($mysqli->query($query) === TRUE) {

               $_SESSION['status'] = "Data uploaded successfully.";
               $_SESSION['status_code'] = "success";
               header("Location:Admin_Book_Manager.php");
               EXIT(0);
            } else {
            echo "Error uploading image: " . $mysqli->error;
            }
         } else {
            echo "Error:one or more fields are empty.";
         }
      } else {
         echo "Error moving uploaded file.";
      }
   } else {
      echo "Error: " . $_FILES["image"]["error"];
   }
}


// Close the database connection
$mysqli->close();
?>

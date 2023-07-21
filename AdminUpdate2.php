<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Book Details</title>
    <style>
        body{
            background-color: purple;
        }
        h1{
            color : lightblue;
        }
        input{
            width: 50%;
            height: 10%;
            border: 80%;
            border-radius; 25%;
            padding: 10px 20px 10px 20px;
            margin: 05px 0px 10px 0px;
            box-shadow: 1px 1px 2px 1px;
        }
    </style>
</head>
<body>
    <center>
        <h1>UPDATION OF BOOK DETAILS</h1>

        <form action="" method="POST">
            
        <input type="text" name="Bid" placeholder="Enter Book ID"></br>
        <input type="text" name="book_Name" placeholder="Enter Book Name"></br>
        <input type="text" name="book_Price" placeholder="Enter Book Price"></br>
        <input type="text" name="lng" placeholder="Enter Language"></br>
        <input type="text" name="pub" placeholder="Enter Publisher"></br>
        <input type="text" name="autName" placeholder="Enter Author Name"></br>
        <input type="text" name="catgry" placeholder="Enter Category"></br>
        <input type="text" name="pudate" placeholder="Enter Published Date"></br>
        <input type="text" name="act_Stock" placeholder="Enter Actually Stocked Books qty"></br>
        <input type="text" name="image" placeholder="Enter Image Name"></br>

        <button type "submit" name="update">UPDATE</button>
        </form>
    </center>
</body>
</html>

<?php
session_start();

$mysqli = require __DIR__."/DBconnect.php";
 
if(isset($_POST['update'])){
    $ISBN_No = $_POST['Bid'];

    $query = "UPDATE `book` SET Book_Name ='$_POST[book_Name]', Book_Price='$_POST[book_Price]', Language='$_POST[lng]', Publisher_Name='$_POST[pub]', Author_Name='$_POST[autName]', Category_Name='$_POST[catgry]', Publish_date='$_POST[pudate]', Stocked_Books='$_POST[act_Stock]', image_name='$_POST[image]' WHERE ISBN_No='$_POST[Bid]' ";
    $query_run = mysqli_query($mysqli,$query);

    if($query_run){
        echo "Update Successfully!";
    }
    else{
        echo "Sorry! Not Update.";
    }
}
?>
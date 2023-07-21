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
        <h1>DELETE OF BOOK DETAILS</h1>

        <form action="" method="POST">
            
        <input type="text" name="Bid" placeholder="Enter Book ID to Delete"></br></br>

        <button type "submit" name="delete">DELETE</button>
        </form>
    </center>
</body>
</html>

<?php
session_start();

$mysqli = require __DIR__."/DBconnect.php";
 
if (isset($_POST['delete'])){
    $ISBN_No = $_POST['Bid'];

    $query = "DELETE FROM `book` WHERE ISBN_No='$_POST[Bid]' ";
    $query_run = mysqli_query($mysqli,$query);

    if($query_run){
        echo "Delete Successfully!";
    }
    else{
        echo "Sorry! Not Deleted.";
    }
}
?>
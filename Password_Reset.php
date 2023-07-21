<?php
    //Database connect
    $mysqli = require __DIR__."/DBconnect.php";
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
    <title>Password Reset</title>
    <style>
        .center {
            
            text-align:center;
            margin-top: 5%;
            background-color: #f1f1f1;
            border: 1px solid #ccc;
            padding:4%;
            margin-left: 35%;
            width: 400px;
            height: auto;
        }
    </style>
</head>
<body>

    <div class="center" class="container">
    <h1>Password Reset</h1>
    
        <form method="POST" action="passwordResetProcess.php">
            <label>User Name:</label>
            <input type="text" class="form-control" id="Name" name="Name" required>
            <br><br>
            <label>New Password:</label><br>
            <input type="password" class="form-control" name="new_password" required>
            <br><br>
            <label>Confirm Password:</label><br>
            <input type="password" class="form-control" name="confirm_password" required>
            <br><br>
            <button type="submit" class="btn btn-primary">Reset Password</button>
        </form>

</body>
</html>

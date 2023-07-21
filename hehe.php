<?php 
    include_once('DBconnect.php');

    $sql = "SELECT * FROM author;";
    $result = mysqli_query($connect, $sql);
    
    while ($row = mysqli_fetch_assoc($result)){
        echo $row['Author_Name']."<br>";
    }
?>


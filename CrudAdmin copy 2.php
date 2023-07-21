<?php
session_start();
include_once "DBconnect.php";

// Add new item to category
if (isset($_POST['addC'])) {
    $catgry = $_POST['catgry'];

    if (empty($catgry)) {
        $_SESSION['status'] = "Category name cannot be empty";
        $_SESSION['status_code']= "error";
        header("Location: Admin_Book_Manager.php");
        exit(0);
    }

    $sqlC = "INSERT INTO `category`(category_name) VALUE('$catgry'); ";

    if ($mysqli->query($sqlC) === TRUE) {
        $_SESSION['message'] = "Category uploaded successfully";
        header("Location: Admin_Book_Manager.php");
        exit(0);
    }
}

// Add new item to publisher
if (isset($_POST['addP'])) {
    $publisher = $_POST['publish'];

    if (empty($publisher)) {
        
        $_SESSION['status'] = "Publisher name cannot be empty";
        $_SESSION['status_code']= "error";
        header("Location: Admin_Book_Manager.php");
        exit(0);

    }

    $sqlC = "INSERT INTO `publisher`(publisher) VALUE('$publisher'); ";

    if ($mysqli->query($sqlC) === TRUE) {
        $_SESSION['message'] = "Publisher uploaded successfully";
        header("Location: Admin_Book_Manager.php");
        exit(0);
    }
}

// Add new item to author
if (isset($_POST['addA'])) {
    $Author = $_POST['aut'];

    if (empty($Author)) {
        $_SESSION['status'] = "Author name cannot be empty";
        $_SESSION['status_code']= "error";
        header("Location: Admin_Book_Manager.php");
        exit(0);
    }

    $sqlC = "INSERT INTO `author`(author_name) VALUE('$Author'); ";

    if ($mysqli->query($sqlC) === TRUE) {
        $_SESSION['message'] = "Author uploaded successfully";
        header("Location: Admin_Book_Manager.php");
        exit(0);
    }
}

// Delete item from category
if (isset($_POST['DeleteP'])) {
    $pubd = $_POST['publishD'];

    if (empty($pubd)) {
        $_SESSION['status'] = "Publisher name cannot be empty";
        $_SESSION['status_code'] = "error";
        header("Location: Admin_Book_Manager.php");
        exit(0);
    }

    $sqlC = "DELETE FROM `publisher` WHERE publisher = '$pubd';";

    if ($mysqli->query($sqlC) === TRUE) {
        $affec = $mysqli->affected_rows;
        if ($affec > 0) {
            $_SESSION['message'] = "Publisher deleted successfully";
        } else {
            $_SESSION['status'] = "Publisher Not Found in Database";
            $_SESSION['status_code'] = "error";
        }
        header("Location: Admin_Book_Manager.php");
        exit(0);
    } else {
        $_SESSION['status'] = "Error deleting publisher: ";
        $_SESSION['status_code'] = "error";
        header("Location: Admin_Book_Manager.php");
        exit(0);
    }

}
// Delete item from author

if (isset($_POST['DeleteP'])) {
    $pubd = $_POST['publishD'];

    if (empty($pubd)) {
        $_SESSION['status'] = "Publisher name cannot be empty";
        $_SESSION['status_code'] = "error";
        header("Location: Admin_Book_Manager.php");
        exit(0);
    }

    $sqlC = "DELETE FROM `publisher` WHERE publisher = '$pubd';";

    if ($mysqli->query($sqlC) === TRUE) {
        $affec = $mysqli -> affected_rows;
        if ($affec > 0) {
            $_SESSION['message'] = "Publisher deleted successfully";
        } else {
            $_SESSION['status'] = "Publisher Not Found in Database";
            $_SESSION['status_code'] = "error";
        }
        header("Location: Admin_Book_Manager.php");
        exit(0);
    } else {
        $_SESSION['status'] = "Error deleting publisher: ";
        $_SESSION['status_code'] = "error";
        header("Location: Admin_Book_Manager.php");
        exit(0);
    }

}
// Delete item from Publisher
if (isset($_POST['DeleteP'])) {
    $pubd = $_POST['publishD'];

    if (empty($pubd)) {
        $_SESSION['status'] = "Publisher name cannot be empty";
        $_SESSION['status_code'] = "error";
        header("Location: Admin_Book_Manager.php");
        exit(0);
    }

    $sqlC = "DELETE FROM `publisher` WHERE publisher = '$pubd';";

    if ($mysqli->query($sqlC) === TRUE) {
        $affec = $mysqli->affected_rows;
        if ($affec > 0) {
            $_SESSION['message'] = "Publisher deleted successfully";
        } else {
            $_SESSION['status'] = "Publisher Not Found in Database";
            $_SESSION['status_code'] = "error";
        }
        header("Location: Admin_Book_Manager.php");
        exit(0);
    } else {
        $_SESSION['status'] = "Error deleting publisher: ";
        $_SESSION['status_code'] = "error";
        header("Location: Admin_Book_Manager.php");
        exit(0);
    }
}

?>

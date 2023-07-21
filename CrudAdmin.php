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
if (isset($_POST['DeletC'])) {
    $catd = $_POST['catgryD'];

    if (empty($catd)) {
        $_SESSION['status'] = "Category name cannot be empty";
        $_SESSION['status_code'] = "error";
        header("Location: Admin_Book_Manager.php");
        exit(0);
    }

    $sqlD = "DELETE FROM `category` WHERE category_name = '$catd';";

    if ($mysqli->query($sqlD) === TRUE) {
        $affec = $mysqli->affected_rows;
        if ($affec > 0) {
            $_SESSION['message'] = "Category deleted successfully";
        } else {
            $_SESSION['status'] = "Category Not Found in Database";
            $_SESSION['status_code'] = "error";
        }
        header("Location: Admin_Book_Manager.php");
        exit(0);
    } else {
        $_SESSION['status'] = "Error deleting Category: ";
        $_SESSION['status_code'] = "error";
        header("Location: Admin_Book_Manager.php");
        exit(0);
    }

}
// Delete item from author

if (isset($_POST['DeleteA'])) {
    $autd = $_POST['autD'];

    if (empty($autd)) {
        $_SESSION['status'] = "Author name cannot be empty";
        $_SESSION['status_code'] = "error";
        header("Location: Admin_Book_Manager.php");
        exit(0);
    }

    $sqlD = "DELETE FROM `author` WHERE author_name = '$autd';";

    if ($mysqli->query($sqlD) === TRUE) {
        $affec = $mysqli -> affected_rows;
        if ($affec > 0) {
            $_SESSION['message'] = "Author deleted successfully";
        } else {
            $_SESSION['status'] = "Author Not Found in Database";
            $_SESSION['status_code'] = "error";
        }
        header("Location: Admin_Book_Manager.php");
        exit(0);
    } else {
        $_SESSION['status'] = "Error deleting Author: ";
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

    $sqlD = "DELETE FROM `publisher` WHERE publisher = '$pubd';";

    if ($mysqli->query($sqlD) === TRUE) {
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


//update publisher
if (isset($_POST['updateP'])) {
    $pubU = $_POST['pubU'];
    $pubN = $_POST['pubN'];


    if (empty($pubU)) {
        $_SESSION['status'] = "Current Publisher name cannot be empty";
        $_SESSION['status_code'] = "error";
        header("Location: Admin_Book_Manager.php");
        exit(0);
    }

    $pubU = $mysqli->real_escape_string($pubU);
    $pubN = $mysqli->real_escape_string($pubN);


    $sqlD = "SELECT * FROM `publisher` WHERE publisher = '$pubU';";
    $result = $mysqli->query($sqlD);

    if ($result) {
        $affec = $result->num_rows;
        if ($affec > 0) {
            $sqlU = "UPDATE `publisher` SET publisher = '$pubN' WHERE publisher = '$pubU';";
            if ($mysqli->query($sqlU)) {
                $_SESSION['message'] = "Publisher Updated successfully";
            } else {
                $_SESSION['status'] = "Error updating publisher: " . $mysqli->error;
                $_SESSION['status_code'] = "error";
            }
        } else {
            $_SESSION['status'] = "Publisher Not Found in Database";
            $_SESSION['status_code'] = "error";
        }
    } else {
        $_SESSION['status'] = "Error fetching publisher: " . $mysqli->error;
        $_SESSION['status_code'] = "error";
    }

    header("Location: Admin_Book_Manager.php");
    exit(0);
}

//update category
if (isset($_POST['updateC'])) {
    $catU = $_POST['catU'];
    $catN = $_POST['catN'];


    if (empty($catU)) {
        $_SESSION['status'] = "Current Category name cannot be empty";
        $_SESSION['status_code'] = "error";
        header("Location: Admin_Book_Manager.php");
        exit(0);
    }


    $catU = $mysqli->real_escape_string($catU);
    $catN = $mysqli->real_escape_string($catN);


    $sqlD = "SELECT * FROM `category` WHERE category_name = '$catU';";
    $result = $mysqli->query($sqlD);

    if ($result) {
        $affec = $result->num_rows;
        if ($affec > 0) {
           
            $sqlU = "UPDATE `category` SET category_name = '$catN' WHERE category_name = '$catU';";
            if ($mysqli->query($sqlU)) {
                $_SESSION['message'] = "Category Updated successfully";
            } else {
                $_SESSION['status'] = "Error updating category: " . $mysqli->error;
                $_SESSION['status_code'] = "error";
            }
        } else {
            $_SESSION['status'] = "Category Not Found in Database";
            $_SESSION['status_code'] = "error";
        }
    } else {
        $_SESSION['status'] = "Error fetching category: " . $mysqli->error;
        $_SESSION['status_code'] = "error";
    }

    header("Location: Admin_Book_Manager.php");
    exit(0);
}

//update Author

if (isset($_POST['updateA'])) {
    $autU = $_POST['autU'];
    $autN = $_POST['autN'];

    if (empty($autU)) {
        $_SESSION['status'] = "Current Author name cannot be empty";
        $_SESSION['status_code'] = "error";
        header("Location: Admin_Book_Manager.php");
        exit(0);
    }

    $autU = $mysqli->real_escape_string($autU);
    $autN = $mysqli->real_escape_string($autN);

    
    $sqlD = "SELECT * FROM `authors` WHERE author_name = '$autU';";
    $result = $mysqli->query($sqlD);

    if ($result) {
        $affec = $result->num_rows;
        if ($affec > 0) {
           
            $sqlU = "UPDATE `authors` SET author_name = '$autN' WHERE author_name = '$autU';";
            if ($mysqli->query($sqlU)) {
                $_SESSION['message'] = "Author Updated successfully";
            } else {
                $_SESSION['status'] = "Error updating author: " . $mysqli->error;
                $_SESSION['status_code'] = "error";
            }
        } else {
            $_SESSION['status'] = "Author Not Found in Database";
            $_SESSION['status_code'] = "error";
        }
    } else {
        $_SESSION['status'] = "Error fetching author: " . $mysqli->error;
        $_SESSION['status_code'] = "error";
    }

    header("Location: Admin_Book_Manager.php");
    exit(0);
}









?>

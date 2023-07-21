<?php
session_start();
include_once "DBconnect.php";
          //add new item to category

          if(isset($_POST['addC'])){
            $catgry = $_POST['catgry'];

            $sqlC = "INSERT INTO `category`(category_name) VALUE('$catgry'); ";

            if($mysqli->query($sqlC)===TRUE){

           $_SESSION['message'] = "Category uploaded successfully";
           header("Location:Admin_Book_Manager.php");
            
            exit(0);

              
               
               

            }
          }
            //add new item to publisher


          if(isset($_POST['addP'])){
            $publisher = $_POST['publish'];

            $sqlC = "INSERT INTO `publisher`(publisher) VALUE('$publisher'); ";

            if($mysqli->query($sqlC)===TRUE){

              $_SESSION['message'] = "publisher uploaded successfully";
              header("Location:Admin_Book_Manager.php");
              
              exit(0);
  
               

            }
          }
            //add new item to author


          if(isset($_POST['addA'])){
            $Author = $_POST['aut'];

            $sqlC = "INSERT INTO `author`(author_name) VALUE('$Author'); ";

            if($mysqli->query($sqlC)===TRUE){

              $_SESSION['message'] = "Author uploaded successfully";
              header("Location:Admin_Book_Manager.php");
              
              exit(0);
  
               

            }
          }

                    // Delete item from category
            if (isset($_POST['DeletC'])) {
              $catd = $_POST['catgryD'];
              $sqlC = "DELETE FROM `category` WHERE category_name = '$catd';";
              if ($mysqli->query($sqlC) === TRUE) {
                  $_SESSION['message'] = "Category deleted successfully";
                  header("Location:Admin_Book_Manager.php");
                  exit(0);
              }
            }
            
            // Delete item from auhtor
                    if (isset($_POST['DeleteA'])) {
                        $autd = $_POST['autD'];
                        $sqlC = "DELETE FROM `author` WHERE author_name = '$autd';";
                        if ($mysqli->query($sqlC) === TRUE) {
                            $_SESSION['message'] = "Category deleted successfully";
                            header("Location:Admin_Book_Manager.php");
                            exit(0);
                        }
                      }

               // Delete item from Publisher
            if (isset($_POST['DeleteP'])) {
                $pubd = $_POST['publishD'];
                $sqlC = "DELETE FROM `publisher` WHERE publisher = '$pubd';";
                if ($mysqli->query($sqlC) === TRUE) {
                    $_SESSION['message'] = "Category deleted successfully";
                    header("Location:Admin_Book_Manager.php");
                    exit(0);
                }
              }


          ?>
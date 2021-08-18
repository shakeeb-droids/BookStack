<?php
  include 'conection.php';
  $Book_name = $_POST['Book-name'];
  $ISBN_no = $_POST['ISBN-no'];
  $Author = $_POST['Author'];
  $Category = $_POST['Category'];
  $Publisher = $_POST['Publisher'];
  $Price = $_POST['Price'];
  $Stock = $_POST['Stock'];
  
  $sql = "SELECT * FROM book WHERE Book_name = '$Book_name'" ;
    $out = mysqli_query($con, $sql) or die(mysqli_error($con));
    $row = mysqli_num_rows($out);
    if($row>0){
        $var1 = "<span style='color: red';><h5>Book Already Exist!</h5></span>";
        header("location:book-entry.php?var2=".$var1);
     } else{
        $sql = "INSERT INTO book(Book_name, ISBN_no, Author, Category, Publisher, Price, Stock) Values('$Book_name', '$ISBN_no', '$Author', '$Category', '$Publisher', '$Price', '$Stock')";
        $out = mysqli_query($con, $sql) or die(mysqli_error($con));
        header('location:admin.php');
    }

  
  
?>
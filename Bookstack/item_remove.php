<?php
 require 'conection.php';
 $book_id= $_GET['id'];
 $user_id= $_SESSION['id'];
 $sql= "DELETE FROM cart WHERE User_id='$user_id' AND Book_id='$book_id'";
 $result= mysqli_query($con, $sql) or die(mysqli_error($con));
 header('location:cart.php');
?>
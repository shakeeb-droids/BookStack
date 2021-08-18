<?php
include 'conection.php';

$User_id= $_SESSION['id'];
$Book_id= $_GET['id'];
$Quantity= $_GET['quantity'];
$Price= $_GET['price'];

$total = $Quantity*$Price;

$sql = "SELECT * FROM book WHERE Book_id = '$Book_id'";
$out = mysqli_query($con, $sql) or die(mysqli_error($con));
$row = mysqli_fetch_array($out);
$stock = $row['Stock']; 

if($stock<$Quantity){
     $v1 = "<span style='color:red'><br>Only ".$stock." pc left!<br></span>";
     header("location:products.php?v1=".$v1."&book_id=".$Book_id);
} else{
    $sql= "INSERT INTO cart(User_id, Book_id, Quantity, Total_Price) values('$User_id', '$Book_id', '$Quantity', '$total')";
    $result= mysqli_query($con, $sql) or die(mysqli_error($con));
    header('location:products.php');
}
?>
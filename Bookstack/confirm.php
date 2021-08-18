<?php
 require 'conection.php';
 
$Book_id = $_GET['Book_id'];
$User_id = $_SESSION['id'];

$sql1 = "UPDATE cart SET status='Purchased' WHERE User_id='$User_id' AND Book_id IN ($Book_id) AND status='Added to Cart'";
$out1 = mysqli_query($con, $sql1) or die(mysqli_error($con));

$sql2 = "SELECT * FROM cart WHERE status='Purchased'";
$out2 = mysqli_query($con, $sql2) or die(mysqli_error($con));

//$sql3 = "SELECT MAX(Purchase_id) from Purchase";
//$out3 = mysqli_query($con, $sql3) or die(mysqli_error($con));
//$row = mysqli_fetch_array($out3);
$Purchase_id = uniqid('PID');
    
/*if($Purchase_id==""){
        $Purchase_id = 100;
} else{
        $Purchase_id++;

}*/

while($row = mysqli_fetch_array($out2)){
    $Book_id = $row['Book_id'];
    $Quantity = $row['Quantity'];
    $Total_Price = $row['Total_Price'];
    
    $sql = "INSERT INTO Purchase(Purchase_id, Book_id, User_id, Quantity, Total_Price) Values('$Purchase_id', '$Book_id', '$User_id', '$Quantity', '$Total_Price')";
    $out = mysqli_query($con, $sql) or die(mysqli_error($con));


}



$sql4 = "DELETE from cart WHERE status='Purchased'";
$out4 = mysqli_query($con, $sql4) or die(mysqli_error($con));

$sql5 = "TRUNCATE table cart";
$out5 = mysqli_query($con, $sql5) or die(mysqli_error($con));

$sql6 = "SELECT * FROM purchase where Purchase_id = '$Purchase_id'";
$out6 = mysqli_query($con, $sql6) or die(mysqli_error($con));
while($row6 = mysqli_fetch_array($out6)){
     $Book_id = $row6['Book_id'];
     $sql = "SELECT * FROM book WHERE Book_id='$Book_id'";
     $out = mysqli_query($con, $sql) or die(mysqli_error($con));
     $row = mysqli_fetch_array($out);
     $Stock = $row['Stock'];
     $new_stock = $Stock - $row6['Quantity'];

     $sq = "UPDATE book SET Stock='$new_stock' WHERE Book_id='$Book_id'";
     $output = mysqli_query($con, $sq) or die(mysqli_error($con));
}




$Transaction_id = uniqid('BSTK');
date_default_timezone_set("Asia/Kolkata");
$Transaction_timestamp = date('Y/m/d')." ".date('H:i:s');
$Pay_method = $_GET['paymethod'];
$Total_Price = $_GET['Sub-Total'];

if($Pay_method=="Pay-On-Delivery"){
     $Card_number = "0000000000000000";
     $sql = "INSERT INTO Transaction(Transaction_id, Purchase_id, Card_number, Pay_method, Total_Price, Transaction_timestamp) Values('$Transaction_id', '$Purchase_id', '$Card_number', '$Pay_method', '$Total_Price', '$Transaction_timestamp')";
     $out = mysqli_query($con, $sql) or die(mysqli_error($con));
} else{
    $Card_number = $_GET['card'];
    $sql = "INSERT INTO Transaction(Transaction_id, Purchase_id, Card_number, Pay_method, Total_Price, Transaction_timestamp) Values('$Transaction_id', '$Purchase_id', '$Card_number', '$Pay_method', '$Total_Price', '$Transaction_timestamp')";
     $out = mysqli_query($con, $sql) or die(mysqli_error($con));
}





 header('location:success.php?id='.$Transaction_id);
?>
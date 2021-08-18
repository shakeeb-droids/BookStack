<?php
function check_cart($Book_id){
include 'conection.php';
$User_id= $_SESSION['id'];
$sql= "SELECT * FROM cart WHERE Book_id='$Book_id' AND User_id ='$User_id'";
$result= mysqli_query($con, $sql) or die(mysqli_error($con));
if(mysqli_num_rows($result)>=1){
    return 1;
} else{
    return 0;
}
}
?>
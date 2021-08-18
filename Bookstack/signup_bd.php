<?php

include 'conection.php';

$fn = mysqli_real_escape_string( $con, $_POST['fname']);
$ln = mysqli_real_escape_string( $con, $_POST['lname']);
$email = mysqli_real_escape_string( $con, $_POST['email']);
$pass = mysqli_real_escape_string( $con, $_POST['password']);
$contact = mysqli_real_escape_string( $con,$_POST['contact']);
$add = mysqli_real_escape_string( $con,$_POST['address']);

$sql = "SELECT * FROM customer WHERE email = '$email'" ;
$out = mysqli_query($con, $sql) or die(mysqli_error($con));
$row = mysqli_num_rows($out);
if($row >0)
{
    $var1 = "<span style='color: red';><h5>User with the email already exist!</h5></span>";
    header("location:signup.php?var2=".$var1);
}
else{
    $sql2 = "INSERT INTO customer (First_name, Last_name, Email, Password, Phone_number, Address) VALUES ('$fn', '$ln', '$email', '$pass', '$contact', '$add')";
    $out2 = mysqli_query($con, $sql2) or die(mysqli_error($con)); 
    $_SESSION['id']=mysqli_insert_id($con);
    $_SESSION['email'] = $email;
     header('location:products.php');
}
?>
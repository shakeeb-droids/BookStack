<?php

include 'conection.php';

$em = mysqli_real_escape_string($con, $_POST['email']);
$pass = mysqli_real_escape_string($con, $_POST['password']);

$sql = "SELECT * FROM customer WHERE Email = '$em' AND Password = '$pass'";
$out = mysqli_query($con, $sql) or die(mysqli_error($con));
$row = mysqli_num_rows($out);
if($row==0)
{
    $var1 = "<span style='color: red';><h5>Incorrect email-id or password!</h5></span>";
    header("location:login.php?var2=".$var1);
    
}
else
{
    $row  = mysqli_fetch_array($out);
    $_SESSION['id'] = $row['User_id'];
    $_SESSION['email'] = $row['Email'];
    header('location:products.php');
}
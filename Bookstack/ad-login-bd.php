<?php

include 'conection.php';

$admin = mysqli_real_escape_string($con, $_POST['admin-id']);
$pass = mysqli_real_escape_string($con, $_POST['password']);

$sql = "SELECT * FROM admin WHERE Admin_id = '$admin' AND Password = '$pass'";
$out = mysqli_query($con, $sql) or die(mysqli_error($con));
$row = mysqli_num_rows($out);
if($row==0)
{
    $var1 = "<span style='color: red';><h5>Incorrect Admin-id or password!</h5></span>";
    header("location:adminLogin.php?var2=".$var1);
    
}
else
{
    $row  = mysqli_fetch_array($out);
    $_SESSION['admin'] = $row['Admin_id'];
    header('location:admin.php');
}
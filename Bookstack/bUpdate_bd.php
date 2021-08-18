<?php
  include 'conection.php';
  $Book_name = $_POST['Book'];
  $Quan = $_POST['add-quan']; 

  $sql1 = "SELECT * FROM book WHERE Book_name = '$Book_name'";
  $out1 = mysqli_query($con, $sql1) or ide(mysqli_error($con));
  $row1 = mysqli_fetch_array($out1);

  $Stock = $row1['Stock'] + $Quan;

  $sql2 = "UPDATE book SET Stock='$Stock' WHERE Book_name='$Book_name'";
  $out2 = mysqli_query($con, $sql2) or ide(mysqli_error($con));

  header('location:admin.php');

?>
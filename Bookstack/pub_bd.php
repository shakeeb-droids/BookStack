<?php 
    include 'conection.php';
    $Pub_name = $_POST['pub-name'];
    $Pub_num = $_POST['contact'];
    $Pub_add = $_POST['address'];
    
    $sql = "SELECT * FROM publisher WHERE Publisher_name = '$Pub_name'" ;
    $out = mysqli_query($con, $sql) or die(mysqli_error($con));
    $row = mysqli_num_rows($out);
    if($row>0){
        $var1 = "<span style='color: red';><h5>Publisher Already Exist!</h5></span>";
        header("location:pub-entry.php?var2=".$var1);
     } else{
        $sql = "INSERT INTO publisher(Publisher_name, Publisher_contact, Publisher_address) Values('$Pub_name', '$Pub_num', '$Pub_add')";
        $out = mysqli_query($con, $sql) or die(mysqli_error($con));
        header('location:admin.php');
    }

    

?>
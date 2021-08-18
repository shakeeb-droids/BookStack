<?php
 require 'conection.php';

 $User_id= $_SESSION['id'];
 $sql= "SELECT * FROM cart INNER JOIN book ON cart.Book_id=book.Book_id WHERE User_id='$User_id' AND status='Added to Cart'";
 $result= mysqli_query($con, $sql) or die(mysqli_error($con));
 $row= mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cart</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css">
        <style>
          footer{
             position: absolute;
             width: 100%;
             padding: 10px ;
             background-color: #101010;
             color:#9d9d9d;
             bottom: 0;
            }
        </style>
    </head>
    <body>
       <?php include 'header.php'; ?>
       
         
       <div class="container" style="margin-top:100px">
        <div class="row A">
            <div class="col-sm-5 col-sm-offset-4">
                <table class="table table-hover table-responsive text-center">
                <tbody>
                   <?php if($row==0){
                         echo "<center><h2>Add items to the cart first!</h2></center>";
                         } else{
                              echo "<tr><th></th> <th>Item Name</th> <th>Item Price</th> <th>Quantity</th> <th>Total</th> <th></th></tr>";
                              $sum= 0;
                              $id= "";
                              while($data = mysqli_fetch_array($result)){
                                    $total = $data['Price']*$data['Quantity'];
                                    $sum = $sum + $total;
                                    $id .= $data['Book_id'].",";
                                    echo "<tr><td><img src='img/".$data['Book_id'].".jpg'  height='60px' width='50px'></td> <td>".$data['Book_name']."</td> <td>Rs ".$data['Price']."</td> <td>".$data['Quantity']."</td> <td>$total</td> <td><a href='item_remove.php?id={$data['Book_id']}' class='btn btn-primary remove_item_link'> Remove</a></td></tr>";
                                 }
                                    $id = rtrim($id, ","); 
                            ?>
                                    <form action='buypage.php' method='get'>
                                        <input type='hidden' name='Book_id' value='<?php echo $id; ?>'>
                                        <input type='hidden' name='Sub-Total' value='<?php echo $sum; ?>'>
                                    
                                    <tr><td></td> <td>Sub Total</td> <td> </td> <td> </td> <td>Rs<?php echo $sum ?></td> <td><button type='submit' class='btn btn-primary'>Proceed to Buy</button></td></tr>
                                </form>
                   <?php  } ?>
                </tbody>       
                </table>
            </div>
        </div>
        </div>
        
        <?php include 'footer.php'; ?>
    </body>
</html>
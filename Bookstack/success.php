<?php
  include 'conection.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Success Page</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         <link rel="stylesheet" href="style.css">
         <style>
            .D{
                text-align: center;
                vertical-align: middle;
                line-height:30px;
                margin-top: 10px;
                padding-top: 5px;
                background-color: #c2f5c2;
              }
              td,th{
                  text-align: center;
              }
              .container{
                  padding-right: 300px;
                  padding-left: 300px;
              }
              .table{
                background-color: wheat
              }
         </style>
    </head>
    <body>


         <br><br><div class="container-fluid D">
             <p>Your Order is Confirmed and Your Transaction is Successful! <br>Thank you for shopping
                with Bookstak. <a href="products.php"><u>Click here</u></a> to purchase any other item.</p>
         </div>
        <br><center><h3>Your Order Details</h3></center><br><br>
        <?php
           $Transaction_id = $_GET['id'];
           $sql = "SELECT * FROM transaction WHERE Transaction_id='$Transaction_id'";
           $out = mysqli_query($con, $sql) or die(mysqli_error($con));
           $row = mysqli_fetch_array($out);
           date_default_timezone_set("Asia/Kolkata");
           $date = date('d - M - Y');
           $a = date('d') + 5;
           $new_date = $a." - ".date('M - Y');
           
           $User_id = $_SESSION['id'];
           $sql2 = "SELECT * FROM customer WHERE User_id='$User_id'";
           $out2 = mysqli_query($con, $sql2) or die(mysqli_error($con));
           $row2 = mysqli_fetch_array($out2);


        ?>
        <center>
        <div class="container">
        <table class="table table-bordered">
           <tr>
               <th>Customer Name</th>
               <td><?php echo $row2['First_name']." ".$row2['Last_name']; ?></td>
           </tr>
           <tr>
               <th>Billing Adress</th>
               <td><?php echo $row['Billing_address']; ?></td>
           </tr>  
           <tr>
               <th>Purchase Id</th>
               <td><?php echo $row['Purchase_id']; ?></td>
           </tr>
           <tr>
               <th>Transaction Id</th>
               <td><?php echo $row['Transaction_id']; ?></td>
           </tr>
           <tr>
               <th>Payment Method</th>
               <td><?php echo $row['Pay_method']; ?></td>
           </tr>
           <tr>
               <th>Total Price</th>
               <td><?php echo $row['Total_Price']; ?></td>
           </tr>
           <tr>
               <th>Ordered Date</th>
               <td><?php echo $date; ?></td>
           </tr>
           <tr>
               <th>Estimated Delivery Date</th>
               <td><?php echo $new_date; ?></td>
           </tr>
        </table>
            </div>
            </center>

    </body>
</html>
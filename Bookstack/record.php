<?php
   include 'conection.php';

   $sql = "SELECT * FROM transaction";
   $out = mysqli_query($con, $sql) or die($con);
   
?>
   <html>
    <head>
        <title>All Records</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css">
        <style>
            td,th{
              text-align: center;
            }
        </style>
    </head>
    <body>
    <?php include 'admin-header.php'; ?>

            <div class="container" style="margin-top:70px;">
            <div class="row">
                <div class="col-xs-12"><h3>Book Details</h3></div>
            </div>
            <table class="table">
                <tbody>
                <tr>
                <th>Transaction ID</th>
                 <th>Purchase ID</th>
                 <th>Card Number</th>
                 <th>Pay Method</th>
                 <th>Total Price</th>
                 <th>Timestamp</th>
                </tr>
                <?php while($row = mysqli_fetch_array($out)){ ?>
                <tr>
                    <td><?php echo $row['Transaction_id']; ?></td>
                    <td><?php echo $row['Purchase_id']; ?></td>
                    <td><?php echo $row['Card_number']; ?></td>
                    <td><?php echo $row['Pay_method']; ?></td>
                    <td><?php echo $row['Total_Price']; ?></td>
                    <td><?php echo $row['Transaction_timestamp']; ?></td>
                </tr>
                </tbody>
                <?php } ?>
            </table><hr style="background-color:black">
            </div>           
    </body>
</html>

<?php
   include 'conection.php';

   $sql = "SELECT * FROM publisher";
   $out = mysqli_query($con, $sql) or die($con);
   
?>
   <html>
    <head>
        <title>All Publisher</title>
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
    
            <div class="container" style="margin-top:70px">
            <div class="row">
                <div class="col-xs-12"><h3>Publisher Details</h3></div>
            </div>
            <table class="table">
                <tbody>
                <tr>
                <th>Publisher Name</th>
                 <th>Publisher Contact</th>
                 <th>Publisher Address</th>
                </tr>
                <?php while($row = mysqli_fetch_array($out)){ ?>
                <tr>
                    <td><?php echo $row['Publisher_name']; ?></td>
                    <td><?php echo $row['Publisher_contact']; ?></td>
                    <td><?php echo $row['Publisher_address']; ?></td>
                </tr>
                </tbody>
                <?php } ?>
            </table><hr style="background-color:black">
            </div>           
    </body>
</html>

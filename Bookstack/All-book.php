<?php
   include 'conection.php';

   $sql = "SELECT * FROM book";
   $out = mysqli_query($con, $sql) or die($con);
   
?>
   <html>
    <head>
        <title>All Books</title>
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
                <th>Book Name</th>
                 <th>ISBN Number</th>
                 <th>Author</th>
                 <th>Category</th>
                 <th>Publisher</th>
                 <th>Price</th>
                 <th>Stock</th>
                </tr>
                <?php while($row = mysqli_fetch_array($out)){ ?>
                <tr>
                    <td><?php echo $row['Book_name']; ?></td>
                    <td><?php echo $row['ISBN_no']; ?></td>
                    <td><?php echo $row['Author']; ?></td>
                    <td><?php echo $row['Category']; ?></td>
                    <td><?php echo $row['Publisher']; ?></td>
                    <td><?php echo $row['Price']; ?></td>
                    <td><?php echo $row['Stock']; ?></td>
                </tr>
                </tbody>
                <?php } ?>
            </table><hr style="background-color:black">
            </div>           
    </body>
</html>

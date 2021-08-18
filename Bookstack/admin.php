<?php
   include 'conection.php';

   $sql1 = "SELECT * FROM publisher";
   $out1 = mysqli_query($con, $sql1) or die($mysqli_error($con));
   $row1 = mysqli_num_rows($out1);

   $sql2 = "SELECT * FROM book";
   $out2 = mysqli_query($con, $sql2) or die($mysqli_error($con));
   $row2 = mysqli_num_rows($out2);

   $sql3 = "SELECT * FROM customer";
   $out3 = mysqli_query($con, $sql3) or die($mysqli_error($con));
   $row3 = mysqli_num_rows($out3);

   $sql4 = "SELECT * FROM transaction";
   $out4 = mysqli_query($con, $sql4) or die($mysqli_error($con));
   $row4 = mysqli_num_rows($out4);
   $Earning = 0;
   while($arr = mysqli_fetch_array($out4))
       $Earning = $Earning + $arr['Total_Price'];
?>
<html>
    <head>
        <title>Admin</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link rel="stylesheet" href="style.css">
        <style> 
           .thumbnail{
               background-color: rgb(235, 99, 75);
               padding: 15px 40px;
               color: white;
               font-weight:bold;  
           }
           .thumbnail p{
               margin-left: -90px;
           }
           h3{
               margin-top: -50px;
               margin-left: -100px;
           }
           i{
               margin-right: -100px;
               font-size: 50px;
           }
           body{
               background-color: rgb(240, 232, 224);
           }
           td,th{
                  text-align: center;
              }
            .td1{
                text-align: left;
            }
            .con{
                  padding-right: 200px;
                  padding-left: 200px;
                  margin-top: 50px;
              }
              .btn1{
                  padding-right: 25px;
                  padding-left: 25px;
              }
              .btn2{
                  padding-right: 20px;
                  padding-left: 20px;
              }
        </style>
    </head>
    <body>

        <?php include 'admin-header.php'; ?>
        
        <center>
        <div class="row text-center" style="margin-top: 90px">
                <div class="col-xs-offset-1 col-xs-2">
                    <div class="thumbnail">
                        <i class="fas fa-book-reader"></i>
                        <h3><?php echo $row1; ?></h3>
                        <p>Publishers</p>
                    </div>  
                </div>
                <div class="col-xs-2">
                    <div class="thumbnail">
                        <i class="fas fa-book"></i>
                        <h3><?php echo $row2; ?></h3>
                        <p>Books</p>
                    </div>  
                </div>
                <div class="col-xs-2">
                    <div class="thumbnail">
                        <i class="fas fa-users"></i>
                        <h3><?php echo $row3; ?></h3>
                        <p>Customers</p>
                    </div>  
                </div>
                <div class="col-xs-2">
                    <div class="thumbnail">
                        <i class="fas fa-cart-arrow-down"></i>
                        <h3><?php echo $row4; ?></h3>                        
                        <p>Sales</p>
                    </div>  
                </div>
                <div class="col-xs-2">
                    <div class="thumbnail">
                        <i class="fas fa-rupee-sign"></i>
                        <h3>₹<?php echo $Earning; ?></h3>
                        <p>Earning</p>
                    </div>  
                </div>
           </div>
           <center>
           <center>
               
         <div class="con">
           <h2>Operations</h2><br>
           <table class="table table-bordered">
               <tr>
                   <td>1</td>
                   <td class="td1">New Publisher Entry</td>
                   <td><a href="pub-entry.php" class="btn btn-success btn1">ADD</a></td>
               </tr>
               <tr>
                   <td>2</td>
                   <td class="td1">New Book Entry</td>
                   <td><a href="book-entry.php" class="btn btn-success btn1">ADD</a></td>
               </tr>
               <tr>
                   <td>3</td>
                   <td class="td1">Book Stock Update</td>
                   <td><a href="book-update.php" class="btn btn-success">UPDATE</a></td>
               </tr>
               <tr>
                   <td>4</td>
                   <td class="td1">Publisher Details</td>
                   <td><a href="All-pub.php" class="btn btn-success btn2">SHOW</a></td>
               </tr>
               <tr>
                   <td>5</td>
                   <td class="td1">Book Details</td>
                   <td><a href="All-book.php" class="btn btn-success btn2">SHOW</a></td>
               </tr>
               <tr>
                   <td>6</td>
                   <td class="td1">Records</td>
                   <td><a href="record.php" class="btn btn-success btn2">SHOW</a></td>
               </tr>
           </table>
        </div>
        </center>
       
          
    </body>
</html>
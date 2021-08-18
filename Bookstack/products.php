<?php 
require 'conection.php';
//$_SESSION['email']='shakeeb@gmail.com';
//$_SESSION['id']= '3';
$sql= "SELECT Book_id,Book_name,Price from book";
$result= mysqli_query($con, $sql) or die(mysqli_error($con));
?>


<html>
    <head>
        <title>All Products</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css">
        <style>
            
        </style>
    </head>
    <body>
        
        <?php include 'header.php'; 
              include 'check_cart.php';
        ?>
         
        <div class="container" style="margin-top: 70px;">
            <center>
                <h1 style="letter-spacing:2px; font-weight:400; margin-bottom:0px">Books On 40% OFF</h1><hr>
            </center>
            <div class="row text-center pro">
            <?php while($row = mysqli_fetch_array($result)){ ?>
            
                <div class="col-sm-3">
 
                    <div class="thumbnail B">
                        <img src=<?php echo "img/".$row['Book_id'].".jpg" ?> class="img-responsive"  height="280px" width="180px">
                           <h5 class="d"><?php echo $row['Book_name']; ?></h5><p>Rs.<?php echo $row['Price']; ?>.00</p>
                           <form action="quant_item.php" method="get">
                           Select Quantity
                           <select name="quantity" id="q<?php echo $row['Book_id'] ?>" class="input-sm" onChange="a<?php echo $row['Book_id'] ?>()">
                               <option value="0">0</option>
                               <option value="1">1</option>
                               <option value="2">2</option>
                               <option value="3">3</option>
                               <option value="4">4</option>
                               <option value="5">5</option>
                           </select>
                           <?php
                                if(isset($_GET['v1']) && $row['Book_id']==$_GET['book_id'])
                                {
                                    echo $_GET['v1'];
                                }
                            
                            ?>
                           <br>
                           <input type="hidden" name="id" value="<?php echo $row['Book_id'] ?>">
                           <input type="hidden" name="price" value="<?php echo $row['Price']; ?>.00">
                           <button type= "submit" class="btn btn-primary" id="btn<?php echo $row['Book_id'] ?>" disabled="disabled">Add to cart</button>
                          </form>
                    </div>

                
                
                </div>
         <?php } ?>
         </div>
         <center><hr></center>
        </div>

        <?php include 'footer.php'; ?>
    
        <script src="products.js"></script>
    </body>
</html>
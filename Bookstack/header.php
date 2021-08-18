<?php 
if(isset($_SESSION['email'])){
    $User_id= $_SESSION['id'];
    $sqlcart= "SELECT * FROM cart INNER JOIN book ON cart.Book_id=book.Book_id WHERE User_id='$User_id' AND status='Added to Cart'";
    $resultcart= mysqli_query($con, $sqlcart) or die(mysqli_error($con));
    $total_quan = 0;
    while($rowcart= mysqli_fetch_array($resultcart)){
      $total_quan = $total_quan + $rowcart['Quantity'];
    }
} ?>
<style>
    .badge{
    position: absolute;
    top: 5px;
    right: -1px;
    padding: 3px 5px;
    border-radius: 50%;
    background: rgb(157, 157, 157);
    color: rgb(34, 34, 34);
   }
   .badge:hover{
    background: rgb(255, 255, 255);
    color: rgb(34, 34, 34);
    
   }
   .glyphicon{
       padding-right: 5px;

   }

</style>
    
    <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a href="index.php" class="navbar-brand" style="text-decoration: cadetblue;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-style: oblique;font-weight: bolder;font-size: xx-large;">BookStack</a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynav">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
            </div>
            <div class="collapse navbar-collapse" id="mynav">
                    <ul class="nav navbar-nav navbar-right">
                        <?php 
                          if(isset($_SESSION['email'])){
                        ?>
                         <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge"><?php if($total_quan!=0){ echo $total_quan; } ?></span></a></li>                       
                         <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
                         <?php } else { ?>
                            <li><a href="adminLogin.php"><span class="glyphicon glyphicon-user"></span>Admin</a></li> 
                            <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
                         <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
                        <?php } ?>
                    </ul>
                 </div>
            </div>
        </nav>
        </html>
<?php
   include 'conection.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         <link rel="stylesheet" href="style.css">
         <style>
             .con{
                 margin-top: 100px;
                 margin-bottom: 40px;
             }
         </style>
    </head>
    <body>
       
    <?php include 'header.php'; ?>

       <div class="container con">
        <div class="row A">
           <div class="col-sm-6 col-sm-offset-3">
               <div class="panel panel-primary">
                   
                   <div class="panel-heading"><h1>LOGIN</h1>
                </div>
                       <div class="panel-body">
                       <p class="text-warning">Login to make a purchase</p>
                       <form action="login_bd.php" method="POST">
                       <input type="text" class="form-group form-control"  name="email" required>
                       <input type="password" class="form-group form-control"  name="password" required>
                       <?php 
                            if(isset($_GET['var2']))
                            {
                                echo $_GET['var2'];
                            }
                       ?>
                       <button type="submit" class="btn btn-primary">Login</button>
                       </form>
                   </div>
                   <div class="panel-footer">Don't have an account? <a href="signup.html" class="A">Register</a></div>
               </div>
           </div>
        </div>
        </div>
      

        <?php include 'footer.php'; ?>
    </body>
</html>
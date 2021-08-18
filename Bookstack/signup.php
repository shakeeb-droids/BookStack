<?php
   include 'conection.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>SignUp</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         <link rel="stylesheet" href="style.css">
       <style>
           .con{
               margin-top: 70px;
           }
       </style>
    </head>
    <body>
        
        <?php include 'header.php'; ?>
       
        
        <div class="container con">
            <div class="row A">
                <div class="col-sm-6 col-sm-offset-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading"> <h1>SIGN UP</h1>
                        </div>
                    <form action="signup_bd.php" method="POST">
                        <div class="panel-body">
                      <input type="text" placeholder="First Name" name="fname" class="form-group form-control" required>
                      <input type="text" placeholder="Last Name" name="lname" class="form-group form-control" required>
                      <input type="email" placeholder="Email" name="email" class="form-group form-control" required>
                      <?php 
                            if(isset($_GET['var2']))
                            {
                                echo $_GET['var2'];
                            }
                       ?>
                      <input type="password" placeholder="Password" name="password" id="pass1" class="form-group form-control" required>
                      <input type="tel" placeholder="Contact" pattern="[789][0-9]{9}" title="Please Enter Right Format" name="contact" class="form-group form-control" required>
                      <input type="text" placeholder="Address" name="address" class="form-group form-control" required>
                      <button type="submit"  class="btn btn-primary">Submit</button><br><br>
                    </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
        
      
        
        <?php include 'footer.php'; ?>
    </body>
</html>
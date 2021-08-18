<?php
   include 'conection.php';
?>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css">
        <style>
            
        </style>
    </head>
    <body>

        <?php include 'header.php'; ?>

        <div id="banner_image">
            <div class="container">
                <center>
                <div id="banner_content">
                    <h1>Welcome to BookStack</h1>
                    <p>Flat 40% OFF on all books</p>
                   <a href="products.php" class="btn btn-danger btn-md">Shop Now</a>
                </div>
                </center>
            </div>
         </div>

         <div class="container">
             <!--<center>
                 <h2 class="A">Catagories</h2>
             </center>-->
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail B">
                        <a href="#" style="text-decoration:none;"><img src="img/A.jpg" class="img-responsive">
                       <h3 class="txt">Academic Books</h3></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail B">
                        <a href="#" style="text-decoration:none;"><img src="img/B.jpg" class="img-responsive">
                        <h3 class="txt">Story Books</h3></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail B">
                        <a href="#" style="text-decoration:none;"><img src="img/C.jpg" class="img-responsive">
                        <h3 class="txt">Recipe Books</h3></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail B">
                        <a href="#" style="text-decoration:none;"><img src="img/D.jpg" class="img-responsive">
                        <h3 class="txt">Autobiography Books</h3></a>
                    </div>
                </div>
           </div>
         </div>

         <div style="margin-top:70px;">
            <center> <img src="B2.png" alt=""></center>
         </div>

        <div class="container" style="margin-top:50px">
            <center>
                <h2 style="letter-spacing:2px; font-size:xx-large;">Our Bestsellers</h2>
            </center>
            <div class="row text-center" style="margin-top:35px">
                <div class="col-sm-2" style="margin-left: 40px; margin-right: 30px;">
                    <div class="thumbnail B">
                        <a href="products.php" style="text-decoration:none;"><img src="img/5.jpg" class="img-responsive">
                        <div class="caption">
                           <h5>Wings Of Fire</h5>
                        </div></a>
                    </div>
                </div>
                <div class="col-sm-2" style="margin-right: 30px">
                    <div class="thumbnail B">
                        <a href="products.php" style="text-decoration:none;"><img src="img/6.jpg" class="img-responsive">
                        <div class="caption">
                            <h5>Paleo Baking At Home</h5>
                        </div></a>
                    </div>
                </div>
                <div class="col-sm-2" style="margin-right: 30px">
                    <div class="thumbnail B">
                        <a href="products.php" style="text-decoration:none;"><img src="img/7.jpg" class="img-responsive">
                        <div class="caption">
                            <h5>Python For Beginners</h5>
                        </div></a>
                    </div>
                </div>
                <div class="col-sm-2" style="margin-right: 30px">
                    <div class="thumbnail B">
                        <a href="products.php" style="text-decoration:none;"><img src="img/8.jpg" class="img-responsive">
                        <div class="caption">
                            <h5>The Everyday Vegan</h5>
                        </div></a>
                    </div>
                </div>
                <div class="col-sm-2" style="margin-right: 30px">
                    <div class="thumbnail B">
                        <a href="products.php" style="text-decoration:none;"><img src="img/9.jpg" class="img-responsive">
                        <div class="caption">
                            <h5>The Audacity Of Hope</h5>
                        </div></a>
                    </div>
                </div>
            </div>
        </div>
        
        <?php include 'footer.php'; ?>

    </body>
</html>
<?php
   include 'conection.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>New Stock</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php include 'header.php'; ?>

        <div class="container">
            <div class="row A">
               <div class="col-sm-6 col-sm-offset-3">
                   <div class="panel panel-primary">
                       <div class="panel-heading"><h1>Request to add a Book </h1></div>
                       <div class="panel-body">
                           <p class="text-warning">Enter the details of the book</p>
                           <form>
                           <input type="text" class="form-group form-control" placeholder="Book Name" name="bknme">
                           <input type="text" class="form-group form-control" placeholder="Author Name" name="auth">
                           <input type="text" class="form-group form-control" placeholder="Publisher name" name="pbname">
                           <input type="number" class="form-group form-control" placeholder="Stock of books" name="stck">
                           <label for="addbook">Choose genre:</label> <br>
                            <select name="addbook" id="addbk">
                                <br><br>
                             <option value="Fictional">Fictional</option>
                             <option value="Non-Fictional">Non-Fictional</option>
                             <option value="Academics">Academics</option>
                             <option value="Auto-Biography">Auto-Biography</option>
                             <option value="Encyclopedia">Encyclopedia</option>
                             <option value="Cooking">Cooking</option>
                             <br><br>
                           <br><br><input type="button" value="Request" class="btn btn-primary" style="margin-right: 16px;">
                           <br><br>
                           </form>
                       </div>
                   </div>
               </div>
            </div>
            </div>
            <?php include 'footer.php'; ?>
    </body>
</html>
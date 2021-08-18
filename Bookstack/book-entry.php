<?php 
    include 'conection.php';
    $sql = "SELECT * FROM publisher";
    $out = mysqli_query($con, $sql) or die(mysqli_error($con));
    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Book Entry</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         <link rel="stylesheet" href="style.css">
         <style>
             .A
             {
                 margin-top: 100px;
             }
             
             </style>
    </head>
    <body>
    <?php include 'admin-header.php'; ?>
        
        <div class="container">
          <div class="row A">
            <div class="col-sm-6 col-sm-offset-3">
               <div class="panel panel-primary">
                   <div class="panel-heading"><h1>New Book Entry</h1></div>
                     <div class="panel-body">
                       
                       <form action="bEntry-bd.php" method="post">
                       <input type="text" class="form-group form-control" placeholder="Book Name" name="Book-name" required>
                       <?php 
                            if(isset($_GET['var2'])){
                                echo $_GET['var2'];
                            }
                       ?>
                       <input type="test" class="form-group form-control" placeholder="ISBN No" name="ISBN-no" required>
                       <input type="text" class="form-group form-control" placeholder="Author" name="Author" required>
                       <select name="Category" class="form-group form-control" style="padding: 5px;" required>
                              <option value="Academic">Academic</option>
                              <option value="Story">Story</option>
                              <option value="Recipe">Recipe</option>
                              <option value="Autobiography">Autobiography</option>
                        </select>
                        
                        <select name="Publisher" class="form-group form-control" required>
                        <?php
                        while($row = mysqli_fetch_array($out)){ ?>
                             <option value="<?php echo $row['Publisher_name'] ?>"><?php echo $row['Publisher_name'] ?></option>
                       <?php } ?>
                       </select>
                       <input type="text" class="form-group form-control" placeholder="Price" name="Price" required>
                       <input type="number" class="form-group form-control" placeholder="Stock" name="Stock" required>
                       
                       <button type="submit" class="btn btn-primary btn-block">Add</button>
                       </form>
                      </div>
                    </div>
                </div>
             </div>
         </div>
    </body>
</html>
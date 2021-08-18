<?php
   include 'conection.php';

   $sql = "SELECT * FROM book";
   $out = mysqli_query($con, $sql) or die(mysqli_error($con));
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Stock Update</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         <link rel="stylesheet" href="style.css">
         <style>
             .A
             {
                 margin-top: 100px;
             }
             footer{
             position: absolute;
             width: 100%;
             padding: 10px ;
             background-color: #101010;
             color:#9d9d9d;
             bottom: 0;
            }
             </style>
    </head>
    <body>
    <?php include 'admin-header.php'; ?>
        
        <div class="container">
          <div class="row A">
            <div class="col-sm-6 col-sm-offset-3">
               <div class="panel panel-primary">
                   <div class="panel-heading">
                       <h1>Book Quantity Update</h1>
                    </div>
                     <div class="panel-body">
                       
                       <form action="bUpdate_bd.php" method="post">
                        
                       <select name="Book" class="form-group form-control" required>
                        <?php
                        while($row = mysqli_fetch_array($out)){ ?>
                             <option value="<?php echo $row['Book_name'] ?>"><?php echo $row['Book_name'] ?></option>
                       <?php } ?>
                       </select>
                       <input type="number" class="form-group form-control" placeholder="Add Quantity" name="add-quan" required>
                       
                       <button type="submit" class="btn btn-primary btn-block">Add</button>
                       </form>
                      </div>
                    </div>
                </div>
            </div>
        </div>                       
    </body>
</html>
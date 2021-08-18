<?php
   include 'conection.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Publisher Entry</title>
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
                       <h1>New Publisher Entry</h1>
                    </div>
                     <div class="panel-body">
                       
                       <form action="pub_bd.php" method="post">
                       <input type="text" class="form-group form-control" placeholder="Publisher Name" name="pub-name" required>
                       <?php 
                            if(isset($_GET['var2'])){
                                echo $_GET['var2'];
                            }
                       ?>
                       <input type="tel" class="form-group form-control" pattern="[789][0-9]{9}" placeholder="Publisher Contact" name="contact" title="Please Enter Right Format" required>
                       <input type="text" class="form-group form-control" placeholder="Publisher Address" name="address" required>
                       
                       <button type="submit" class="btn btn-primary btn-block">Add</button>
                       </form>
                      </div>
                    </div>
                </div>
            </div>
        </div>                       
    </body>
</html>
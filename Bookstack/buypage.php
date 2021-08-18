<?php
require 'conection.php';
$sum = $_GET['Sub-Total'];


?>

<!DOCTYPE html>
<html>
    <head>
        <title>Buy @ BookStack</title>
        <title>Login Page</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         <link rel="stylesheet" href="style.css">

         <style>
             .row{
                 margin-top: 100px;
             }
         </style>
    </head>
    <body>
        </div>
        <?php include 'header.php'; ?>

        <div class="container">
            <div class="row A">
               <div class="col-sm-6 col-sm-offset-3">
                   <div class="panel panel-primary">
                       <div class="panel-heading"><h1>Make Payment</h1></div>
                       <div class="panel-body">
                           
                           <form action="confirm.php" method="get">
                           <p style="text-align:center;font-size:24px;">Order Total: ₹<?php echo $sum; ?></p>
                           <p>Billing Address:</p>
                           <input type="text" class="form-group form-control" placeholder="Billing Adress" name="address">
                           <p>Payment Method:</p>
                        <select name="paymethod" id="paymethod" class="input-sm" onClick="pay()">
                         <option value="Pay-On-Delivery" selcted>Pay-On-Delivery</option>
                         <option value="Debit Card/Credit Card">Debit Card/Credit Card</option>
                         </select>
                         <br><br>

                         <p>Credit-Card/Debit-Card</p>
                            <input type="text" class="form-group form-control" id="card-num" pattern="[0-9]{16}" placeholder="Card-Number" name="card" disabled="disabled">
                            <p>Valid Upto:</p>
                                <select name="Month" class="input-sm" id="month" disabled="disabled">
                                 <option value="january">01</option>
                                  <option value="february">02</option>
                                  <option value="march">03</option>
                                  <option value="april">04</option>
                                  <option value="may">05</option>
                                  <option value="june">06</option>
                                  <option value="july">07</option>
                                  <option value="august">08</option>
                                  <option value="september">09</option>
                                  <option value="october">10</option>
                                  <option value="november">11</option>
                                  <option value="december">12</option>
                                </select>
                                <select name="Year" class="input-sm" id="yr" disabled="disabled">
                                  <option value="2017">2017</option>
                                  <option value="2018">2018</option>
                                  <option value="2019">2019</option>
                                  <option value="2020">2020</option>
                                  <option value="2021">2021</option>
                                  <option value="2022">2022</option>
                                  <option value="2023">2023</option>
                                  </select><br>
                            Enter CVV: <br>
                            <input type="text" pattern="[0-9]{3}" placeholder="CVV" id="cvv" disabled="disabled"><br><br>
                          
                            <input type='hidden' name='Book_id' value='<?php $id = $_GET['Book_id']; echo $id; ?>'>
                            <input type='hidden' name='Sub-Total' value='<?php echo $sum; ?>'>
                            
                            

                         <button type="submit" class="btn btn-primary">Place Your Order and Pay</button>
                        </form>
                       
                       </div>
                   </div>
               </div>
            </div>
            </div>
            <script type="text/javascript" >
                function pay(){
                    var a = document.getElementById("paymethod").value;
                    if(a=="Pay-On-Delivery"){
                        document.getElementById("card-num").setAttribute("disabled","disabled");
                        document.getElementById("month").setAttribute("disabled","disabled");
                        document.getElementById("yr").setAttribute("disabled","disabled");
                        document.getElementById("cvv").setAttribute("disabled","disabled");
                    } else{
                        document.getElementById("card-num").removeAttribute("disabled");
                        document.getElementById("month").removeAttribute("disabled");
                        document.getElementById("yr").removeAttribute("disabled");
                        document.getElementById("cvv").removeAttribute("disabled");
                    }
                }
                
            </script>  

          <?php include 'footer.php'; ?>
    </body>
</html>
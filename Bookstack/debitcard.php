<!DOCTYPE html>
<html>
    <head>
        <title>Details of payment</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         <link rel="stylesheet" href="style.css">
         <style>
             .row{
                 margin-top: 100px;
                 margin-bottom: 70px;
             }
         </style>
    </head>
    <body>  
         <?php include 'header.php'; ?>
      
         <div class="container">
         <div class="row A">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="panel panel-primary">
                    <div class="panel-heading"><h1>Card Details</h1></div>
                    <div class="panel-body">
                    <form action="" method="">
                            <p>Credit-Card/Debit-Card</p>
                            <input type="text" class="form-group form-control" placeholder="Card-Number" name="Price">
                            <p>Valid Upto:</p>
                                <select name="Month" class="input-sm">
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
                                <select name="Year" class="input-sm">
                                  <option value="2017">2017</option>
                                  <option value="2018">2018</option>
                                  <option value="2019">2019</option>
                                  <option value="2020">2020</option>
                                  <option value="2021">2021</option>
                                  <option value="2022">2022</option>
                                  <option value="2023">2023</option>
                                  </select><br>
                            Enter CVV: <br>
                            <input type="text" pattern="[0-9]{3}" placeholder="CVV"><br><br>
                            
                               
                        <button type="submit" class="btn btn-primary btn-block">Pay</button>
                        </form>
                        
                    </div>
                    </div>
             </div>
        </div>
        </div>  
    
        <?php include 'footer.php'; ?>
    </body>
</html>
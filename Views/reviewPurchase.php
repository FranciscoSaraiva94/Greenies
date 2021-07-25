<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
           <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
           <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
           <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
           <link rel="stylesheet" href="extraCss/purchase.css">
      </head> 
<body>
    <table class="table table responsive">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Quantity</th>
            <th scope="col">Price</th>
            <th scope="col">Total</th>
        </tr>

<?php
$total = 0.00;
        foreach ($_SESSION["cart"] as $product) {
            $subtotal = $product["price"] * $product["quantity"];
            $total = $total + $subtotal;
            echo'
            <tr>
            <th>'.$product["name"].'</th>
            <td>'.$product["quantity"].'kg</td>
            <td>'.$product["price"].'€</td>
            <td>'.$subtotal.'€</td>
          </tr>
          ';
        }
?> 
                <td colspan="3"></td>
                <td colspan="2">
                <span class="total"><?=$total?></span>€
                </td>
            </tr>
       </table>
       <form action="?controller=endPurchase" method="post">	
       <div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Payment Details
                    </h3>
                    <div class="checkbox pull-right">
                        <label>
                            <input type="checkbox" />
                            Remember
                        </label>
                    </div>
                </div>
                <div class="panel-body">
                    <form role="form">
                    <div class="form-group">
                    <label for="cardNumber">
                            CARD NAME</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="card_name" id="cardName"s placeholder="Valid Card Name"
                                required autofocus />
                            <span class="input-group-addon"></span>
                        </div>
                        <label for="cardNumber">
                            CARD NUMBER</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="number" id="cardNumber" placeholder="Valid Card Number"
                                required autofocus />
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        </div>
                        <label for="cardNumber">
                            INVOICE E-MAIL</label>
                        <div class="input-group">
                            <input type="email" name="email" class="form-control" placeholder="please enter an e-mail"
                                required autofocus />
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-7 col-md-7">
                            <div class="form-group">
                                <label for="expityMonth">
                                    EXPIRY DATE</label>
                                <div class="col-xs-6 col-lg-6 pl-ziro">
                                    <input type="text" class="form-control" id="expityMonth" placeholder="MM" required />
                                </div>
                                <div class="col-xs-6 col-lg-6 pl-ziro">
                                    <input type="text" class="form-control" id="expityYear" placeholder="YY" required /></div>
                            </div>
                        </div>
                        <div class="col-xs-5 col-md-5 pull-right">
                            <div class="form-group">
                                <label for="cvCode">
                                    CV CODE</label>
                                <input type="password" class="form-control" id="cvCode" placeholder="CV" required />
                            </div>
                        </div>
                        <input type="hidden" name="total" value=<?=$total?>>
    </div>
                </form>
               </div>
            </div>
            <ul class="nav nav-pills nav-stacked">
            <li class="active"><a href="#"><span class="badge pull-right"><span class="finalPrice"></span><?=$total?>€</span> Final Payment</a>
                </li>
            </ul>
        </br>
            <button name="send" type="submit" class="btn btn-success btn-lg btn-block" role="button">Confirm Payment</button> 
        </div>
    </div>
    </form>
</div>
</body>
</html>
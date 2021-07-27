<?php
    include("navbars/cartNav.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>  
        
</head>  
<body>
<style>
.checkout{
    display:none;
}

.table{

max-width:50%
}    
    .panel-title {display: inline;font-weight: bold;}
    .checkbox.pull-right { margin: 0; }
    .pl-ziro { padding-left: 0px; }

.finalPrice{
    width:100px;
}

@media only screen and (min-width: 1000px) {
    .container {
        position: relative;
        left:25%;
    }
    .table{
        position:relative;
        width:50%;
        left:26%;
    }
  }
  @media only screen and (min-width: 400px) {
    .container {
        position: relative;
        left:10%;
    }
  }
</style>

<?php
    if (!isset($_SESSION["user_id"])) {
        echo 'por favor efetue login primeiro';
        die();
    }
?>


    <h3 class="text-center">Order Details</h3>
    <table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">Product Name</th>
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
                <span class="total"><b><?=$total?></b></span>€
                </td>
            </tr>
       </table>
<form action="?controller=endPurchase" method="post">	
  <div class="container">
    <div class="row">
        <div class="col-xs-9 col-md-42">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Payment Details
                    </h3>
                    <div class="checkbox pull-right">
                        <label>
                            <input type="checkbox">
                            Remember Card
                        </label>
                    </div>
                </div>
                <div class="panel-body">
                    <form role="form">
                    <div class="form-group">
                    <label for="cardNumber">
                            CARD NAME</label>
                        <div class="input-group">
                            <input type="text" class="form-control" maxlength="120" minlenght="3" name="card_name" id="cardName"s placeholder="Valid Card Name"
                                required autofocus />
                            <span class="input-group-addon"></span>
                        </div>
                        <label for="cardNumber">
                            CARD NUMBER</label>
                        <div class="input-group">
                            <input type="number" class="form-control" minlength="11" maxlength="19"name="number" id="cardNumber" placeholder="Valid Card Number"
                                required autofocus />
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        </div>
                        <label for="cardNumber">
                            INVOICE E-MAIL</label>
                        <div class="input-group">
                            <input type="email" name="card-email" class="form-control" placeholder="please enter an e-mail"
                                required autofocus />
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-md-7">
                            <b>EXPIRY DATE</b>
                            <div class="form-group">
                                <label for="expityMonth">
                                <div class="col-xs-6 col-lg-6 pl-ziro">
                                    <input type="number" class="form-control" id="expityMonth" min="1" max="12" maxlength="2" placeholder="MM" required />
                                </div>
                                <div class="col-xs-6 col-lg-6 pl-ziro">
                                    <input type="text" class="form-control" id="expityYear"  minLength="4" maxlength="4" placeholder="YYYY" required /></div>
                            </div>
                        </div>
                        <div class="col-xs-5 col-md-5 pull-right">
                            <div class="form-group">
                                <label for="cvCode">
                                    CV CODE</label>
                                <input type="password" name="CV"class="form-control" id="cvCode" maxlength="3"  minlength="3" placeholder="CV" required>
                            </div>
                        </div>
                        <input class= "totalCost" type="hidden" name="total" value=<?=$total?>>
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
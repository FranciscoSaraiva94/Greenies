<?php
    require("navbars/cartNav.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title> 
    <head>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="./js/cart.js"></script>
      </head>
<h2>Cart</h2>
      <style>
          h2{
              margin:auto;
              text-align:center;
              margin-top:30px;
          }
          .table{
              width:50%;
              margin:auto;
              border:1px solid black;
              margin-top:30px;
          }
      </style>
</head>
<body>
<?php
  if (empty($_SESSION["cart"])) {
      echo 'please select some items first'; ?>
      <style>
        .checkout{display:none;}     
     </style>
<?php
die();
  }
?>
<?php
    if (!empty($_SESSION["cart"])) {
        ?>
<main>
<table class="table table bordered">
    <thead>
        <tr>
            <th width="20%">Name</th>
            <th width="20%">Quantity</th>
            <th width="20%">Price(uni)</th>
            <th width="20%">Total</th>
            <th width="20%">Remove</th>
        </tr>
    </thead>
<?php
    $total = 0.00;
        foreach ($_SESSION["cart"] as $product) {
            $subtotal = $product["price"] * $product["quantity"];
            $total = $total + $subtotal;
        
            echo '
        <tr class="allitems" data-product_id="'.$product["product_id"].'" data-price="'.$product["price"].'"   >
             <td data-product_id"'.$product["name"].'>' .$product["name"].         '</td>
             <td> <input class= "quantity"
                type="number" 
                value="'. $product["quantity"]. '" 
                min="1" 
                 max="'.$product["stock"].'">
                 </td>';
            if ($product["price"] != $product["old_price"]) {
                echo '<td><s><small class="text-primary">'.$product["old_price"].'€ </s></small>'.$product["price"].  '€'.  '</td>';
            } else {
                echo '<td>'.$product["price"].  '€'.  '</td>';
            }
            echo '
             <td><span class="subtotal">' .$subtotal. '€'. '</span></td>
                <td><button name ="remove" class="remove" type="button">X</button></td
             </tr>
             ';
        }
    }
    
?>
                <tr>
                <td colspan="3"></td>
                <td colspan="2">
                <span class="total"><?=$total?></span>€
                </td>
            </tr>
       </table>
</main>
</body>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
</html>
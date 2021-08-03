<?php
    require("navbars/adminNav.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>See products</title>
    <link rel="stylesheet" href="css/seeproduct.css">   
</head>
<body>
    <style>
        
        body{
            margin:0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
            Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
        }
        .images{
            width:30%;
        }
    
    h1{
        text-align:center;
    }
    table{
         margin:auto;
    }
  
    </style>
    <h1>Current products</h1>
    <table class="table table-bordered">
    <thead>
        <tr>
        <th width="20%">Name</th>
        <th width="20%">product_id</th>
        <th width="20%">Price</th>
        <th width="20%">Stock</th>
        <th width="20%">Photo</th>
        </tr>
    </thead>

<?php

$noStock = "<p role='warning'>out of stock";

    foreach ($products as $product) {
        $discount = 0;
        $old_price = $product["price"];
        foreach ($promotions as $promotion) {
            if (array_key_exists("product_id", $promotion) && $promotion["product_id"] === $product["product_id"]) {
                $discount = $promotion["discountPrice"];
            }
        }
        echo '<tr class="allitems">
              <td> '.$product["name"].'         </td>
              <td> '.$product["product_id"].'   </td>';
        if ($discount) {
            echo '<td><s><small class="text-primary">'.$product["price"].'€ </small></s>'.$discount.'€/kg</td>';
            $product["price"] = $discount;
        } else {
            echo '<td class="precoDoProduto">'.$product["price"].'€/kg</td>';
        }
        echo '
';
        if ($product["stock"] == 0) {
            $product["stock"] = $noStock;
        }
        echo '
              <td> '.$product["stock"].'        </td>
              <td> <img class="images"src="'.$product["photo"].'"></td>'.
             '</tr>';
    }
?>

</table>
</body>
</html>
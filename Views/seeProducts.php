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
            width:10%;
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
        <th scope="col">Name</th>
        <th scope="col">product_id</th>
        <th scope="col">Price</th>
        <th scope="col">Stock</th>
        <th scope="col">Photo</th>
        </tr>
    </thead>

<?php

$noStock = "<p role='warning'>out of stock";

    foreach ($products as $product) {
        echo '<tr class="allitems">
              <th> '.$product["name"].'         </th>
              <th> '.$product["product_id"].'   </th>
              <th> '.$product["price"].'        </th>
';
        if ($product["stock"] == 0) {
            $product["stock"] = $noStock;
        }
        echo '
              <th> '.$product["stock"].'        </th>
              <th> <img class="images"src="'.$product["photo"].'"></th>'.
             '</tr>';
    }
?>

</table>
</body>
</html>
<?php

 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>PriceEach</th>
            <th>Quantity</th>
        </tr>
    </thead>

<?php
    foreach($_SESSION["cart"] as $product){
        echo '<tr class="allitems">'.
             '<th>' .$product["name"].         '</th>'.
             '<th>' .$product["price"].    '</th>'.
             '<th>' .$product["quantity"].      '</th>'.
             '</tr>';
    }
?>


    <a href="./" class="txt2" href="#">
     Return home
    </a>
</body>
</html>
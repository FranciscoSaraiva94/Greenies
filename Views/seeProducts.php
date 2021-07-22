
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>See products</title>
    <link rel="stylesheet" href="./extraCss/styles.css">
    <link rel="stylesheet" href="./homeFiles/styles.css">
</head>
<body>

    <h1>Current products</h1>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>product_id</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Photo</th>
        </tr>
    </thead>

<?php

    foreach ($products as $product) {
        echo '<tr class="allitems">'.
             '<th>' .$product["name"].         '</th>'.
             '<th>' .$product["product_id"].   '</th>'.
             '<th>' .$product["price"].        '</th>'.
             '<th>' .$product["stock"].        '</th>'.
             '<th> <img class="imagens"src="'.$product["photo"].'"></th>'.
             '</tr>';
    }
?>

</table>

<a href="?controller=admin">See list again</a>
    <br>
    <a href="./">Home</a>
</body>
</html>
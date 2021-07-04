
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Products</title>
</head>
<body>
    <h1> Update Products</h1>
<?php
    if(isset($message)){
        echo '<h3>'.$message.'</h3>';
    }
?>

    <form action="?controller=updateProducts" method="post">
    <div>
        <label>
            Product to update:
            <input type="text" name="name" id="">
        </label>
    </div>
    <div>
        <label>
            Id of the product to update:
            <input type="text" name="product_id" id="">
        </label>
    </div>
    <div>
        <label>
            New stock
            <input type="text" name="stock" id="">
        </label>
    </div>
    <div>
        <label>
            New price
            <input type="text" name="price" id="">
        </label>
    </div>

    <button type="submit" name="send">Update product</button>
    </form>

    <a href="?controller=admin">See list again</a>
    <br>
    <a href="./">Home</a>
</body>
</html>
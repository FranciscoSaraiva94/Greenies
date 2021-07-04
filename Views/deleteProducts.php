<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="?controller=deleteProducts" method="post">

<?php
if(isset($message)){
    echo $message;
}
?>
                <div>
                     <label>
                        Name of the product to remove
                        <input type="text" name="name" id="">
                    </label>
                </div>
                <div>
                     <label>
                        ID of the product to remove
                        <input type="text" name="product_id" id="">
                    </label>
                </div>
                <div>
                     <label>
                        Reason to remove
                        <select name="category" id="">
                            <option>No stock</option>
                            <option>dislike Vegetables</option>
                        </select>
                    </label>
                </div>
            <button type="submit" name="send">Remover Produto</button>
    </form>
    <a href="?controller=admin">See list again</a>
    <br>
    <a href="./">Home</a>
</body>
</html>
</body>
</html>
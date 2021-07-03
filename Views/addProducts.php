<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <h2>Add New products</h2>
<?php
    if(isset($message)){
        echo '<h3>'.$message.'</h3>';
    }
?>
        <form method="post" action="?controller=admin" enctype="multipart/form-data">
                <div>
                    <label>
                        Product name
                        <input type="text" name="name" id="">
                    </label>
                </div>
                <div>
                    <label>
                        Product price
                        <input type="text" name="price" id="">
                    </label>
                </div>
                <div>
                    Product photo
                    <input type="file" name="file">
                </div>
                <div>
                    <label>
                        Product category
                        <select name="category" id="">
                            <option>fruits</option>
                            <option>vegetables</option>
                        </select>
                    </label>
                </div>
                <div>
                    <label>
                       Stock
                        <input type="text" name="stock" id="">
                    </label>
                </div>
            <button type="submit" name="addProduct">Adicionar produto</button>
        </form>

<a href="?controller=home">Home</a>
</body>
</html>
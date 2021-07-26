<?php

    require("cartNav.php")

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title> 
    <script>

document.addEventListener("DOMContentLoaded", () => {

        function recalculateTotal(){
           let total = 0;
           let subtotals = document.querySelectorAll(".subtotal");
           subtotals.forEach(subtotal => {
            total = total + parseInt(subtotal.textContent);
           })
          document.querySelector(".total").textContent = total;
       }
    
       const removeBtns = document.querySelectorAll(".remove");

        function  recalculateSubtotals(element){
            const tr = element.parentNode.parentNode;
            const price = tr.dataset.price;
            const quantity = element.value;
            tr.querySelector(".subtotal").textContent = price * quantity;
            recalculateTotal();
        }

       removeBtns.forEach(button => {
        button.addEventListener("click", () => {   
            const currentProduct = button.parentNode.parentNode;
            const product_id = currentProduct.dataset.product_id;

            fetch("http://localhost/greenies/?controller=requests", {
                            method: "POST",
                            headers: {
                                "Content-Type":"application/x-www-form-urlencoded"
                            },
                            body: "request=removeProduct&product_id=" + product_id
                        })
                        .then( response => response.json() )
                        .then( parsedResponse => {
                            console.log(parsedResponse.status)
                            if( parsedResponse.status == "OK"){
                                currentProduct.remove();
                                recalculateTotal();
                            }
                        });
                    });
        }
    )
       
    const currentQuantity = document.querySelectorAll(".quantity");

        currentQuantity.forEach(element => {
            element.addEventListener("change", () =>{
               const item = element.parentNode.parentNode;
               const product_id = item.dataset.product_id;
               const quantity = element.value;
    
               fetch("http://localhost/greenies/?controller=requests", {
                            method: "POST",
                            headers: {
                                "Content-Type":"application/x-www-form-urlencoded"
                            },
                            body: "request=changeQuantity&product_id=" + product_id + "&quantity=" + quantity
                        })
                        .then(response => response.json())
                        .then(parsedResponse =>{
                            if(parsedResponse.status == "OK") {
                                recalculateSubtotals( element );
                            }
                        });
            })
        })
    
});

    </script>
    <head>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head> 
</head>
<body>
<?php
    if (!empty($_SESSION["cart"])) {
        ?>
<main>
<table class="table table bordered"
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
       <a href="?controller=reviewPurchase">Checkout</a>
       <a href="?controller=home">Return home</a>
    
</body>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
  <script src="script.js"></script>
</html>
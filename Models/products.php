<?php

require("base.php");

class Products extends Base {

    public function createProduct($data, $file) {
        
       $query = $this->db->prepare("
            INSERT INTO PRODUCTS
            (name, price, photo, category, stock)
            VALUES (?,?,?,?,?)
        ");
        $query->execute([
            $data["name"],
            $data["price"],
            $file,
            $data["category"],
            $data["stock"]
          ]);
          return $query->fetch(PDO:: FETCH_ASSOC);

    }

    public function deleteProduct($data){
        $query = $this->db->prepare("
            DELETE FROM PRODUCTS
            WHERE name = ?
        ");
        $query->execute([
            $data["product_name"]
          ]);

          return $query->fetch(PDO:: FETCH_ASSOC);
    }

    public function updateProducts($data, $file){
        
        $query = $this->db->prepare("
            UPDATE PRODUCTS
            SET stock = ".$data["stock"].", photo = '$file', price = ".$data["price"]."
            WHERE name = ?
        ");

        $query->execute([
            $data["product_name"]
        ]);

        return $query->fetch(PDO:: FETCH_ASSOC);
    }

public function noImageUpdate($data){
        
    $query = $this->db->prepare("
        UPDATE PRODUCTS
        SET stock = ".$data["stock"].", price = ".$data["price"]."
        WHERE name = ?
    ");

    $query->execute([
        $data["product_name"]
    ]);

    return $query->fetch(PDO:: FETCH_ASSOC);
}

    public function seeProducts(){

        $query = $this->db->prepare("
        SELECT product_id, name, price, stock, photo
        FROM PRODUCTS
    ");

        $query->execute([

        ]);

        return $products = $query->fetchAll(PDO:: FETCH_ASSOC);
    }

    public function seeProduct($data){

        $query = $this->db->prepare("
        SELECT product_id, name, price, stock, photo
        FROM PRODUCTS
        WHERE name = ?
        
    ");
        $query->execute([
            $data["product_name"]
        ]);

        return $query->fetch(PDO:: FETCH_ASSOC);
    }

    public function cartProducts($data){
        $query = $this->db->prepare("
        SELECT product_id, name, price, stock, photo
        FROM PRODUCTS
        WHERE product_id = ? AND stock >= ?
        ");
        
        $query->execute([
            $data["product_id"],
            $data["quantity"]
        ]);

        return $product = $query->fetch(PDO:: FETCH_ASSOC);
    }
    public function updateQuantities($data){
        $query = $this->db->prepare("
        SELECT product_id
        FROM PRODUCTS
        WHERE product_id = ?  And stock >= ?
         ");

        $query->execute([
            $_POST["product_id"],
            $_POST["quantity"]
        ]);
        return $products = $query->fetch(PDO:: FETCH_ASSOC);
    }
}
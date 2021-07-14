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
            WHERE product_id = ? AND name = ?
        ");

        $query->execute([
            $data["product_id"],
            $data["name"]
          ]);

          return $query->fetch(PDO:: FETCH_ASSOC);
    }

    public function updateProducts($data){
        
        $query = $this->db->prepare("
            UPDATE PRODUCTS
            SET stock = ".$data["stock"].", price = ".$data["price"]."
            WHERE product_id = ? AND name = ?
        ");

        $query->execute([
            $data["product_id"],
            $data["name"]
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
}
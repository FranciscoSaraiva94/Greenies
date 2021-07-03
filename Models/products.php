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

}
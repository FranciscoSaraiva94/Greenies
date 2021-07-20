<?php


class promotions {
    public $db;
    
    
    public function __CONSTRUCT() {
        $this->db = new PDO("mysql:host=localhost;dbname=greenies;charset=utf8mb4", "root","");

    }

    public function setPromo($data, $product){

            $query = $this->db->prepare("
                INSERT into promotions
                (product_id, discount, name)
                VALUES (?,?,?)
            ");
    
            $query->execute([
                $product["product_id"],
                $data["price"],
                $product["name"]
            ]);

    }
    public function getPromo(){
        $query = $this->db->prepare("
            SELECT product_id
            FROM promotions
            ");
            $query->execute([
        
          ]);
          return $query->fetch(PDO:: FETCH_ASSOC);

    }
}

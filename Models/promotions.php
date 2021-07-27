<?php

require_once("base.php");
class promotions extends Base
{
    public function setPromo($data, $product)
    {
        $query = $this->db->prepare("
            INSERT into promotions
              (product_id, discountPercentage, name)
              VALUES (?,?,?)
            ");
    
        $query->execute([
                $product["product_id"],
                $data["price"],
                $product["name"]
            ]);
    }
    public function getPromo($data)
    {
        $last_id = $this->db->lastInsertId();

        $query = $this->db->prepare("
        
            SELECT product_id, discountPercentage, name, promo_id
            FROM promotions
            WHERE product_id = ? AND promo_id = ?
            ");

        $query->execute([
             $data["product_id"],
             $last_id
            ]);
        return $query->fetch(PDO:: FETCH_ASSOC);
    }

    public function insertNewPrice($data, $name1, $name2)
    {
        $query = $this->db->prepare("
            Update promotions
            SET discountPrice = $data
            WHERE name = ?
            ");

        $query->execute([
            $name1 = $name2
            ]);
        return $query->fetch(PDO:: FETCH_ASSOC);
    }

    public function getAll()
    {
        $query = $this->db->prepare("
        Select product_id, name, discountPrice
        FROM promotions
        ");
        $query->execute([

            ]);
        return $query->fetchAll(PDO:: FETCH_ASSOC);
    }

    public function getPromos()
    {
        $query = $this->db->prepare("
        Select product_id, discountPrice, name
        FROM promotions

        ");
        $query->execute([

            ]);
        return $query->fetchAll(PDO:: FETCH_ASSOC);
    }
}

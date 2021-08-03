<?php

require_once("base.php");
class promotions extends Base
{
    public function setPromo($id, $price, $discountPercentage, $promotedPrice, $name)
    {
        $query = $this->db->prepare("
            INSERT into promotions
            (product_id, price, discountPercentage, discountPrice, name)
            VALUES (?,?,?,?,?)
            ");
    
        $query->execute([
                $id,
                $price,
                $discountPercentage,
                $promotedPrice,
                $name
            ]);
    }
    public function updatePromoPrice($id, $discountPercentage, $price, $discountPrice, $name)
    {
        $query = $this->db->prepare("
              INSERT INTO promotions
              (product_id, discountPercentage, price, discountPrice, name)
              VALUES (?,?,?,?,?)
     
          ");
        return $query->execute([
              $id["product_id"],
              $discountPercentage,
              $price,
              $discountPrice,
              $name
          ]);
    }
    
    public function getPromo($data)
    {
        $query = $this->db->prepare("

            SELECT product_id, discountPercentage, name, promo_id
            FROM promotions
            WHERE product_id = ? 
            ");

        $query->execute([
             $data["product_id"],
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

    public function verifyPromo($data)
    {
        $query = $this->db->prepare("
             Select product_id
             FROM promotions
             WHERE product_id = ?
         ");

        $query->execute([
             $data
         ]);
        return $query->fetch(PDO:: FETCH_ASSOC);
    }
    public function getPercentage($data)
    {
        $last = $this->db->lastInsertId();
        $query = $this->db->prepare("
            Select discountPercentage
            from promotions
            ORDER BY promo_id DESC LIMIT 1
        ");
        $query->execute([

            ]);
        return $query->fetch(PDO:: FETCH_ASSOC);
    }
}

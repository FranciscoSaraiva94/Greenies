<?php


class orderDetails
{
    public $db;

    public function __CONSTRUCT()
    {
        $this->db = new PDO("mysql:host=localhost;dbname=greenies;charset=utf8mb4", "root", "");
    }


    public function insertOrderDetails($data, $insertOrder)
    {
        $query = $this->db->prepare("
        INSERT INTO order_details
        (order_id, product_id, quantity, price_each, name)
        VALUES(?,?,?,?,?)
        ");
        $query->execute([
            $insertOrder,
            $data["product_id"],
            $data["quantity"],
            $data["price"],
            $data["name"]
        ]);
    }
}

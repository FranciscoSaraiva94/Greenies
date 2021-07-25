
<?php
class orders
{
    public $db;

    public function __CONSTRUCT()
    {
        $this->db = new PDO("mysql:host=localhost;dbname=greenies;charset=utf8mb4", "root", "");
    }
    
    public function setOrder($id, $email, $total)
    {
        $query = $this->db->prepare("
                INSERT INTO orders
                (user_id, email, order_value)
                VALUES(?,?,?)
                ");
        $query->execute([
               $id,
               $email,
               $total
        ]);
        return $order_id = $this->db->lastInsertId();
    }
}
?>
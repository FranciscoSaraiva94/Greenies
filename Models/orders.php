
<?php
require_once("base.php");

class orders extends Base
{
    public function setOrder($id, $email, $total)
    {
        $query = $this->db->prepare("
                INSERT INTO orders
                (user_id, card_email, order_value)
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
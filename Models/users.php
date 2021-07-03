<?php
require("base.php");

class Users extends Base {

    public function getUser($data) {

       $query = $this->db->prepare("

   	    Select user_id, name, user_type, password AS encrypted_password
	      FROM USERS
	      WHERE email = ?
    ");
        $query->execute([
          $data
        ]);

        print_r($data);

        return $query->fetch(PDO:: FETCH_ASSOC);
    }  

  public function createUser($data){

    $query = $this->db->prepare("

      INSERT INTO USERS
      (email, password, name)
      VALUES (?,?,?)
    ");

    $query->execute([
        $data["email"],
        password_hash($data["password"], PASSWORD_DEFAULT),
        $data["name"]
    ]);	

      return $query->fetch();
  }
}


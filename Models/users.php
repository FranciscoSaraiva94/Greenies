<?php
require_once("base.php");

class Users extends Base
{
    public function checkEmail($email)
    {
        $query = $this->db->prepare("
        Select email
        FROM USERS
        WHERE EMAIL = ?
    ");
        $query->execute([
            $email
        ]);
        return $query->fetchAll(PDO:: FETCH_ASSOC);
    }

    public function validator($user)
    {
        if (
            !empty($user["name"]) &&
            !empty($user["password"]) &&
            !empty($user["address"]) &&
            !empty($user["city"]) &&
            !empty($user["postal_code"]) &&
            !empty($user["country"]) &&
            !empty($user["phone"]) &&
            mb_strlen($user["name"]) > 3 &&
            mb_strlen($user["name"]) <= 64 &&
            mb_strlen($user["password"]) >= 8 &&
            mb_strlen($user["password"]) <= 1000 &&
            mb_strlen($user["address"]) <= 255 &&
            mb_strlen($user["city"]) <= 64 &&
            mb_strlen($user["postal_code"]) <= 32 &&
            filter_var($user["email"], FILTER_VALIDATE_EMAIL) &&
            $user["password"] === $user["repeat_password"]
        ) {
            return true;
        }

        return false;
    }

    public function getUser($data)
    {
        $query = $this->db->prepare("

   	      Select user_id, name, user_type, password AS encrypted_password
	      FROM USERS
	      WHERE email = ?
    ");
        $query->execute([
          $data
        ]);

        return $query->fetch(PDO:: FETCH_ASSOC);
    }

    public function createUser($data)
    {
        if ($this->validator($data)) {
            $query = $this->db->prepare("
            INSERT INTO USERS
            (email, password, name, address, city, country, postal_code, phone)
            VALUES (?,?,?,?,?,?,?,?)
    ");

            $query->execute([
            $data["email"],
            password_hash($data["password"], PASSWORD_DEFAULT),
            $data["name"],
            $data["address"],
            $data["city"],
            $data["country"],
            $data["postal_code"],
            $data["phone"]
    ]);
            return true;
        }
        return false;
    }
    public function getAddress($id)
    {
        $query = $this->db->prepare("
        Select address, city, country, postal_code, phone
        From users
        WHERE user_id = ?
      ");
        $query->execute([
        $id
      ]);
        return $query->fetch(PDO:: FETCH_ASSOC);
    }
}

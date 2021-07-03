<?php


class Base {

    public $db;
    
    public function __CONSTRUCT() {
        $this->db = new PDO("mysql:host=localhost;dbname=greenies;charset=utf8mb4", "root","");
    }
}
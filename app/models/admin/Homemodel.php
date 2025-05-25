<?php
class Homemodel{
    public $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    public function getUsers(){
        $sql = "SELECT * FROM `user`";
        $query = $this->db->pdo->query($sql);
        $result = $query->fetchAll();
        return $result;
    }
}


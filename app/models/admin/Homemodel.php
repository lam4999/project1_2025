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
    public function checkLogin(){
        $email = $_POST['email'];
        $matkhau = $_POST['matkhau'];
        $sql = "SELECT * FROM `user` where `email` = '$email' and `matkhau` = '$matkhau'";
        $query = $this->db->pdo->query($sql);
        $result = $query->fetch();
        return $result;
    }
        
}


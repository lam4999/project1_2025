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
   function checkLogin(){
    $email = $_POST['email'];
    $matkhau = $_POST['matkhau'];

    $sql = "SELECT * FROM `user` WHERE email = :email and role = 1";
    $stmt = $this->db->pdo->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    $result = $stmt->fetch();

    if ($result && password_verify($matkhau, $result->matkhau)) {
        return $result;
    }

    return false;
}
        
}


<?php
class UserModel {
    public $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAllData() {
        $sql = "SELECT * FROM `user`";
        $query = $this->db->pdo->query($sql);
        return $query->fetchAll();
    }
public function addUserToDB($anh) {
    $ten = $_POST['ten'];
    $email = $_POST['email'];
    $matkhau = password_hash($_POST['matkhau'] ?? '', PASSWORD_BCRYPT);
    $diachi = $_POST['diachi'];
    $sdt = $_POST['sdt'];
    $role = $_POST['role'];

    $sql = "
        INSERT INTO user (ten, email, sdt, matkhau, diachi, anh, role) 
        VALUES (:ten, :email, :sdt, :matkhau, :diachi, :anh, :role)
    ";

    $stmt = $this->db->pdo->prepare($sql);
    $stmt->bindParam(':ten', $ten);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':sdt', $sdt);
    $stmt->bindParam(':matkhau', $matkhau);
    $stmt->bindParam(':diachi', $diachi);
    $stmt->bindParam(':anh', $anh); // ảnh không còn để trống nữa
    $stmt->bindParam(':role', $role, PDO::PARAM_INT);

    return $stmt->execute();
}


}
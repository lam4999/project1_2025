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
public function getUserById(){
    $id = $_GET['id'];
    $sql = "select * from user where id = :id";
    $stmt = $this->db->pdo->prepare($sql);
    $stmt->bindParam(':id', $id);
    if($stmt->execute()){
        return $stmt->fetch();
    }
    return false;
}
public function updateUserToDB($destPath){
    $user = $this->getUserById();

    $ten = $_POST['ten'];
    $email = $_POST['email'];
    $matkhau = $_POST['matkhau'] != "" ? password_hash($_POST['matkhau'], PASSWORD_BCRYPT) : $user['matkhau'];
    $diachi = $_POST['diachi'];
    $sdt = $_POST['sdt'];
    $role = $_POST['role'];
    $anh = $destPath;
    $id = $_GET['id'];

    $sql = "
        UPDATE user 
        SET ten=:ten, email=:email, sdt=:sdt, matkhau=:matkhau, diachi=:diachi, anh=:anh,update-at=:update-at, role=:role 
        WHERE id=:id
    ";

   $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

$stmt = $this->db->pdo->prepare($sql);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':password', $password);
$stmt->bindParam(':address', $address);
$stmt->bindParam(':phone', $phone);
$stmt->bindParam(':image', $image);
$stmt->bindParam(':updated_at', $now);
$stmt->bindParam(':role', $role, PDO::PARAM_INT);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);

return $stmt->execute();

}
public function deleteUser(){
    $id=$_GET['id'];

    $sql = "DELETE FROM user WHERE id=:id";
    $stmt = $this->db->pdo->prepare($sql);
    $stmt->bindParam(':id', $id);
    return $stmt->execute();    

}

}
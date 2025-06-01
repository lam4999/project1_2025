<?php
class UserController{
    public function getAllUser(){
        $userModel = new UserModel();
        $listUser = $userModel->getAllData();
        include_once './app/views/admin/user.php'; // View sử dụng biến này
    }
    public function addUser(){
        include_once './app/views/admin/add-user.php'; // View để thêm người dùng
    }
   public function addPostUser() {
    $uploadDir = 'assets/admin/upload/';
    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
    $imagePath = '';

    if (isset($_FILES['anh']) && $_FILES['anh']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['anh']['tmp_name'];
        $fileName = basename($_FILES['anh']['name']);
        $fileType = mime_content_type($fileTmpPath);
        $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        $newFileName = uniqid() . '.' . $fileExtension;
        $destPath = $uploadDir . $newFileName;

        if (in_array($fileType, $allowedTypes)) {
            if (move_uploaded_file($fileTmpPath, $destPath)) {
                $imagePath = $destPath;
            } else {
                $_SESSION['message'] = 'Không thể di chuyển tệp tải lên.';
                header("Location: " . BASE_URL . "?role=admin&act=add-user");
                exit;
            }
        } else {
            $_SESSION['message'] = 'Định dạng tệp không hợp lệ. Chỉ cho phép JPEG, PNG, GIF.';
            header("Location: " . BASE_URL . "?role=admin&act=add-user");
            exit;
        }
    } else {
        $_SESSION['message'] = 'Vui lòng chọn ảnh hợp lệ.';
        header("Location: " . BASE_URL . "?role=admin&act=add-user");
        exit;
    }

    $userModel = new UserModel();
    $message = $userModel->addUserToDB($imagePath);

    if ($message) {
        $_SESSION['message'] = 'Thêm mới thành công';
        header("Location: " . BASE_URL . "?role=admin&act=all-user");
        exit;
    } else {
        $_SESSION['message'] = 'Thêm mới không thành công';
        header("Location: " . BASE_URL . "?role=admin&act=add-user");
        exit;
    }
    
}
public function updateUser(){
if (!isset($_GET['id'])){

    $_SESSION['message']= 'Vui long chon user can sua ';
    header("Location: " . BASE_URL . "?role=admin&act=all-user");
    exit;
}
$userModel = new UserModel();
$user = $userModel->getUserById();
if (!$user ){
     $_SESSION['message']= 'Khong tim thay du lieu ';
    header("Location: " . BASE_URL . "?role=admin&act=all-user");
    exit;

}
include_once './app/views/admin/update-user.php';
}
public function updatePostUser(){

 $uploadDir = 'assets/admin/upload/';
    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
    $imagePath = '';

    if (isset($_FILES['anh']) && $_FILES['anh']['error'] === UPLOAD_ERR_OK) {
            if (!isset($_GET['id'])){

    $_SESSION['message']= 'Vui long chon user can sua ';
    header("Location: " . BASE_URL . "?role=admin&act=all-user");
    exit;
}$userModel = new UserModel();
$user = $userModel->getUserById();
 

        $fileTmpPath = $_FILES['anh']['tmp_name'];
        $fileName = basename($_FILES['anh']['name']);
        $fileType = mime_content_type($fileTmpPath);
        $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        $newFileName = uniqid() . '.' . $fileExtension;
        $destPath = $uploadDir . $newFileName;

        if (in_array($fileType, $allowedTypes)) {
            if (move_uploaded_file($fileTmpPath, $destPath)) {
                $imagePath = $destPath;
            } else {
                $_SESSION['message'] = 'Không thể di chuyển tệp tải lên.';
                header("Location: " . BASE_URL . "?role=admin&act=add-user");
                exit;
            }
        } else {
            $_SESSION['message'] = 'Định dạng tệp không hợp lệ. Chỉ cho phép JPEG, PNG, GIF.';
            header("Location: " . BASE_URL . "?role=admin&act=add-user");
            exit;
        }
    } else {
        $_SESSION['message'] = 'Vui lòng chọn ảnh hợp lệ.';
        header("Location: " . BASE_URL . "?role=admin&act=add-user");
        exit;
    }
    // xoa anh cu 
    unlink($user->anh);

    $userModel = new UserModel();
    $message = $userModel->updateUserToDB($imagePath);

    if ($message) {
        $_SESSION['message'] = 'Chinh sua thanh cong';
        header("Location: " . BASE_URL . "?role=admin&act=all-user");
        exit;
    } else {
        $_SESSION['message'] = 'Chinh sua khong thanh cong';
        header("Location: " . BASE_URL . "?role=admin&act=update-user&id=" . $_GET['id']);
        exit;
    }
    

}
public function deleteUser  (){
$userModel = new UserModel();
$user = $userModel->getUserById();
// xoa anh 

$message = $userModel->deleteUser();

    if ($message) {
        $_SESSION['message'] = 'Xoa thanh cong';
        header("Location: " . BASE_URL . "?role=admin&act=all-user");
        exit;
    } else {
        $_SESSION['message'] = 'Xoa khong thanh cong';
        header("Location: " . BASE_URL . "?role=admin&act=all-user&id=" . $_GET['id']);
        exit;
    }
    

}
public function viewUser() {
    if (!isset($_GET['id'])) {
        $_SESSION['message'] = 'Không tìm thấy ID người dùng';
        header("Location: " . BASE_URL . "?role=admin&act=all-user");
        exit;
    }

    $id = $_GET['id'];
    $userModel = new UserModel();
    $user = $userModel->getUserById($id);

    if (!$user) {
        $_SESSION['message'] = 'Người dùng không tồn tại';
        header("Location: " . BASE_URL . "?role=admin&act=all-user");
        exit;
    }

    include_once './app/views/admin/view-user.php';
}



}
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


}
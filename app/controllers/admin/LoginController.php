<?php
class LoginController{
      public function login(){
        include_once './app/views/admin/auth-login.php';
    }
public function postLogin(){
    // $_POST['name'] - not used
    // $_POST['password']

    $homeModel = new HomeModel();
    $dataUsers = $homeModel->checkLogin();

    if ($dataUsers){
        $_SESSION['user'] = [
            'id'    => $dataUsers->id,
            'ten'  => $dataUsers->ten,
            'email' => $dataUsers->email,
        ];

        header("Location: " . BASE_URL . "?role=admin&act=home");
        exit;
    } else {
        $_SESSION['error'] = "Email hoặc Password không đúng";
        header("Location: " . BASE_URL . "?role=admin&act=login");
        exit;
    }
}

public function logout(){
    if (!isset($_SESSION['user'])) {
        unset($_SESSION['user']);
    }
    $_SESSION['error'] = "Đăng xuất thành công";
        header("Location: " . BASE_URL . "?role=admin&act=login");
        exit;
}
}
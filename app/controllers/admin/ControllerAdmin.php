<?php
class ControllerAdmin {
    public function __construct(){
        if(!isset($_SESSION['user'])){
            $_SESSION['error'] = "Bạn phải đăng nhập trước";
            header("Location: " . BASE_URL . "?role=admin&act=login");
            exit;
        }
    }
}

<?php

class Homecontroller{
    public function dashboard(){
        $homemodel = new Homemodel();
        $dataUsers = $homemodel->getUsers();
        include_once './app/views/admin/index.php';
    }



    public function login(){
        include_once './app/views/admin/auth-login.php';
    }

    public function postlogin(){
        // $_POST['ten'];
        // $_POST['matkhau'];
        $homemodel = new Homemodel();
        $dataUsers = $homemodel->checkLogin();
        var_dump($dataUsers);
        if($dataUsers){
            header('Location: '.BASE_URL.'?role=admin&act=home');
            exit;
        }else{
            $_SESSION['error'] = "Email hoặc mật khẩu không đúng";
            header('Location: '.BASE_URL.'?role=admin&act=login');
        }
    }
}
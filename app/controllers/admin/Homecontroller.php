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
        $_POST['ten']
    }
}
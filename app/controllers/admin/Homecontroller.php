<?php

class Homecontroller{
    public function dashboard(){
        $homemodel = new Homemodel();
        $dataUsers = $homemodel->getUsers();
        include_once './app/views/admin/index.php';
    }
}
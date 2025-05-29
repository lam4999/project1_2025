<?php

require_once './app/models/admin/Homemodel.php';

class Homecontroller extends ControllerAdmin {
    public function dashboard() {
        $model = new Homemodel();
        $dataUsers = $model->getUsers(); // Lấy dữ liệu từ model
        
        include_once './app/views/admin/index.php'; // View sử dụng biến này
    }
<?php
session_start();
include 'app/database/database.php';



include 'app/models/admin/Homemodel.php';
include 'app/models/admin/UserModel.php';


include 'app/controllers/admin/ControllerAdmin.php';
include 'app/controllers/admin/Homecontroller.php';
include 'app/controllers/admin/LoginController.php';
include 'app/controllers/admin/UserController.php';
const BASE_URL = "http://localhost/project1_2025/";
include 'router/web.php';

// echo password_hash('123456', PASSWORD_BCRYPT);
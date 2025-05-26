<?php
$role = isset($_GET['role']) ? $_GET['role'] : 'user';
$act = isset($_GET['act']) ? $_GET['act'] : '';
if ($role == 'user') {
    echo "Trang user";
} else {
    switch ($act) {
        // http://localhost/project1_2025/?role=admin&act=home
        case 'home': {
                include_once 'app/controllers/admin/Homecontroller.php';
                $homecontroller = new Homecontroller();
                $homecontroller->dashboard();
                break;
            }
            // http://localhost/project1_2025/?role=admin&act=login
        case 'login': {
                include_once 'app/controllers/admin/Homecontroller.php';
                $homecontroller = new Homecontroller();
                $homecontroller->login();
                break;
            }
            // http://localhost/project1_2025/?role=admin&act=post-login
        case 'post-login': {
                include_once 'app/controllers/admin/Homecontroller.php';
                $homecontroller = new Homecontroller();
                $homecontroller->postlogin();
                break;
            }
        default: 
            $homecontroller = new Homecontroller();
            $homecontroller->dashboard();
            break;
    }
}

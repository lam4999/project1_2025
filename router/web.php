<?php
$role = isset($_GET['role']) ? $_GET['role'] : 'user';
$act = isset($_GET['act']) ? $_GET['act'] : '';
if ($role == 'user') {
    echo "Trang user";
} else {
    switch ($act) {
        // http://localhost/Duan1_2025/Duan1_2025/duan1/?role=admin&act=home
        case 'home':
            include_once 'app/controllers/admin/Homecontroller.php';
            $homecontroller = new Homecontroller();
            $homecontroller->dashboard();
            break;
        default:
            $homecontroller = new Homecontroller();
            $homecontroller->dashboard();
            break;
    }
}

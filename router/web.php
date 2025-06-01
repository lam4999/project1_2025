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
                $logincontroller = new LoginController();
                $logincontroller->login();
                break;
            }
            // http://localhost/project1_2025/?role=admin&act=post-login
        case 'post-login': {
                include_once 'app/controllers/admin/Homecontroller.php';
                $logincontroller = new LoginController();
                $logincontroller->postlogin();
                break;
            }
         case 'logout': {
                include_once 'app/controllers/admin/Homecontroller.php';
                $logincontroller = new LoginController();
                $logincontroller->logout();
                break;
            }
          case 'all-user': {
    include_once 'app/controllers/admin/UserController.php';
    $userController = new UserController();
    $userController->getAllUser();
    break;
}
case 'add-user': {
    include_once 'app/controllers/admin/UserController.php';
    $userController = new UserController();
    $userController->addUser();
    break;
}
case 'update-user': {
    include_once 'app/controllers/admin/UserController.php';
    $userController = new UserController();
    $userController->updateUser();
    break;
}
case 'update-post-user': {
    include_once 'app/controllers/admin/UserController.php';
    $userController = new UserController();
    $userController->updatePostUser();
    break;
}
case 'post-add-user': {
    include_once 'app/controllers/admin/UserController.php';
    $userController = new UserController();
    $userController->addPostUser();
    break;
}
case 'delete-user': {
    include_once 'app/controllers/admin/UserController.php';
    $userController = new UserController();
    $userController->deleteUser();
    break;
}
case 'view-user': {
    include_once 'app/controllers/admin/UserController.php';
    $userController = new UserController();
    $userController->viewUser();
    break;
}

        default: 
            $homecontroller = new Homecontroller();
            $homecontroller->dashboard();
            break;
    }
}

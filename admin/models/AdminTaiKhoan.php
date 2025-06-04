<?php
session_start();

// Kết nối CSDL
function connectDB() {
    $host = 'localhost';
    $dbname = 'ten_csdl'; // ← Thay bằng tên CSDL của bạn
    $username = 'root';
    $password = ''; // ← Thay bằng mật khẩu nếu có

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        die("Kết nối thất bại: " . $e->getMessage());
    }
}

// Class xử lý tài khoản
class AdminTaiKhoan {
    public $conn;

    public function __construct() {
        $this->conn = connectDB();
    }

    public function checkLogin($email, $mat_khau) {
        try {
            $sql = "SELECT * FROM user WHERE email = :email LIMIT 1";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([':email' => $email]);
            $user = $stmt->fetch();

            if ($user && $user['mat_khau'] === $mat_khau) {
                return $user; // Trả về dữ liệu người dùng
            } else {
                return "Thông tin đăng nhập không chính xác";
            }
        } catch (Exception $e) {
            return "Lỗi: " . $e->getMessage();
        }
    }
}

// Xử lý đăng nhập
$thongBao = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $mat_khau = $_POST['mat_khau'] ?? '';

    $adminTK = new AdminTaiKhoan();
    $user = $adminTK->checkLogin($email, $mat_khau);

    if (is_array($user)) {
        $_SESSION['user'] = $user;

        // Chuyển hướng dựa trên vai trò
        if ($user['vai_tro'] === 'admin') {
            header("Location: /admin/dashboard.php");
        } else {
            header("Location: /user/home.php");
        }
        exit();
    } else {
        $thongBao = $user;
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập</title>
</head>
<body>
    <h2>Đăng nhập</h2>
    <?php if (!empty($thongBao)) : ?>
        <p style="color: red;"><?php echo $thongBao; ?></p>
    <?php endif; ?>

    <form method="POST">
        <label for="email">Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label for="mat_khau">Mật khẩu:</label><br>
        <input type="password" name="mat_khau" required><br><br>

        <button type="submit">Đăng nhập</button>
    </form>
</body>
</html>

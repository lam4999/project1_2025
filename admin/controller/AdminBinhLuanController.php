<?php
class AdminBinhLuanController
{
    public $modelBinhLuan;

    public function __construct()
    {
        $this->modelBinhLuan = new AdminBinhLuan();
    }

    // Hiển thị danh sách bình luận
    public function danhSachBinhLuan()
    {
        $listBinhLuan = $this->modelBinhLuan->getAllBinhLuan();
        require_once './views/binhluan/listBinhLuan.php';
    }

    // Hiển thị form thêm bình luận
    public function formAddBinhLuan()
    {
        require_once './views/binhluan/addBinhLuan.php';
    }

    // Xử lý thêm bình luận
    public function postAddBinhLuan()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $noi_dung = $_POST['noi_dung'];
            $id_sanpham = $_POST['id_sanpham'];
            $id_nguoidung = $_POST['id_nguoidung'];
            $ngay_tao = $_POST['ngay_tao'];

            $error = [];
            if (empty($noi_dung)) {
                $error['noi_dung'] = 'Nội dung không được để trống';
            }

            if (empty($error)) {
                $this->modelBinhLuan->insertBinhLuan($noi_dung, $id_sanpham, $id_nguoidung, $ngay_tao);
                header("Location: " . BASE_URL_ADMIN . '?act=binh-luan');
                exit();
            } else {
                require_once './views/binhluan/addBinhLuan.php';
            }
        }
    }

    // Hiển thị form sửa bình luận
    public function formEditBinhLuan()
    {
        $id = $_GET['id_binhluan'];
        $binhluan = $this->modelBinhLuan->getDetailBinhLuan($id);
        require_once './views/binhluan/editBinhLuan.php';
    }

    // Xử lý cập nhật bình luận
    public function postEditBinhLuan()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['id'];
            $noi_dung = $_POST['noi_dung'];
            $ngay_tao = $_POST['ngay_tao'];

            $error = [];
            if (empty($noi_dung)) {
                $error['noi_dung'] = 'Nội dung không được để trống';
            }

            if (empty($error)) {
                $this->modelBinhLuan->updateBinhLuan($id, $noi_dung, $ngay_tao);
                header("Location: " . BASE_URL_ADMIN . '?act=binh-luan');
                exit();
            } else {
                $binhluan = ['id' => $id, 'noi_dung' => $noi_dung, 'ngay_tao' => $ngay_tao];
                require_once './views/binhluan/editBinhLuan.php';
            }
        }
    }

    // Xóa bình luận
    public function deleteBinhLuan()
    {
        $id = $_GET['id_binhluan'];
        $this->modelBinhLuan->deleteBinhLuan($id);
        header("Location: " . BASE_URL_ADMIN . '?act=binh-luan');
        exit();
    }
}

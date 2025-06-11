<?php
class AdminBinhLuan
{
    public $conn;

    public function __construct()
    {
        $this->conn = connectDB();
    }

    // Lấy tất cả bình luận
    public function getAllBinhLuan()
    {
        try {
            $sql = "SELECT * FROM comment ORDER BY id DESC";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (Exception $e) {
            echo "Lỗi: " . $e->getMessage();
        }
    }

    // Thêm bình luận mới
    public function insertBinhLuan($noi_dung, $id_sanpham, $id_nguoidung, $ngay_tao)
    {
        try {
            $sql = "INSERT INTO comment (noi_dung, id_sanpham, id_nguoidung, ngay_tao) VALUES (:noi_dung, :id_sanpham, :id_nguoidung, :ngay_tao)";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                ':noi_dung' => $noi_dung,
                ':id_sanpham' => $id_sanpham,
                ':id_nguoidung' => $id_nguoidung,
                ':ngay_tao' => $ngay_tao
            ]);
            return true;
        } catch (Exception $e) {
            echo "Lỗi: " . $e->getMessage();
        }
    }

    // Lấy chi tiết 1 bình luận
    public function getDetailBinhLuan($id)
    {
        try {
            $sql = "SELECT * FROM comment WHERE id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([':id' => $id]);
            return $stmt->fetch();
        } catch (Exception $e) {
            echo "Lỗi: " . $e->getMessage();
        }
    }

    // Cập nhật bình luận
    public function updateBinhLuan($id, $noi_dung, $ngay_tao)
    {
        try {
            $sql = "UPDATE comment SET noi_dung = :noi_dung, ngay_tao = :ngay_tao WHERE id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                ':id' => $id,
                ':noi_dung' => $noi_dung,
                ':ngay_tao' => $ngay_tao
            ]);
            return true;
        } catch (Exception $e) {
            echo "Lỗi: " . $e->getMessage();
        }
    }

    // Xóa bình luận
    public function deleteBinhLuan($id)
    {
        try {
            $sql = "DELETE FROM comment WHERE id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([':id' => $id]);
            return true;
        } catch (Exception $e) {
            echo "Lỗi: " . $e->getMessage();
        }
    }
}

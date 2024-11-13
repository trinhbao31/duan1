<?php
class AdminTaiKhoanController
{
    public $modelTaiKhoan;

    public function __construct()
    {
        $this->modelTaiKhoan = new AdminTaiKhoan();
    }
    public function danhSachQuanTri()
    {
        $listQuanTri = $this->modelTaiKhoan->getAllTaiKhoan(1);
        // var_dump($listQuanTri);die;

        require_once './view/taikhoan/quantri/listQuantri.php';
    }

    public function formAddQuantri()
    {
        require_once './view/taikhoan/quantri/addQuantri.php';

        deleteSessionsError();
    }
    public function postAddQuantri()
    {
        //hàm dùng để thêm dữ liệu
        // var_dump($_POST);
        //kiểm tra xem dư lieu co phai dc sb lên form không
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // lấy ra dữ liệu
            $ho_ten = $_POST['ho_ten'];
            $email = $_POST['email'];
            //tao một mảng chứa dl
            $errors = [];
            if (empty($ho_ten)) {
                $errors['ho_ten'] = 'Họ tên không được bỏ trống';
            }
            if (empty($email)) {
                $errors['email'] = 'Email không được bỏ trống';
            }
            $_SESSION['error'] = $errors;

            // nếu ko có lỗi tiến hành thêm tài khoản
            if (empty($errors)) {
                //nếu không có lỗi thì tiến ảnh thêm tài khoản
                // var_export('ok');

                // đặt password mặc định
                $password = password_hash('123@123ab', PASSWORD_BCRYPT);
                // var_dump($password);die;
                //khai báo chức vụ
                $chuc_vu_id = 1;
                $this->modelTaiKhoan->insertTaiKhoan($ho_ten, $email, $password, $chuc_vu_id);

                header("Location: " . BASE_URL_AMIN . '?act=list-tai-khoan-quan-tri');
                exit();
            } else {
                //trả về form và lỗi
                $_SESSION['flash'] = true;

                header("Location: " . BASE_URL_AMIN . '?act=form-them-quan-tri');
                exit();
            }
        }
    }
    public function formEditQuantri()
    {
        $id_quan_tri = $_GET['id_quan_tri'];

        $quanTri = $this->modelTaiKhoan->getDetailQuanTri($id_quan_tri);

        // var_dump($quanTri);die;
        require_once './view/taikhoan/quantri/editQuantri.php';
    
        deleteSessionsError();
    }

    public function postEditQuantri()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            //Lấy dữ liệu
            $quan_tri_id = $_POST['quan_tri_id'] ?? '';

            $ho_ten = $_POST['ho_ten'] ?? '';
            $email = $_POST['email'] ?? '';
            $so_dien_thoai = $_POST['so_dien_thoai'] ?? '';
            $trang_thai = $_POST['trang_thai'] ?? '';

            $errors = [];

            if(empty($ho_ten)) {
                $errors['ho_ten'] = 'Họ tên không được để trống' ;
            }
            if(empty($email)) {
                $errors['email'] = 'Họ tên không được để trống' ;
            }
            if(empty($trang_thai)) {
                $errors['trang_thai'] = 'Vui lòng chọn trạng thái' ;
            }

            $_SESSION['error'] = $errors;

            if (empty($errors)) {

                $this->modelTaiKhoan->upDateTaiKhoan($quan_tri_id, $ho_ten, $email, $so_dien_thoai, $trang_thai);

                header("Location: " . BASE_URL_AMIN . '?act=list-tai-khoan-quan-tri');
                exit();
            
            }else {

                $_SESSION['flash'] = true;

                header("Location: " . BASE_URL_AMIN . '?act=form-sua-quan-tri&id_quan_tri=' .$quan_tri_id);
                exit();

            }

        }
    }
}

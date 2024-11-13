<?php

session_start();


require_once '../commons/env.php'; // Khai bao bien moi truong
require_once '../commons/function.php'; //Ham ho tro

//Require toan bo file Controllers
require_once './controller/adminDanhmucController.php';
require_once './controller/adminSanPhamController.php';
require_once './controller/adminBaoCaoThongKeController.php';
require_once './controller/AdminTaiKhoanController.php';
// echo('Thanh cong');



// Require toan bo file models
require_once './model/adminSanPham.php';
require_once './model/adminDanhmuc.php';
require_once './model/adminSanPham.php';
require_once './model/AdminTaiKhoan.php';



//Route
$act = $_GET['act'] ?? '/';


require_once "./view/asset/header.php";
// require_once './view/asset/slider.php';


// $act = "";
// if (isset($_GET["act"])) {
//     $act = $_GET["act"];
// }
// $id = "";
// if (isset($_GET["id"])) {
//     $id = $_GET["id"];
// }

// include "view/home.php";
match ($act) {


    //Route báo cáo thống kê
    '/'  => (new adminBaoCaoThongKeController())->home(), //trường hợp đặc biệt




    //Route danh mục
    'danh-muc' => (new adminDanhmucController())->danhsachdanhmuc(),
    'form-them-danh-muc' => (new adminDanhmucController())->formAddDanhmuc(),
    'them-danh-muc' => (new adminDanhmucController())->postAddDanhmuc(),
    'form-sua-danh-muc' => (new adminDanhmucController())->formEditDanhmuc(),
    'sua-danh-muc' => (new adminDanhmucController())->postEditDanhmuc(),
    'xoa-danh-muc' => (new adminDanhmucController())->deleteDanhmuc(),

    //Route SanPham
    'san-pham' => (new adminSanPhamController())->danhsachSanPham(),
    'form-them-san-pham' => (new adminSanPhamController())->formAddSanPham(),
    'them-san-pham' => (new adminSanPhamController())->postAddSanPham(),
    'form-sua-san-pham' => (new adminSanPhamController())->formEditSanPham(),
    'sua-san-pham' => (new adminSanPhamController())->postEditSanPham(),

    'xoa-san-pham' => (new adminSanPhamController())->deleteSanPham(),

   
    //route quản lý tài khoản
    'list-tai-khoan-quan-tri' => (new AdminTaiKhoanController())->danhSachQuanTri(),
    'form-them-quan-tri' => (new AdminTaiKhoanController())->formAddQuantri(),
    'them-quan-tri' => (new AdminTaiKhoanController())->postAddQuantri(),
    'form-sua-quan-tri' => (new AdminTaiKhoanController())->formEditQuantri(),
    'sua-quan-tri' => (new AdminTaiKhoanController())->postEditQuantri(),
    
};



require_once "./view/asset/footer.php";

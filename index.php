<?php
    require_once './commons/env.php'; // Khai bao bien moi truong
    require_once './commons/function.php';//Ham ho tro

    //Require toan bo file Controllers
    require_once './controller/HomeController.php';



    // Require toan bo file models
    require_once './model/sanPham.php';



    //Route
    $act = $_GET['act'] ?? '/';


    require_once "view/asset/header.php";
    require_once 'view/asset/slider.php';


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
        '/'  => (new HomeController())->index(), //trường hợp đặc biệt

        'chi-tiet-san-pham' => (new HomeController())->chiTietSanPham(),

    };



    require_once "view/asset/footer.php";


?>
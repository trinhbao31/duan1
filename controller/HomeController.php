<?php

    class HomeController {

        
        public function index(){
            echo "Du an 1";
        }
        public function chiTietSanPham()
        {
            require_once './view/sanPham.php';
        }


    }
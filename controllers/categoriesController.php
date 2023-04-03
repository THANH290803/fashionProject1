<?php

    $action = '';
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }
    //    Kiểm tra hành động hiện tại
    switch ($action) {
        case '':
            //            Lấy dữ liệu từ db
            include_once 'model/categoriesModel.php';
            //            Hiển thị ra view
            include_once '';
            break;
        case 'create':
            //            Lấy toàn bộ class
            include_once 'model/categoriesModel.php';
            //            Hiển thị form thêm
            include_once 'view/products/insert_product.php';
            break;
        case 'store':
            //            Lưu dữ liệu lên DB
            include_once 'model/categoriesModel.php';
            //            Quay về trang danh sách
            break;
    }


?>
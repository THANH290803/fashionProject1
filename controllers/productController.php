<?php

    $action = '';
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }
    //    Kiểm tra hành động hiện tại
    switch ($action) {
        case '':

            include_once 'model/productModel.php';

            include_once 'view/products/index.php';
            break;
        case 'create':
            include_once 'model/productModel.php';
            include_once 'view/products/insert_product.php';
            break;
        case 'store':
            include_once 'model/productModel.php';
            header('Location:index.php?controller=product&action=create');
            break;
    }
?>
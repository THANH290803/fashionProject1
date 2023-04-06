<?php
    session_start();
    $controller = '';
    if(isset($_GET['controller'])){
        $controller = $_GET['controller'];
    }

    switch ($controller){
        case '':
            include_once 'view/index.php';
            break;
        case 'product':
            include_once 'controllers/productController.php';
            break;
        case 'category':
            include_once 'controllers/categoriesController.php';
            break;
        case 'productCategory':
            include_once 'controllers/product_categoriesController.php';
            break;
        case 'slide':
            include_once 'controllers/slideController.php';
            break;
        case 'function':
            include_once 'controllers/functionController.php';
            break;
        case 'login':
            include_once 'controllers/loginController.php';
            break;
    }

?>
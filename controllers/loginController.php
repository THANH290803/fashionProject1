<?php
    $action = '';
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }
    //    Kiểm tra hành động hiện tại
    switch ($action) {
        case 'login':
            include_once 'view/loginAdmin/login.php';
            break;
        case 'loginProcess':
            include_once 'model/loginModel.php';
            break;
    }


?>
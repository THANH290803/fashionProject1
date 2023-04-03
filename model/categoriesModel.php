<?php

    function indexCategories(){
        include_once 'connect/openDB.php';
        $sql = "SELECT * FROM categories";
        $categories = mysqli_query($connect, $sql);
        include_once 'connect/closeDB.php';
        return $categories;
    }

    switch ($action){
        case '':
            $categories = indexCategories();
            break;
    }

?>

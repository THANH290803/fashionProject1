<?php
    function indexProduct(){
        include_once 'connect/openDB.php';
        $sql = "SELECT * FROM products";
        $products = mysqli_query($conn, $sql);
        include_once 'connect/closeDB.php';
        return $products;
    }

    function creatProduct(){
        include_once 'connect/openDB.php';
        $sql = "SELECT * FROM categories";
        $categories = mysqli_query($conn, $sql);
        $sqlcategoriesProduct = "SELECT * FROM product_categories";
        $categoriesProduct = mysqli_query($conn, $sqlcategoriesProduct);
        include_once 'connect/closeDB.php';
        $array = array();
        $array['categories'] = $categories;
        $array['categoriesProduct'] = $categoriesProduct;
        return $array;
    }

    function storeProduct(){
        $product_title = $_POST['product_title'];
        $p_cat_id = $_POST['p_cat_id'];
        $cat_id = $_POST['cat_id'];
        $product_img1 = $_FILES['product_img1']['name'];
        $product_img2 = $_FILES['product_img2']['name'];
        $product_img3 = $_FILES['product_img3']['name'];

        $temp_name1 = $_FILES['product_img1']['tmp_name'];
        $temp_name2 = $_FILES['product_img2']['tmp_name'];
        $temp_name3 = $_FILES['product_img3']['tmp_name'];

        move_uploaded_file($temp_name1, "view/product_images/$product_img1");
        move_uploaded_file($temp_name2, "view/product_images/$product_img2");
        move_uploaded_file($temp_name3, "view/product_images/$product_img3");


        $date = $_POST['date'];
        $product_price = $_POST['product_price'];
        $product_keywords = $_POST['product_keywords'];
        $product_desc = $_POST['product_desc'];

        include_once('connect/openDB.php');
        $sql = "INSERT INTO products(p_cat_id, cat_id, product_title, product_img1, product_img2, product_img3, date, product_price, product_keywords, product_desc)
                VALUES ('$p_cat_id', '$cat_id' , '$product_title', '$product_img1', '$product_img2', '$product_img3', '$date', '$product_price', '$product_keywords', '$product_desc')";
        mysqli_query($conn, $sql);

//        if ($insert_product){
//
//            echo "<script> alert('Product has been inserted sucessfully')</script>";
//            echo "<script> window.open('insert_product.php', '_self')</script>";
//        }
        include_once('connect/closeDB.php');

    }
    function destroy(){
        $id = $_GET['id'];
        include_once 'connect/openDB.php';
        $sql = "DELETE FROM products WHERE product_id = '$id'";
        mysqli_query($conn, $sql);
        include_once 'connect/openDB.php';
    }

switch ($action){
    case '':
//            Lấy dữ liệu từ DB
        $products = indexProduct();
        break;
    case 'create':
        $array = creatProduct();
        break;
    case 'store':
        storeProduct();
        break;
    case 'destroy':
        destroy();
        break;


}


?>

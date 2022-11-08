<?php
session_start();
// layout Header
include 'layouts/header.php';
include 'model/pdo.php';
include 'model/cart.php';
include 'model/categories.php';
include 'model/products.php';
include 'model/customer.php';
include 'model/comment.php';
include 'model/bill.php';

    if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];

    $list_products = load_products_home();


if(isset($_GET['act'])) {

    $act = $_GET['act'];

    switch ($act) {

        // form
        case 'form':
            include 'form/login.php';
            break;

        case 'signup':
            include 'form/signup.php';
            break;

        //xem detail
        case 'detail':
            if(isset($_GET['id_products'])&&($_GET['id_products']>0)){
                $id=$_GET['id_products'];
                $one_products = load_products_one($id);
                extract($one_products);
                include 'pages/detail.php'; 
            }else{
                include 'pages/container.php';
            }
            break;

        // Xem giỏ hàng
        case 'addtocart':
            if(isset($_POST['addtocart'])&&($_POST['addtocart'])){
                $id = $_POST['id'];
                $name = $_POST['name'];
                $img = $_POST['img'];
                $money = $_POST['money'];
                $count = 1;
                $total = $count * $money;
                $products_add=[$id,$name,$img,$money,$count,$total];
                array_push($_SESSION['mycart'],$products_add);
                
            }
            include 'pages/cart/viewcart.php';
            break;
        case 'delete_cart':
            if(isset($_GET['id'])){
                array_splice($_SESSION['mycart'],$_GET['id'],1);
            }else{
                $_SESSION['mycart']=[];
            }
            include 'pages/cart/viewcart.php';
            break;
        case 'viewcart':
            include 'pages/cart/viewcart.php';
            break;

        default:
            include 'pages/container.php';
            break;
    }
} else {
    include 'pages/container.php';
}

// layout Footer
include 'layouts/footer.php';


?>
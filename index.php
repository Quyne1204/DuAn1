<?php
session_start();

if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];

include 'model/categories.php';

// layout Header
include 'layouts/header.php';
include 'model/pdo.php';
include 'model/cart.php';
include 'model/products.php';
include 'model/customer.php';
include 'model/comment.php';
include 'model/bill.php';
$list_products = load_products_home();  
$list_dm = loadall_danhmuc();
$list_dmm = loadall_danhmucc();
$list_products_top = load_products_top10();

if(isset($_GET['act'])) {

    $act = $_GET['act'];

    switch ($act) {

        case 'danhmuc':
            if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
                $kyw = $_POST['kyw'];
            }else{
                $kyw = "";
            }
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $id = $_GET['id'];
            }else{
                $id =  0;
            }
            $list_sp = loadall_product($kyw, $id);
            $name_dm = load_name_type($id);
            include 'pages/products.php';
            break;
        // form//////////////////////////////////////////////////////////////////////////////////////////////
        case 'signup':
            if(isset($_POST['signup'])&&($_POST['signup'])){
                $user_name = $_POST['user_name'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $role = $_POST['role'];

                user_insert($password,$user_name,$email,$role);
                $tb="Đăng ký thành công";
            }
            include 'form/signup.php';
            break;

        case 'login':
            if(isset($_POST['login'])&&($_POST['login'])){
                $user_name = $_POST['user_name'];
                $password = $_POST['password'];

                $login = user_login($user_name,$password);
                $_SESSION['user'] = $login;
                if(is_array($login)){
                    if($_SESSION['user']['role']==1){
                        echo "<script>window.location.href='admin/index.php';</script>";
                    }else if($_SESSION['user']['role']==2){
                        echo "<script>window.location.href='index.php';</script>";
                    }
                }else{
                    $tb="Thông tin đăng nhập không đúng hoặc tài khoản chưa được đăng ký";
                }
            }
            include 'form/login.php';
            break;
        case 'edit_tk':
            if(isset($_GET['id'])&&($_GET['id'])){
                $user = loadone_cus($_GET['id']);
            }
            include 'pages/edit_tk.php';
            break;
        case 'edit_user':
            if(isset($_POST['yes'])&&($_POST['yes'])){
                $id = $_POST['id'];
                $user_name = $_POST['user_name'];
                $password = $_POST['pass'];
                $name = $_POST['name'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                update_cus($id,$user_name, $password,$name, $email, $phone, $address,'2');
                $user = loadone_cus($id);
            }
            include 'pages/account_detail.php';
            break;
        case 'logout':
            session_destroy();
            unset($_SESSION['user']);
            echo "<script>window.location.href='index.php';</script>";
            break;

        //xem detail////////////////////////////////////////////////////////////////////////////////////////
        case 'detail':
            if(isset($_GET['id_products'])&&($_GET['id_products']>0)){
                $id=$_GET['id_products'];
                $one_products = load_products_one($id);
                extract($one_products);
                $sp_cungloai = sp_cungloai($id,$type_id);
                include 'pages/detail.php'; 
            }else{
                include 'pages/container.php';
            }
            break;

        // Xem giỏ hàng//////////////////////////////////////////////////////////////////////////////////////////
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

////////bill detail////////////////////////////////////////////////////////////////////
        case 'bill_detail':
            if(isset($_POST['pay'])&&($_POST['pay'])){
                if(isset($_SESSION['user'])){ 
                     $user_id=$_SESSION['user']['id_user'];
                }else{
                     $user_id = 0;
                }
                $full_name = $_POST['full_name'];
                $address = $_POST['address'];
                $phone_number = $_POST['phone_number'];
                $email = $_POST['email'];
                $date = date("y-m-d",time());
                $total_cart= total_cart();
                $bill_pay = $_POST['bill_pay'];

                $id_bill = insert_bill($user_id,$full_name,$address,$phone_number,$email,$bill_pay,$date,$total_cart,0);

                foreach($_SESSION['mycart'] as $cart){
                    insert_cart($_SESSION['user']['id_user'],$cart[0],$cart[2],$cart[1],$cart[3],$cart[4],$cart[5],$id_bill);
                }
                $_SESSION['mycart']=[];
            }
            $list_bill = loadone_bill($id_bill);
            $detail_bill = loadall_cart($id_bill);
            include 'pages/cart/bill_detail.php';
            break;
        case 'viewcart':
            include 'pages/cart/viewcart.php';
            break;
        case 'bill':
            include 'pages/cart/bill.php';
            break;

////////khachhang////////////////////////////////////////////////////////////////////////////////////////////
        case 'acc_detail':
            include 'pages/account_detail.php';
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
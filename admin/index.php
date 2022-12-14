<?php
session_start();

if(!isset($_SESSION['admincart'])) $_SESSION['admincart']=[];
include "../model/pdo.php";
include "../model/categories.php";
include "../model/products.php";
include "../model/bill.php";
include "../model/cart.php";
include "../model/customer.php";

include "header.php";
//controller
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
////////danh mục////////////////////////////////////////////////////////////////////////////////////////
        case 'list_cate':
            $list_dm = loadall_danhmuc();
            include 'categories/list_cate.php';
            break;
        case 'add_dm':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tendm = $_POST['ten_hh'];
                insert_danhmuc($tendm);
                $thongbao = "Thêm thành công";
            }
            include 'categories/add.php';
            break;
        case 'delete_cate':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $categories = loadone_danhmuc($_GET['id']);
            }
            include 'categories/delete.php';
            break;
        case 'deletecate':
            if(isset($_POST['delete']) && ($_POST['delete'])){
                $id = $_POST['id'];
                delete_danhmuc($id);
            }
            $list_dm = loadall_danhmuc();
            include 'categories/list_cate.php';
            break;
        case 'update':
            if(isset($_GET['id'])&&($_GET['id'])){
                $categories = loadone_danhmuc($_GET['id']); 
            }
            include 'categories/update_dm.php';
            break;
        case 'update_dm':
            if (isset($_POST['update']) && ($_POST['update'])) {
                $iddm = $_POST['iddm'];
                $tendm = $_POST['ten_hh'];
                update_danhmuc($iddm, $tendm);
                $thongbao = "Sửa thành công";
            }
            $list_dm = loadall_danhmuc();
            include 'categories/list_cate.php';
            break;
            
////////San pham/////////////////////////////////////////////////////////////////////////////////////////////////////
        
        case 'list_pro':
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
            $list_dm = loadall_danhmuc();
            $list_sp = loadall_product($kyw, $id);
            include 'products/list_pro.php';
            break;
        case 'add_pro':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $iddm = $_POST['iddm'];
                $tensp = $_POST['ten_hh'];
                $giasp = $_POST['don_gia'];
                $date = $_POST['date'];
                $mo_ta = $_POST['mo_ta'];

                $name_img = $_FILES['img']['name']; 
                $target_dir = "../images/sanpham/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]); 
                move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
                
                insert_product($tensp, $date,$giasp, $name_img, $mo_ta, $iddm);
                $thongbao = "Thêm thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            include 'products/add.php';
            break;

        case 'delete_pros':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $products = load_products_one($_GET['id']); 
            }
            include 'products/delete.php';
            break;
        case 'delete_pro':
            if(isset($_POST['delete']) && ($_POST['delete'])){
                $id_sp = $_POST['id_sp'];
                delete_product($id_sp);
            }
            $sql = "select * from products order by date_added desc";
            $list_sp = pdo_query($sql);
            
            $list_dm = loadall_danhmuc();
            $list_sp = loadall_product("", 0);
            include 'products/list_pro.php';
            break;
        case 'update_pros':
            if(isset($_GET['id'])&&($_GET['id'])){
                $products = load_products_one($_GET['id']); 
            }
            
            $list_sp = loadall_product("",0);
            $listdanhmuc = loadall_danhmuc();
            include 'products/update.php';
            break;
        case 'update_pro':
            if (isset($_POST['update']) && ($_POST['update'])) {
                $iddm = $_POST['iddm'];
                $tensp = $_POST['ten_hh'];
                $giasp = $_POST['don_gia'];
                $date = $_POST['date'];
                $mo_ta = $_POST['mo_ta'];
                $id = $_POST['id_sp'];

                $name_img = $_FILES['img']['name']; 
                $target_dir = "../images/sanpham/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]); 
                move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);

                update_product($id ,$tensp, $date, $giasp, $name_img, $mo_ta, $iddm);
            }
            
            $list_dm = loadall_danhmuc();
            $list_sp = loadall_product();
            include 'products/list_pro.php';
            break;

////////Bill/////////////////////////////////////////////////////////////////////////////////////////////////////
        
        case 'list_bill':
            $list_bill = loadall_bill(0);
            include 'bill/list_bill.php';
            break;
        case 'add_bill':
            $list_sp = loadall_product();
            include 'bill/add.php';
            break;
        
        case 'addtocart':
            if(isset($_POST['addtocart'])&&($_POST['addtocart'])){
                $id = $_POST['id'];
                $name = $_POST['name'];
                $img = $_POST['img'];
                $money = $_POST['money'];
                $count = 1;
                $total = $count * $money;
                $products_add=[$id,$name,$img,$money,$count,$total];
                array_push($_SESSION['admincart'],$products_add);
            }
            $list_sp = loadall_product();
            include 'bill/add.php';
            break;
        case 'add_cart':
            $list_sp = loadall_product();
            include 'bill/add_cart.php';
            break;
            
        case 'delete_cart':
            if(isset($_GET['id'])){
                array_splice($_SESSION['admincart'],$_GET['id'],1);
            }else{
                $_SESSION['admincart']=[];
            }
            $list_sp = loadall_product();
            include 'bill/add.php';
            break;
        case 'bill':
            include 'bill/bill.php';
            break;
        case 'bill_detail':
            if(isset($_POST['pay'])&&($_POST['pay'])){
                $full_name = $_POST['full_name'];
                $address = $_POST['address'];
                $phone_number = $_POST['phone_number'];
                $email = $_POST['email'];
                $date = date("y-m-d",time());
                $total_cart= total_cart1();
                $bill_pay = $_POST['bill_pay'];

                $id_bill = insert_bill(5,$full_name,$address,$phone_number,$email,$date,$total_cart,$bill_pay);

                foreach($_SESSION['admincart'] as $cart){
                    insert_cart(5,$cart[0],$cart[2],$cart[1],$cart[3],$cart[4],$cart[5],$id_bill);
                }
                $_SESSION['admincart']=[];
            }
            $list_bill = loadall_bill(0);
            include 'bill/list_bill.php';
            break;

        case 'update_bill':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $bill= loadone_bill($_GET['id']);
            }
            include 'bill/update.php';
            break;
        case 'updatebill':
            if(isset($_POST['update_bill'])&&($_POST['update_bill'])){
                $id = $_POST['id_bill'];
                $ttdh = $_POST['ttdh'];

                bill_update($id, $ttdh);
            }
            $list_bill = loadall_bill(0);  
            include 'bill/list_bill.php';
            break;
////////khách hàng /////////////////////////////////////////////////////////////////////////////////////////////
        
        case 'list_cus':
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
            $list_cus = user_all($kyw, $id);
            include 'customer/list.php';
            break;
        case 'add_cus':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $user_name = $_POST['user_name'];
                $pass = $_POST['pass'];
                $full_name = $_POST['full_name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $address = $_POST['address']; 
                $role = $_POST['role']; 

                insert_cus($user_name, $pass,$full_name, $email, $phone,$address, $role);
                $thongbao = "Thêm thành công";
            }
            
            $list_cus = user_all("",0);
            include 'customer/add.php';
            break;
        case 'update_cus':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $user= loadone_cus($_GET['id']);
            }
            include 'customer/update.php';
            break;
        case 'updatecus':
            if(isset($_POST['update_cus'])&&($_POST['update_cus'])){
                $id = $_POST['id'];
                $user_name = $_POST['user_name'];
                $pass = $_POST['pass'];
                $full_name = $_POST['full_name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $address = $_POST['address']; 
                $role = $_POST['role']; 

                $update = update_cus($id,$user_name, $pass,$full_name, $email, $phone,$address, $role);
                $thongbao = "Update thành công";
                $list_cus = user_all("",0);
            }
            include 'customer/list.php';
            break;
            
        case 'delete_cus':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $user = loadone_cus($_GET['id']);
            }
            include 'customer/delete.php';
            break;
        case 'deletecus':
            if(isset($_POST['delete']) && ($_POST['delete'])){
                $id = $_POST['id'];
                delete_cus($id);
            }
            $list_cus = user_all("",0);
            include 'customer/list.php';
            break;
        
        default:
            break;
    }
}

include "footer.php";

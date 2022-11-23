<?php
include "../model/pdo.php";
include "../model/categories.php";
include "../model/products.php";
include "../model/bill.php";

include "header.php";
//controller
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
            //Thêm danh mục
        case 'list_cate':
            $listdanhmuc = loadall_danhmuc();
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

        case 'delete_pro':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_product($_GET['id']);
            }
            $sql = "select * from products order by date_added desc";
            $list_sp = pdo_query($sql);
            include 'products/list_pro.php';
            break;
        case 'update_pros':
            if(isset($_GET['id'])&&($_GET['id'])){
                $products = load_products_one($_GET['id']); 
            }
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
            $list_sp = loadall_product("",0);
            include 'products/list_pro.php';
            break;

        case 'list_bill':
            $list_bill = loadall_bill(0);
            include 'bill/list_bill.php';
            break;


        default:
            break;
    }
}

include "footer.php";

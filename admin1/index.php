<?php
include "../model/pdo.php";
include "../model/categories.php";
include "../model/products.php";

include "header.php";
//controller
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
            //Thêm danh mục
        case 'adddm':
            //kiểm tra xem người dùng có nhấn vào nút add không
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $type_name = $_POST['name'];
                insert_danhmuc($type_name);
                $thongbao = "Thêm thành công";
            }
            include "danhmuc/add.php";
            break;

            //List danh mục
        case 'listdm':
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;

            //Xoá danh mục
        case 'xoadm';
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_danhmuc($_GET['id']);
            }
            $sql = "select * from categories order by id_type desc";
            $listdanhmuc = pdo_query($sql);
            include "danhmuc/list.php";
            break;

            //Sửa danh mục
        case 'suadm';
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $capnhat = loadone_danhmuc($_GET['id']);
            }
            include "danhmuc/update.php";
            break;

            //Update danh mục
        case 'updatedm';
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                update_danhmuc($id, $name);
                $thongbao = "Cập nhật thành công";
            }
            $sql = "select * from categories order by id_type desc";
            $listdanhmuc = pdo_query($sql);
            include "danhmuc/list.php";
            break;

            /** CONTROLLER CHO SẢN PHẨM */

        case 'addsp':
            //kiểm tra xem người dùng có nhấn vào nút add không
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
            include "sanpham/add.php";
            break;
            //List sản phẩm
        case 'listsp':
            if(isset($_POST['listok']) && ($_POST['listok'])){
                $kyw=$_POST['kyw'];
                $iddm=$_POST['iddm'];
            }else{
                $kyw='';
                $iddm=0;
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_product($kyw, $iddm);
            include "sanpham/list.php";
            break;

            //Xoá sản phẩm
        case 'xoasp';
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_product($_GET['id']);
            }
            $listsanpham = loadall_product();
            include "sanpham/list.php";
            break;

            //Sửa sản phẩm
        case 'suasp';
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $capnhat = loadone_product($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/update.php";
            break;

            //Update sản phẩm
        case 'updatesp';
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $hinh=$_FILES['hinh']['name'];
                $target_dir="../upload/";
                $target_file=$target_dir.basename($_FILES["hinh"]["name"]);
                move_uploaded_file($_FILES["hinh"]["tmp_name"],$target_file);

                update_sanpham($id,$iddm, $tensp, $giasp, $mota,$hinh);
                $thongbao = "Cập nhật thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_product();
            
            include "sanpham/list.php";
            break;
        
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}

include "footer.php";

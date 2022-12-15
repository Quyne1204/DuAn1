<?php
    function load_products_home(){
        $sql = "select * from products order by id_product desc limit 0,10";
        $list_products = pdo_query($sql);
        return $list_products;
    }
    function load_products_one($id){
        $sql = "select * from products where id_product=$id";
        $one_products = pdo_query_one($sql);
        return $one_products;
    }

    function load_products_top10(){
        $sql = "select * from products order by sold desc limit 0,4";
        $list_products = pdo_query($sql);
        return $list_products;
    }
    function insert_product($tensp, $date,$giasp, $name_img, $mo_ta, $iddm){
        $sql = "insert into products(products_name,money,img,date_added,detail,type_id) 
        values ('$tensp','$giasp','$name_img','$date','$mo_ta','$iddm')";
        pdo_execute($sql);
    }
    function delete_product($id){
        $sql="delete from products where id_product =" .$id;
        pdo_execute($sql);
    }
    function loadone_product($id){
        $sql="select * from products where id_product=" .$id;
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function update_product($id ,$tensp, $date, $giasp, $name_img, $mo_ta, $iddm){
        if($name_img!=""){
            $sql = "update products set type_id='$iddm', products_name='$tensp',money='$giasp',
                                        detail='$mo_ta', date_added='$date', img='$name_img'
                                        where id_product='$id' " ;
        }else{
            $sql = "update products set type_id='$iddm', products_name='$tensp',money='$giasp',
                                        detail='$mo_ta', date_added='$date'
                                        where id_product='$id' " ;
        }
        pdo_execute($sql);
        
    }
    function loadall_product($kyw="", $id=0){
        $sql="select * from products where 1";
        if($kyw!=""){
            $sql .= " and products_name like '%".$kyw."%' or id_product like '%".$kyw."%'";
        }
        if($id>0){
            $sql .= " and type_id = '".$id."'";
        }
        $sql.=" order by date_added desc";
        $listproduct=pdo_query($sql);
        return $listproduct;
    }
    function load_name_type($id){
        if($id>0){
            $sql = "select * from categories where id_type=".$id;
            $dm = pdo_query_one($sql);
            extract($dm);
            return $type_name;
        }else{
            return "";
        }
    }
?> 
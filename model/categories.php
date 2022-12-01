<?php
    function insert_danhmuc($type_name){
        $sql = "insert into categories(type_name) values ('$type_name')";
        pdo_execute($sql);
    }
    function delete_danhmuc($id){
        $sql="delete from categories where id_type =" .$id;
        pdo_execute($sql);
    }
    function loadall_danhmuc(){
        $sql="select * from categories";
        $listdanhmuc = pdo_query($sql);
        return $listdanhmuc;
    }
    function loadall_danhmucc(){
        $sql="select * from categories order by id_type asc limit 0,4 ";
        $listdanhmuc = pdo_query($sql);
        return $listdanhmuc;
    }
    function loadone_danhmuc($id){
        $sql="select * from categories where id_type=" .$id;
        $dm = pdo_query_one($sql);
        return $dm;
    }
    function update_danhmuc($id, $name){
         $sql = " update categories set type_name='".$name."' where  id_type = ".$id;
         pdo_execute($sql); 
 
    }
?>
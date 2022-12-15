<?php
require_once 'pdo.php';

function binh_luan_insert($noidung,$username,$id_pro,$date){
    $sql = "insert into comment values(null,'$noidung','$id_pro','$username','$date')";
    pdo_execute($sql);
}

function loai_cmt($id_pro){
    $sql = "select * from comment where commodity_id=$id_pro order by id_comment desc";
    $list_cmt = pdo_query($sql);
    return $list_cmt;
}
function cmt_all($kyw=""){
    $sql = "select * from comment where 1";
    if($kyw!=""){
        $sql .= " and commodity_id like '%".$kyw."%'";
    }
    $sql.=" order by id_comment desc";
    $list_cmt = pdo_query($sql);
    return $list_cmt;
}
function cmt_one($id){
    $sql = "select * from comment where id_comment=$id";
    $cmt = pdo_query_one($sql);
    return $cmt;
}
function cmt_update($id_cmt,$username,$id_pro,$noidung,$date){
    $sql = "update comment set noidung='$noidung',username='$username',id_pro='$id_pro',ngaycmt='$date' where id_cmt=".$id_cmt;
    pdo_execute($sql);
}
function cmt_delete($id){
    $sql = "delete from comment where id_comment=".$id ;
    pdo_execute($sql);
}

?>
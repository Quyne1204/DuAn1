<?php
    
    require_once 'pdo.php';
    function load_statis(){
        $sql="select categories.id_type as id_dm, categories.type_name as name_dm, count(products.id_product) as count_sp, min(products.money) as min_price, max(products.money) as max_price, ROUND(avg(products.money),2) as avg_price";
        $sql.=" from products left join categories on categories.id_type = products.type_id";
        $sql.=" group by categories.id_type ";
        $dsthongke = pdo_query($sql);
        return $dsthongke;
    }

    function top_sp1(){
        $sql = "SELECT * From products ORDER BY sold desc Limit 5";
        $dsthongke = pdo_query($sql);
        return $dsthongke;
    }
    function top_sp2(){
        $sql = "SELECT * From products ORDER BY money desc Limit 5";
        $dsthongke = pdo_query($sql);
        return $dsthongke;
    }
    function top_sp3(){
        $sql = "SELECT * From products ORDER BY money asc Limit 5";
        $dsthongke = pdo_query($sql);
        return $dsthongke;
    }
?>
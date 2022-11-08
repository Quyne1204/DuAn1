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
?> 
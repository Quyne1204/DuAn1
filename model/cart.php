<?php
    function insert_cart($user_id,$product_id,$images,$product_name,$money,$count,$total,$bill_id){
        $sql = "insert into cart(user_id,product_id,images,product_name,money,count,total,bill_id) 
                values('$user_id','$product_id','$images','$product_name','$money','$count','$total','$bill_id')";
        return pdo_execute($sql);
    }
    function loadall_cart($id_bill){
        $sql = "select * from cart where bill_id='$id_bill'";
        $bill = pdo_query($sql);
        return $bill;
    }
    function total_cart(){
        $totalize = 0;
        foreach ($_SESSION['mycart'] as $cart) {
            $total = $cart[3] * $cart[4];
            $totalize += $total;
    }
    return $totalize;
    }
    
?>
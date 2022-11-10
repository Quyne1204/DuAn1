<?php
    function insert_bill($user_id,$full_name,$address,$phone_number,$email,$date,$total_cart,$bill_pay){
        $sql = "insert into bill(user_id,name,address,phone,email,bill_pay,date,total) 
                    values('$user_id','$full_name','$address','$phone_number','$email','$bill_pay','$date','$total_cart')";
        return pdo_execute_return_lastInsertId($sql);
    }
    function loadone_bill($id_bill){
        $sql = "select * from bill where id_bill=".$id_bill;
        $bill = pdo_query_one($sql);
        return $bill;
    }
    function loadall_bill($id_bill){
        $sql = "select * from bill where bill_id='$id_bill'";
        $bill = pdo_query($sql);
        return $bill;
    }
        
    
?>
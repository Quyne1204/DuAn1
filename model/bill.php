<?php
    function insert_bill($user_id,$full_name,$address,$phone_number,$email,$bill_pay,$date,$total_cart,$status){
        $sql = "insert into bill(user_id,name,address,phone,email,bill_pay,date,total,status) 
    values($user_id,'$full_name','$address','$phone_number','$email','$bill_pay','$date','$total_cart','$status')";
        return pdo_execute_return_lastInsertId($sql);
    }
    function loadone_bill($id_bill){
        $sql = "select * from bill where id_bill=".$id_bill;
        $bill = pdo_query_one($sql);
        return $bill;
    }
    function loadall_bill($kyw){
        if(isset($kyw)&&($kyw != "")){
            $sql = "select * from bill where id_bill='$kyw' or name like '%".$kyw."%' ";
        }else{
            $sql = "select * from bill order by id_bill desc";
        }
        $bill = pdo_query($sql);
        return $bill;
    }
    function loadall_bill_count($id){
        $sql = "select * from cart where bill_id=".$id;
        $dsbill = pdo_query($sql);
        return sizeof($dsbill);
    }
    
    function bill_update($id,$name,$email,$phone,$address,$ttdh){
        $sql = "update bill set 
                status='$ttdh' , name='$name' , email = '$email' , phone = '$phone' , address='$address' 
                where id_bill=$id";
        pdo_execute($sql);
    }
    function get_status($n){
        switch ($n) {
            case '0':
                $tt = "Đang tạo đơn hàng";
                break;
            case '1':
                $tt = "Đã xử lý ";
                break;
            case '2':
                $tt = "Đang giao hàng ";
                break;
            case '3':
                $tt = "Giao hàng thành công";
                break;
            case '4':
                $tt = "Đơn hàng đã hoàn tất";
                break;
            case '5':
                $tt = "Đơn hàng đã hủy";
                break;
            
            default:
                $tt = "Đang tạo đơn hàng";
                break;
        }
        return $tt;
    }  
    
?>
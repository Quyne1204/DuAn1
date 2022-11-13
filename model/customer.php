<?php
    function user_insert($password,$user_name,$email){
        $sql = "insert into customer values(null,'$user_name','$password','','$email','','','0')";
        pdo_execute($sql);
    }
    function user_login($user_name,$password){
        $sql = "select * from customer where user_name='$user_name' and password='$password'";
        $tk = pdo_query_one($sql);
        return $tk;
    }

?> 
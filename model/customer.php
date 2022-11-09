<?php
    function user_insert($password,$email){
        $sql = "insert into customer values(null,'$password','','$email','','','0')";
        pdo_execute($sql);
    }
    function user_login($email,$password){
        $sql = "select * from customer where email='$email' and password='$password'";
        $tk = pdo_query_one($sql);
        return $tk;
    }

?> 
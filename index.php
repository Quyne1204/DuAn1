<?php

// layout Header
include 'layouts/header.php';

if(isset($_GET['act'])) {

    $act = $_GET['act'];

    switch ($act) {

        // form
        case 'form':
            include 'form/login.php';
            break;

        case 'signup':
            include 'form/signup.php';
            break;

        // Xem giỏ hàng
        case 'cart':
            include 'pages/cart.php';
            break;

        default:
            include 'layouts/container.php';
            break;
    }
} else {
    include 'layouts/container.php';
}

// layout Footer
include 'layouts/footer.php';


?>
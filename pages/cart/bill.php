<?php
    include 'pages/menu.php';
?>
<section>

    <div style="width: 1232px; margin:0 auto;">
        <h2 class="cart-heading">Thanh Toán</h2>
        <form action="index.php?act=bill_detail" method="POST">
            <div class="cart-body">
                <div class="show-cart">
                    <table>
                        <?php
                        if (isset($_SESSION['user'])) {
                            $full_name = $_SESSION['user']['full_name'];
                            $address = $_SESSION['user']['address'];
                            $phone_number = $_SESSION['user']['phone_number'];
                            $email = $_SESSION['user']['email'];
                        } else {
                            $full_name = "";
                            $address = "";
                            $email = "";
                            $phone_number = "";
                        }
                        ?>
                        <tr class="table-body">
                            <td class="pay-inform">Họ tên người nhận</td>
                            <td class="pay-inform"><input class="pay-input" value="<?= $full_name ?>" name="full_name" placeholder="Nhập..." type="text"></td>
                        </tr>
                        <tr class="table-body">
                            <td class="pay-inform">Email </td>
                            <td class="pay-inform"><input class="pay-input" value="<?= $email ?>" name="email" placeholder="Nhập..." type="text"></td>
                        </tr>
                        <tr class="table-body">
                            <td class="pay-inform">Số điện thoại </td>
                            <td class="pay-inform"><input class="pay-input" value="<?= $phone_number ?>" name="phone_number" placeholder="Nhập..." type="text"></td>
                        </tr>
                        <tr class="table-body">
                            <td class="pay-inform">Địa chỉ </td>
                            <td class="pay-inform"><input class="pay-input" value="<?= $address ?>" name="address" placeholder="Nhập..." type="text"></td>
                        </tr>
                        <tr class="table-body">
                            <td class="pay-inform">Phương thức thanh toán </td>
                            <td class="pay-inform">
                                <input type="radio" name="bill_pay" value="Trả tiền khi nhận hàng" checked style="margin: 0 12px">Trả tiền khi nhận hàng
                                <input type="radio" name="bill_pay" value="Thanh toán Online" style="margin: 0 12px">Thanh toán Online
                            </td>

                        </tr>

                    </table>

                </div>

                <div class="cart-pay">
                    <div class="show-cart">
                        <h2 class="cart-item-payed-title">Thông tin đơn hàng</h2>
                        <table>
                            <?php
                            $totalize = 0;
                            $n = 0;
                            foreach ($_SESSION['mycart'] as $cart) {
                                $totalize += $cart[5];
                                $delete_cart = '<a style="color:blue" href="index.php?act=delete_cart&id=' . $n . '">Xóa</a>';
                                echo ' 
                                <div class="cart-item-payed">
                                <div class="item-note">
                                    <img class="cart-img" src="images/sanpham/' . $cart[2] . '">
                                    <div class="cart-item-note">
                                        <p class="name-item">' . $cart[1] . '</p>
                                        <p class="number">Số lương:' . $cart[4] . '</p>
                                        <p class="price">' . $cart[5] . ' <span>đ</span></p>
                                    </div>
                                </div>
                            </div>
                                
                                
                            ';
                                $n += 1;
                            } ?>

                        </table>
                    </div>


                    <?php
                    echo '
                    <h6 class="cart-pay-title">Thanh toán</h6>
                    <div class="sum">
                        <figcaption>Tổng tạm tính</figcaption><span>' . $totalize . ' <span>đ</span></span>
                    </div>
                    <div class="money">
                        <figcaption>Thành tiền</figcaption><span>' . $totalize . ' <span>đ</span></span>
                    </div>
                    <a href="index.php?act=bill_detail"><input type="submit" name="pay" class="handel-pay" value="Thanh Toán"></input></a>
                    ';
                    ?>
                </div>


            </div>
        </form>
    </div>

</section>
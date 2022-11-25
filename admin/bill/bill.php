<section>

    <div style=" margin:0 20px;">
        <form action="index.php?act=bill_detail" method="POST">
            <div class="cart-body">
                <div class="show-cart">
                    <table>
                        <tr class="table-body">
                            <td class="pay-inform">Họ khách hàng    </td>
                            <td class="pay-inform"><input class="pay-input" name="full_name" placeholder="Nhập..." type="text"></td>
                        </tr>
                        <tr class="table-body">
                            <td class="pay-inform">Email </td>
                            <td class="pay-inform"><input class="pay-input" name="email" placeholder="Nhập..." type="text"></td>
                        </tr>
                        <tr class="table-body">
                            <td class="pay-inform">Số điện thoại </td>
                            <td class="pay-inform"><input class="pay-input" name="phone_number" placeholder="Nhập..." type="text"></td>
                        </tr>
                        <tr class="table-body">
                            <td class="pay-inform">Địa chỉ </td>
                            <td class="pay-inform"><input class="pay-input" name="address" placeholder="Nhập..." type="text"></td>
                        </tr>
                        <tr class="table-body">
                            <td class="pay-inform">Phương thức thanh toán </td>
                            <td class="pay-inform">
                                <input type="radio" name="bill_pay" value="Thanh toán trực tiếp" checked style="margin: 0 12px">Thanh toán trực tiếp
                                <input type="radio" name="bill_pay" value="Thanh toán qua thẻ" style="margin: 0 12px">Thanh toán qua thẻ
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
                            foreach ($_SESSION['admincart'] as $cart) {
                                $totalize += $cart[5];
                                $delete_cart = '<a style="color:blue" href="index.php?act=delete_cart&id=' . $n . '">Xóa</a>';
                                echo ' 
                                <div class="cart-item-payed">
                                <div class="item-note">
                                    <img class="cart-img" src="../images/sanpham/' . $cart[2] . '">
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
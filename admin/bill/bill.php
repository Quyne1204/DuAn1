<form action="index.php?act=bill_detail" method="POST">
                <div class="container flex">
                    <div class="show-cart">
                        <table>
                            <tr class="table-body">
                                <td class="">Họ tên khách hàng*  </td>
                                <td class="pay-inform"><input class="pay-input"  name="full_name" placeholder="Nhập..." type="text" required></td>
                            </tr>
                            <tr class="table-body">
                                <td class="">Email </td>
                                <td class="pay-inform"><input class="pay-input"  name="email" placeholder="Nhập..." type="text"></td>
                            </tr>
                            <tr class="table-body">
                                <td class="">Số điện thoại* </td>
                                <td class="pay-inform"><input class="pay-input"  name="phone_number" placeholder="Nhập..." type="text" required></td>
                            </tr>
                            <tr class="table-body">
                                <td class="">Địa chỉ* </td>
                                <td class="pay-inform"><input class="pay-input"  name="address" placeholder="Nhập..." type="text" required></td>
                            </tr>
                            <tr class="table-body">
                                <td class="">Phương thức thanh toán </td>
                                <td class="">
                                    <input type="radio" name="bill_pay" value="Trả tiền mặt" checked style="margin: 0 12px" >Trả tiền mặt
                                    <input type="radio" name="bill_pay" value="Thanh toán thẻ" style="margin: 0 12px">Thanh toán thẻ
                                </td>
                            </tr>
                        </table>
                        
    
                    </div>

                    <div class="thanht">
                        <h2 class="cart-item-payed-title">Thông tin thanh toán</h2>
                        <div class="cart-item-payed">
                            <?php
                                $totalize = 0;
                                $n = 0;
                                foreach ($_SESSION['admincart'] as $cart) {
                                    $totalize += $cart[5];
                                    $delete_cart = '<a style="color:blue" href="index.php?act=delete_cart&id=' . $n . '">Xóa</a>';
                                    echo ' 
                                        <div class="flex">
                                            <img class="cart-img" src="../images/sanpham/' . $cart[2] . '">
                                            <div class="">
                                                <p class="name-item">' . $cart[1] . '</p>
                                                <p class="number">Số lượng: ' . $cart[4] . '</p>
                                                <p class="price">' . $cart[5] . '</p>
                                            </div>
                                        </div><hr>
                                    
                                    ';
                                    $n += 1;
                                } 
                            ?>
                            
                        </div>
                        <div>
                            <div class="flex">
                                <h3>Tiền cần phải thu : </h3>
                                <h3 style="margin-left: 150px;"><?php echo $totalize ; ?> </h3>
                            </div>
                            <a href="index.php?act=bill_detail">
                                <input class="xacnhan" name="pay" type="submit" value="Xác nhận">
                            </a>
                        </div>
                    </div>

                </div>  
            </form>
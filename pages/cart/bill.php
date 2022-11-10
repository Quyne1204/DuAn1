<section>

    <div style="width: 1232px; margin:0 auto;">
        <h2 class="cart-heading">Thanh Toán</h2>
        <form action="index.php?act=bill_detail" method="POST">
        <div class="cart-body">
            <div class="show-cart">
                <table>
                    <?php
                        if(isset($_SESSION['user'])){
                            $full_name = $_SESSION['user']['full_name'];
                            $address = $_SESSION['user']['address'];
                            $phone_number = $_SESSION['user']['phone_number'];
                            $email = $_SESSION['user']['email'];
                        }else{
                            $full_name = "";
                            $address = "";
                            $email = "";
                            $phone_number = "";
                        }
                    ?>
                    <tr class="table-body">
                        <td width="200px">Họ Tên người nhận</td>
                        <td width="550px"><input style="border:1px solid white;width:400px;height:30px;padding:10px" 
                                value="<?=$full_name?>" name="full_name" placeholder="Nhập..." type="text"></td>
                    </tr>
                    <tr class="table-body">
                        <td width="200px">Email </td>
                        <td width="550px"><input style="border:1px solid white;width:400px;height:30px;padding:10px" 
                                value="<?=$email?>" name="email" placeholder="Nhập..." type="text"></td>
                    </tr>
                    <tr class="table-body">
                        <td width="200px">Số điện thoại </td>
                        <td width="550px"><input style="border:1px solid white;width:400px;height:30px;padding:10px" 
                                value="<?=$phone_number?>" name="phone_number" placeholder="Nhập..." type="text"></td>
                    </tr>
                    <tr class="table-body">
                        <td width="200px">Địa chỉ </td>
                        <td width="550px"><input style="border:1px solid white;width:400px;height:30px;padding:10px" 
                                value="<?=$address?>" name="address" placeholder="Nhập..." type="text"></td>
                    </tr>
                    <tr class="table-body">
                        <td width="200px">Phương thức thanh toán </td>
                        <td width="550px">
                            <input type="radio" name="bill_pay" value="Trả tiền khi nhận hàng" checked>Trả tiền khi nhận hàng 
                            <input type="radio" name="bill_pay" value="Thanh toán Online"  style="margin-left:20px">Thanh toán Online
                        </td>
                        
                    </tr>
            
                </table>
                
            </div>
            
            <div class="cart-pay">
                <h6 class="cart-pay-title">Giỏ hàng</h6>
                <div class="show-cart">
                    <table style="font-size:10px">
                        <tr class="table-bod">
                            <td>Sản phẩm</td>
                            <td>Đơn giá</td>
                            <td>Số lượng</td>
                            <td>Thành tiền</td>
                        </tr>
                        <?php
                        $totalize = 0;
                        $n = 0;
                        foreach ($_SESSION['mycart'] as $cart) {
                            $totalize += $cart[5];
                            $delete_cart = '<a style="color:blue" href="index.php?act=delete_cart&id='.$n.'">Xóa</a>' ;
                            echo ' 
                                <tr class="table-body">
                                    <td>
                                        <div class="cart-place">
                                            <img class="cart-img" src="images//sanpham/'.$cart[2].'">
                                            <span >'.$cart[1].'</span>
                                        </div>
                                    </td>
                                    <td >
                                        <p >'.$cart[3].'<span>đ</span></p>
                                    </td>
                
                                    <td  style="font-weight:bold">
                                        '.$cart[4].'
                                    </td>
                
                                    <td  style="font-weight:bold">'.$cart[5].' <span>đ</span></td>
                
                                </tr> 
                                
                            ';
                            $n +=1;
                        }?>
                    </table>
                </div>


                <?php
                echo '
                    <h6 class="cart-pay-title">Thanh toán</h6>
                    <div class="sum">
                        <figcaption>Tổng tạm tính</figcaption><span>'.$totalize.' <span>đ</span></span>
                    </div>
                    <div class="money">
                        <figcaption>Thành tiền</figcaption><span>'.$totalize.' <span>đ</span></span>
                    </div>
                    <a href="index.php?act=bill_detail"><input type="submit" name="pay" class="handel-pay" value="Thanh Toán"></input></a>
                    ';
            ?>
            </div>
    
            
        </div>
        </form>
    </div>

</section>
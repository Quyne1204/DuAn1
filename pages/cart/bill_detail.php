<?php
    include 'pages/menu.php';
?>
<section>

    <div style="width: 1232px; margin:0 auto;">
        <div style="text-align:center; margin:20px 0px">
            <h1>Đặt Hàng Thành Công</h1>
            <h3>Cảm ơn quý khách đã mua hàng chúc quý khách một ngày tốt lành</h3>
        </div>
        <h2 class="cart-heading">Hóa đơn của bạn</h2>
        <form action="">
        <div class="cart-body">
            <div class="show-cart">
                <table>
                    <?php
                        if(isset($list_bill)&&is_array($list_bill)){
                            extract($list_bill);
                        }
                    ?>
                    <tr class="table-body">
                        <td width="200px">Mã đơn hàng</td>
                        <td width="550px">DHS-<?=$list_bill['id_bill']?></td>
                    </tr>
                    <tr class="table-body">
                        <td width="200px">Ngày đặt hàng</td>
                        <td width="550px"><?=$list_bill['date']?></td>
                    </tr>
                    <tr class="table-body">
                        <td width="200px">Họ Tên người nhận</td>
                        <td width="550px"><?=$list_bill['name']?></td>
                    </tr>
                    <tr class="table-body">
                        <td width="200px">Email </td>
                        <td width="550px"><?=$list_bill['email']?></td>
                    </tr>
                    <tr class="table-body">
                        <td width="200px">Số điện thoại </td>
                        <td width="550px"><?=$list_bill['phone']?></td>
                    </tr>
                    <tr class="table-body">
                        <td width="200px">Địa chỉ </td>
                        <td width="550px"><?=$list_bill['address']?></td>
                    </tr>
                    <tr class="table-body">
                        <td width="200px">Phương thức thanh toán </td>
                        <td width="550px"><?=$list_bill['bill_pay']?></td>
                        
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
                        foreach ($detail_bill as $cart) {
                            extract($cart);
                            $totalize += $total;
                            echo ' 
                                <tr class="table-body">
                                    <td>
                                        <div class="cart-place">
                                            <img class="cart-img" src="images//sanpham/'.$images.'">
                                            <span >'.$product_name.'</span>
                                        </div>
                                    </td>
                                    <td >
                                        <p >'.$money.'<span>đ</span></p>
                                    </td>
                
                                    <td  style="font-weight:bold">
                                        '.$count.'
                                    </td>
                
                                    <td  style="font-weight:bold">'.$total.' <span>đ</span></td>
                
                                </tr> 
                                
                            ';
                        }?>
                    </table>
                </div>
                <?php
                echo '
                    <div class="money">
                        <figcaption><h6 class="cart-pay-title"> Tổng Thanh Toán</h6></figcaption><span>'.$totalize.' <span>đ</span></span>
                    </div>                    
                ';
            ?>

            </div>
    
            
        </div>
        </form>
    </div>

</section>
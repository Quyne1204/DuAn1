<?php
    include 'pages/menu.php';
?>
<section>

    <div style="width: 1232px; margin:0 auto;">
        <h2 class="cart-heading">Giỏ hàng</h2>
        <div class="cart-body">
            
            <div class="show-cart">
                <table>
                    <tr class="table-body">
                        <td width="450px">Sản phẩm</td>
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
                                <span class="cart-name">'.$cart[1].'</span>
                            </div>
                        </td>
                        <td>
                            <p class="cart-price">'.$cart[3].'<span>đ</span></p>
                        </td>
    
                        <td>
                            <div class="cart-number">
                                <button>-</button>
                                <input type="text" value="1">
                                <button>+</button>
                            </div>
                            <button class="handel-delete">'.$delete_cart.'</button>
                        </td>
    
                        <td class="cart-price">'.$cart[5].' <span>đ</span></td>
    
                    </tr> 
                    
                ';
                $n +=1;
            }?>
                <tr style="margin-top:12px; background-color:#fff; padding: 4px 24px; text-align:center;">
                    <td><a style="color:blue" href="index.php">Mua tiếp</a></td>
                    <td><a style="color:blue" href="index.php?act=delete_cart">Xóa tất cả</a></td>
                </tr>
                </table>
            </div>
            
            <div class="cart-pay">
            <?php
                if(isset($_SESSION['user'])){
                    echo '
                        <h6 class="cart-pay-title">Thanh toán</h6>
                        <div class="sum">
                            <figcaption>Tổng tạm tính</figcaption><span>'.$totalize.' <span>đ</span></span>
                        </div>
                        <div class="money">
                            <figcaption>Thành tiền</figcaption><span>'.$totalize.' <span>đ</span></span>
                        </div>
                        <a href="index.php?act=bill"><input type="submit" class="handel-pay" value="Thanh Toán"></input></a>
                        ';
                }else{
                    echo '
                        <h2>Bạn hãy đăng nhập để tiếp tục đặt hàng</h2>
                        <a href="index.php?act=login" style="color:red">Đăng nhập</input></a>  
                    ';
                }
            ?>
            </div>
    
            
        </div>
    </div>

</section>
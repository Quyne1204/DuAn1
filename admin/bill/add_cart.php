<div class="quanly flex" >
    <div class="category">
        <table>
            <tr>
                <th width="1%">Tên Sản Phẩm</th>
                <th width="1%"> Ảnh</th>
                <th width="1%">Đơn giá</th>
                <th width="1%">Số lượng</th>
                <th width="1%">Thành tiền</th>
            </tr>
            <?php
                $totalize = 0;
                $n = 0;
                foreach ($_SESSION['admincart'] as $cart) {
                    $totalize += $cart[5];
                    $delete_cart = '<a style="color:blue" href="index.php?act=delete_cart&id='.$n.'">Xóa</a>' ;
                    echo '
                        <tr>
                            <td>'.$cart[1].'</td>
                            <td><img width="150px" style="padding-bottom:20px" src="../images/sanpham/'.$cart[2].'"></td>
                            <td>'.$cart[3].'</td>
                            <td>
                                <div class="flex" >
                                    <button onclick="decrement()" class="sluong">-</button>
                                    <input class="luong" name="count" id=demoInput type=number step="1" min=1 value="1">
                                    <button onclick="increment()" class="sluong">+</button>
                                </div>
                                <button class="handel-delete">'.$delete_cart.'</button>
                            </td>
                            <td>'.$cart[5].'</td>
                        </tr>
                        ';
                    }
            ?>
        </table>
        <div style="float:right;margin:10px">
            <a style="color:red" href="index.php?act=delete_cart">Xóa tất cả</a>
        </div>
                          
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
                    <a href="index.php?act=bill"><input type="submit" class="handel-pay" value="thanh toán"></input></a>
                    ';
            }
        ?>
    </div>
</div>
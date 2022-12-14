<div class="container flex">
    <div class="list_sp">
        <table>
            <thead>
                <td width="20%">Tên sản phẩm</td>
                <td width="10%">Ảnh sản phẩm</td>
                <td width="8%">Đơn giá</td>
                <td width="10%">Số lượng</td>
                <td width="20%">Thành tiền</td>
                <td width="1%"></td>
            </thead>
            <?php
                $totalize = 0;
                $n = 0;
                foreach ($_SESSION['admincart'] as $cart) {
                    $totalize += $cart[5];
                    $delete_cart = '<a style="color:blue;text-decoration: none;" href="index.php?act=delete_cart&id='.$n.'">Xóa</a>' ;
                    echo '
                        <tbody>
                            <td>'.$cart[1].'</td>
                            <td><img width="100px" style="padding-bottom:20px" src="../images/sanpham/'.$cart[2].'"></td>
                            <td>'.$cart[3].'</td>
                            <td>
                                <div class="flex" >
                                    <button onclick="decrement()" class="sluong">-</button>
                                    <input class="luong" name="count" id=demoInput type=number step="1" min=1 value="1">
                                    <button onclick="increment()" class="sluong">+</button>
                                </div>
                               
                            </td>
                            <td>'.$cart[5].'</td>
                            <td>'.$delete_cart.'</td>
                        </tbody>
                        ';
                    }
            ?>
        </table>
        
        <div style="float:right;margin:10px">
            <a style="color:red;text-decoration: none;margin-right:20px; " href="index.php?act=add_bill">Thêm sản phẩm</a>
            <a style="color:red;text-decoration: none; " href="index.php?act=delete_cart">Xóa tất cả</a>
        </div>
    </div>
    <div class="hoadon">
        <?php
            if(isset($_SESSION['user'])){
            echo '
                <h3>Hóa đơn của bạn</h3>
                <div class="flex">
                    <p style="margin-right:10px">Tổng tạm tính: </p>
                    <p >'.$totalize.' </p>
                </div>
                <div class="flex">
                    <p style="margin-right:10px">Giảm giá: </p>
                    <p>0đ </p>
                </div>
                <hr>
                <div class="flex">
                    <p style="margin-right:10px">Bạn phải thanh toán:  </p>
                    <p style="color:red">'.$totalize.' </p>
                </div>
                <a href="index.php?act=bill"><input class="next" type="submit" name="" value="Tiếp tục"></a>
                ';
            }
        ?>  
    </div>
</div> 
<main>
    <a href="index.php?act=add_cart" class="cart" style="float:right;">
        <span class="icon-cart">
            <svg fill="none" viewBox="0 0 24 24" size="36" class="css-11md2ba" color="textSecondary" height="36" width="36" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M3 3.75C3 3.33579 3.33579 3 3.75 3H6.00033C6.41455 3 6.75033 3.33579 6.75033 3.75V6.00035H18.7522C18.9832 6.00035 19.2012 6.10676 19.3434 6.28879C19.4855 6.47083 19.5358 6.7082 19.4798 6.93225L17.9796 12.9331C17.8961 13.267 17.5961 13.5012 17.252 13.5012H6.75033V14.2516C6.75033 14.4505 6.82937 14.6413 6.97007 14.782C7.11076 14.9227 7.30158 15.0018 7.50055 15.0018H19.5023C19.9165 15.0018 20.2523 15.3376 20.2523 15.7518C20.2523 16.166 19.9165 16.5018 19.5023 16.5018H7.50055C6.90376 16.5018 6.33141 16.2647 5.90941 15.8427C5.48741 15.4207 5.25033 14.8483 5.25033 14.2516V12.7544C5.25033 12.7534 5.25033 12.7523 5.25033 12.7512C5.25033 12.7502 5.25033 12.7491 5.25033 12.748V6.75355C5.25033 6.75249 5.25033 6.75142 5.25033 6.75035C5.25033 6.74929 5.25033 6.74822 5.25033 6.74715V4.5H3.75C3.33579 4.5 3 4.16421 3 3.75ZM6.75033 7.50035V12.0012H16.6664L17.7916 7.50035H6.75033ZM6.0006 19.5024C6.0006 18.6739 6.67222 18.0023 7.50071 18.0023C8.3292 18.0023 9.00082 18.6739 9.00082 19.5024C9.00082 20.3309 8.3292 21.0025 7.50071 21.0025C6.67222 21.0025 6.0006 20.3309 6.0006 19.5024ZM18.0021 18.0023C17.1736 18.0023 16.502 18.6739 16.502 19.5024C16.502 20.3309 17.1736 21.0025 18.0021 21.0025C18.8306 21.0025 19.5022 20.3309 19.5022 19.5024C19.5022 18.6739 18.8306 18.0023 18.0021 18.0023Z" fill="currentColor"></path>
            </svg>
        </span>

        <div class="cart-title">
            <!-- Số lượng giỏ hàng -->
            <?php
            $n = 0;
            if(isset($_SESSION['admincart'])&&count($_SESSION['admincart'])>0){
                $n = count($_SESSION['admincart']);
            }else{
                $n = 0;
            }
            
            echo '<p>('.$n.') sản phẩm</p>';
            ?>
        </div>

        <div class="cart-list">


            <div class="cart-item">
                <!-- thông tin item trong giỏ hàng -->
                <?php
                if(isset($_SESSION['admincart'])){
                    foreach ($_SESSION['admincart'] as $cart) {
                        echo'
                            <div class="item-note">
                                <img class="cart-img" src="../images/sanpham/'.$cart[2].'">
                                <div class="cart-item-note">
                                    <p class="name-item">'.$cart[1].'</p>
                                    <p class="number">Số lương: 1</p>
                                    <p class="price">'.$cart[3].'<span>đ</span></p>
                                </div>
                            </div>
                        ';}
                }else{
                    echo'
                        <div class="item-note">
                            
                            <div class="cart-item-note">
                                
                            </div>
                        </div>
                    ';
                }
                ?>
                
            </div>
            <button class="view-cart" >Đặt hàng</button>
        </div>
    </a>




    <div class="quanly">
        <div class="category">
            <table>
                <tr>
                    <th width="1%">Tên Sản Phẩm</th>
                    <th width="1%"> Ảnh</th>
                    <th width="1%">Giá</th>
                    <th width="1%"></th>
                </tr>
                <?php
                    foreach ($list_sp as $sanpham) {
                        extract($sanpham);
                        echo '
                            <tr>
                                <td>'.$products_name.'</td>
                                <td><img width="150px" style="padding-bottom:20px" src="../images/sanpham/'.$img.'"></td>
                                <td>'.$money.'</td>
                                <td>
                                    <form action="index.php?act=addtocart" method="POST" style="width:100%"> 
                                        <input type="hidden" name="id" value="'.$id_product.'">
                                        <input type="hidden" name="name" value="'.$products_name.'">
                                        <input type="hidden" name="img" value="'.$img.'">
                                        <input type="hidden" name="money" value="'.$money.'">
                                        <input name="addtocart" type="submit" class="handel-buy" value="Chọn">
                                    </form>
                                </td>
                            </tr>
                            ';
                        }
                ?>
            </table>
                            
        </div>
</main>
















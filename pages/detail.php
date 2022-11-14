
<div class="model-category">
                        <?php
                        
                            foreach ($list_dm as $dm) {
                                extract($dm);
                                echo '
                                <ul class="list-category">
                                    <li><a href="index.php?act=danhmuc&id='.$id_type.'"> <span class="icon-arrow"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                                                </svg></span>'.$type_name.'</a></li>
                                </ul>
                                ';
                            }
                        ?>  
                    </div>
                </div>

                <!-- Search -->
                <form method="POST" action="">
                    <div class="search">
                        <input type="text" placeholder="Nhập từ khóa cần tìm">
                        <button class="handel-search">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="#FFF" fill-rule="evenodd" d="M19.757 19.095l-3.945-4.102c1.015-1.206 1.57-2.723 1.57-4.302 0-3.69-3.001-6.691-6.69-6.691C7.001 4 4 7.002 4 10.691c0 3.69 3.002 6.691 6.691 6.691 1.385 0 2.705-.418 3.834-1.21l3.974 4.133c.166.172.39.267.629.267.226 0 .441-.086.605-.243.346-.334.357-.887.024-1.234zM10.69 5.745c2.727 0 4.946 2.22 4.946 4.946 0 2.727-2.219 4.946-4.946 4.946s-4.945-2.219-4.945-4.946 2.218-4.945 4.945-4.945z" />
                                </svg>
                            </span>
                        </button>
                    </div>
                </form>

                <!-- form -->
                <a href="index.php?act=login" class="form-action">
                    <span class="icon-user">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                        </svg>
                    </span>
                    <?php 
                        if(isset($_SESSION['user'])){
                            extract($_SESSION['user']);
                    ?>
                    <div class="form-act-title">
                        <p>Xin Chào</p>
                        <p><?=$full_name?></p>
                    </div>
                    <?php
                    if($role==1){
                        echo '
                        <div class="notify">
                        <a href="admin/index.php" class="form-action">
                            <svg fill="none" viewBox="0 0 24 24" size="36" class="css-11md2ba" color="textSecondary"
                                        height="36" width="36" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12 3.5C7.30558 3.5 3.5 7.30558 3.5 12C3.5 13.9895 4.18351 15.8194 5.32851 17.2676C5.58317 16.4856 6.12054 15.8107 6.85621 15.3914L8.76361 14.2968C8.1448 13.5615 7.772 12.6122 7.772 11.5759V9.83689C7.772 7.50167 9.66479 5.60889 12 5.60889C14.3349 5.60889 16.229 7.50139 16.229 9.83689V11.5759C16.229 12.6132 15.8554 13.5631 15.2354 14.2986L17.1437 15.3908L17.1444 15.3912C17.8805 15.8106 18.4173 16.4856 18.6716 17.2674C19.8165 15.8192 20.5 13.9894 20.5 12C20.5 7.30558 16.6944 3.5 12 3.5ZM10.0133 15.3091C10.6056 15.6249 11.2819 15.8039 12 15.8039C12.7169 15.8039 13.3922 15.6255 13.984 15.3106L16.3999 16.6934L16.4013 16.6942C16.9789 17.0231 17.3365 17.6396 17.3365 18.3075V18.6164C16.8532 19.0067 16.3263 19.3451 15.7642 19.6232C14.9127 19.9671 13.6909 20.2625 12.0005 20.2625C10.3078 20.2625 9.08478 19.9663 8.23289 19.6217C7.67189 19.3439 7.14595 19.006 6.6635 18.6164V18.3075C6.6635 17.6402 7.0216 17.0234 7.59965 16.6942L7.6018 16.693L10.0133 15.3091ZM13.4184 13.9069C14.2043 13.428 14.729 12.5631 14.729 11.5759V9.83689C14.729 8.33038 13.5071 7.10889 12 7.10889C10.4932 7.10889 9.272 8.3301 9.272 9.83689V11.5759C9.272 12.5628 9.79594 13.4273 10.5809 13.9062C10.6523 13.9484 10.7542 14.0035 10.8812 14.0593C11.1657 14.1842 11.5558 14.3035 12.0005 14.3035C12.445 14.3035 12.8341 14.1846 13.1176 14.0602C13.2451 14.0042 13.3472 13.9489 13.4184 13.9069ZM2 12C2 14.9959 3.31741 17.684 5.40452 19.5168L5.42841 19.5438C5.49553 19.6189 5.59114 19.7182 5.71841 19.8332C5.97322 20.0636 6.35385 20.3562 6.88471 20.6435C7.10268 20.7615 7.34486 20.878 7.6128 20.9888C8.93735 21.6364 10.4262 22 12 22C13.5724 22 15.06 21.6371 16.3837 20.9905C16.6532 20.8792 16.8968 20.7621 17.1159 20.6435C17.6466 20.3561 18.0271 20.0635 18.2819 19.8331C18.4091 19.7181 18.5047 19.6187 18.5718 19.5437L18.5956 19.5167C20.6826 17.6839 22 14.9958 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12Z"
                                    fill="currentColor"></path>
                            </svg>
                        </a>
                        </div>
                        ';
                    }else{
                        echo "";
                    }
                ?>
                    <div class="notify">
                        <a href="index.php?act=logout" class="form-action">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" height="36" width="36">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </a>
                    </div>
                    <?php 
                        }else{
                    ?>
                    <div class="form-act-title">
                        <p>Đăng nhập</p>
                        <p>Đăng ký</p>
                    </div>
                    <?php }?>

                </a>

                <!-- cart -->
                <a href="index.php?act=viewcart" class="cart">
                    <span class="icon-cart">
                        <svg fill="none" viewBox="0 0 24 24" size="36" class="css-11md2ba" color="textSecondary" height="36" width="36" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3 3.75C3 3.33579 3.33579 3 3.75 3H6.00033C6.41455 3 6.75033 3.33579 6.75033 3.75V6.00035H18.7522C18.9832 6.00035 19.2012 6.10676 19.3434 6.28879C19.4855 6.47083 19.5358 6.7082 19.4798 6.93225L17.9796 12.9331C17.8961 13.267 17.5961 13.5012 17.252 13.5012H6.75033V14.2516C6.75033 14.4505 6.82937 14.6413 6.97007 14.782C7.11076 14.9227 7.30158 15.0018 7.50055 15.0018H19.5023C19.9165 15.0018 20.2523 15.3376 20.2523 15.7518C20.2523 16.166 19.9165 16.5018 19.5023 16.5018H7.50055C6.90376 16.5018 6.33141 16.2647 5.90941 15.8427C5.48741 15.4207 5.25033 14.8483 5.25033 14.2516V12.7544C5.25033 12.7534 5.25033 12.7523 5.25033 12.7512C5.25033 12.7502 5.25033 12.7491 5.25033 12.748V6.75355C5.25033 6.75249 5.25033 6.75142 5.25033 6.75035C5.25033 6.74929 5.25033 6.74822 5.25033 6.74715V4.5H3.75C3.33579 4.5 3 4.16421 3 3.75ZM6.75033 7.50035V12.0012H16.6664L17.7916 7.50035H6.75033ZM6.0006 19.5024C6.0006 18.6739 6.67222 18.0023 7.50071 18.0023C8.3292 18.0023 9.00082 18.6739 9.00082 19.5024C9.00082 20.3309 8.3292 21.0025 7.50071 21.0025C6.67222 21.0025 6.0006 20.3309 6.0006 19.5024ZM18.0021 18.0023C17.1736 18.0023 16.502 18.6739 16.502 19.5024C16.502 20.3309 17.1736 21.0025 18.0021 21.0025C18.8306 21.0025 19.5022 20.3309 19.5022 19.5024C19.5022 18.6739 18.8306 18.0023 18.0021 18.0023Z" fill="currentColor"></path>
                        </svg>
                    </span>

                    <div class="cart-title">
                        <p>Giỏ hàng của bạn</p>

                        <!-- Số lượng giỏ hàng -->
                        <?php
                        $n = 0;
                        if(isset($_SESSION['mycart'])&&count($_SESSION['mycart'])>0){
                            $n = count($_SESSION['mycart']);
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
                            if(isset($_SESSION['mycart'])){
                                foreach ($_SESSION['mycart'] as $cart) {
                                    echo'
                                        <div class="item-note">
                                            <img class="cart-img" src="images/sanpham/'.$cart[2].'">
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
                        <button class="view-cart" >Xem giỏ hàng</button>
                    </div>
                </a>

            </div>
        </div>
    </div>
</div><nav>
    <section>

        <div class="detail-page">
            <!-- Chi tiết sản phẩm -->
            <?php
            function product_price($priceFloat)
            {
                $symbol = 'đ';
                $symbol_thousand = '.';
                $decimal_place = 0;
                $price = number_format($priceFloat, $decimal_place, '', $symbol_thousand);
                return $price . $symbol;
            }
                extract($one_products);
                $price = product_price($money);
                $priceFloat = $money;
                echo '
            <div class="detail">
                <div>
                <img class="detail-img" src="images/sanpham/'.$img.'">
                <h3>'.$detail.'</h3>
                </div>

                <div class="detail-item">
                    <h1 class="detail-title">'.$products_name.'
                    </h1>
                    <figcaption class="sub-title">Thương hiệu <span class="detail-mark">ACER</span></figcaption>
                    <p class="detail-price">' . product_price($priceFloat) . '</p>
                    <p class="detail-sale"><del>19.590.000 ₫</del><span class="sale-percent">-8.2%</span></p>

                        <div style="display: flex; gap: 10px; margin-top: 12px;">
                            
                                    <form action="index.php?act=addtocart" method="POST" style="width:100%">
                                        <input type="hidden" name="id" value="'.$id_product.'">
                                        <input type="hidden" name="name" value="'.$products_name.'">
                                        <input type="hidden" name="img" value="'.$img.'">
                                        <input type="hidden" name="money" value="'.$money.'">
                                        <div class="flex" style="gap:10px; margin-top:12px " >
                                            <input name="addtocart" type="submit" class="handel-buy" 
                                                    value="Mua ngay">
                                            <input name="addtocart" type="submit" style="width:200px" class="handel-add-cart" 
                                                    value="Thêm Vào Giỏ Hàng">
                                        </div>
                                    </form>
                                    
                        </div>

                    <div class="promotion">
                        <h2 class="promotion-title">Khuyến mãi liên quan</h2>

                        <a href=""><img class="promotion-img" src="https://cdn-vn.pushdy.com/_uploads/phongvu_live_teko/9bd679fe67534ec4a3f5e287d8c916a5.png" alt=""></a>
                        <a href=""><img class="promotion-img" src="https://cdn-vn.pushdy.com/_uploads/phongvu_live_teko/d0f35b20de044e868b73b810b5383cf8.png" alt=""></a>
                    </div>
                </div>

            </div>
            ';
            ?>

            <!-- Chính sách giao hàng -->

            <div class="sale-policy">
                <h3 class="policy-heading"> <span class="icon-policy"><svg fill="none" viewBox="0 0 24 24" size="24" class="css-174w0qc" color="#53c305" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.2437 8.8V10.077H10.5287C10.6548 10.077 10.7384 10.0429 10.7939 9.98729C10.8495 9.93171 10.8837 9.84817 10.8837 9.722V9.155C10.8837 9.02883 10.8495 8.94529 10.7939 8.88971C10.7384 8.83413 10.6548 8.8 10.5287 8.8H10.2437Z" fill="#30CD60"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5 6C4.44772 6 4 6.44771 4 7V7.74985H0.625014C0.280006 7.74985 0 8.02986 0 8.37486C0 8.71987 0.280006 8.99988 0.625014 8.99988H4V10.2494H1.87453C1.52952 10.2494 1.24951 10.5294 1.24951 10.8744C1.24951 11.2194 1.52952 11.4994 1.87453 11.4994H4V12.75H3.12697C2.78196 12.75 2.50195 13.03 2.50195 13.375C2.50195 13.72 2.78196 14 3.12697 14H4V15C4 15.5523 4.44772 16 5 16L6.00197 16C6.05465 17.3322 7.15515 18.4 8.5 18.4C9.84482 18.4 10.9453 17.3322 10.998 16.0001L16.002 16.0002C16.0547 17.3323 17.1552 18.4 18.5 18.4C19.8448 18.4 20.9452 17.3323 20.998 16.0003L23.3751 16.0003C23.7201 16.0003 24.0002 15.7203 24.0002 15.3753V12.2502C24.0002 12.1365 23.9701 12.0252 23.9114 11.9289L22.0364 8.80388C21.9239 8.61512 21.7201 8.50012 21.5001 8.50012H20V7C20 6.44772 19.5523 6 19 6H5ZM22.6458 12.2499H20V9.74988H21.1458L22.6458 12.2499ZM7.5 15.9C7.5 15.35 7.948 14.9 8.5 14.9C9.052 14.9 9.5 15.35 9.5 15.9C9.5 16.45 9.052 16.9 8.5 16.9C7.948 16.9 7.5 16.45 7.5 15.9ZM18.5 14.9C17.948 14.9 17.5 15.35 17.5 15.9C17.5 16.45 17.948 16.9 18.5 16.9C19.052 16.9 19.5 16.45 19.5 15.9C19.5 15.35 19.052 14.9 18.5 14.9ZM6.30615 7.9H8.57815V8.8H7.24815V10.035H8.29815V10.935H7.24815V13H6.30615V7.9ZM9.30166 7.9H10.5637C10.9398 7.9 11.2496 8.01459 11.4818 8.25169C11.7138 8.48397 11.8257 8.79355 11.8257 9.169V9.708C11.8257 9.94543 11.7786 10.1598 11.6816 10.3487C11.5966 10.5142 11.4795 10.6493 11.3311 10.7527L11.9701 13H10.9908L10.4518 10.977H10.2437V13H9.30166V7.9ZM15.0007 7.9H12.6937V13H15.0007V12.1H13.6357V10.865H14.7207V9.965H13.6357V8.8H15.0007V7.9ZM15.7712 7.9H18.0782V8.8H16.7132V9.965H17.7982V10.865H16.7132V12.1H18.0782V13H15.7712V7.9Z" fill="#30CD60"></path>
                        </svg></span> <span>Sản phẩm được miễn phí giao hàng</span></h3>
                <h4 class="policy-title">Chính sách bán hàng</h4>
                <p class="policy-sub"><span class="icon-policy"></span> Miễn phí giao hàng cho đơn hàng từ 800K</p>
                <p class="policy-sub"><span class="icon-policy"></span> Cam kết hàng chính hãng 100%</p>
                <p class="policy-sub"><span class="icon-policy"></span> Đổi trả trong vòng 10 ngày</p>

                <h4 class="policy-title">Dịch vụ khác</h4>
                <p class="policy-sub"><span class="icon-policy"></span> Sửa chữa đồng giá 150.000đ.</p>
                <p class="policy-sub"><span class="icon-policy"></span> Vệ sinh máy tính, laptop.</p>
                <p class="policy-sub"><span class="icon-policy"></span> Bảo hành tại nhà.</p>
            </div>
        </div>
    </section>
</nav>
<?php
    include 'pages/menu.php';
?>
<nav>
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

                        <div style="gap: 10px; margin-top: 12px;">
                            <div class="cart-num flex" >
                                <button onclick="decrement()" class="sluong">-</button>
                                <input class="luong" name="count" id=demoInput type=number step="1" min=1 value="1">
                                <button onclick="increment()" class="sluong">+</button>
                            </div>
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

                        <a href=""><img class="promotion-img" src="images/logo/img16.png" alt=""></a>
                        <a href=""><img class="promotion-img" src="images/logo/img17.png" alt=""></a>
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

        <div class="detail-page">
            <div class="box6">
                <h3>Bình luận</h3>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                <script>
                    $(document).ready(function(){
                            $("#cmt").load("pages/cmt.php",{id_pro:<?=$id_product?>});
                    });
                </script>
                <div id="cmt"></div>
            </div>

            <div class="box6">
                <h3>Sản phẩm cùng loại</h3>
                <div class="flex box7">
                    <?php
                        foreach ($sp_cungloai as $spcl) {
                            extract($spcl); 
                            echo '
                                <li >
                                    <a href="index.php?act=detail&id_products='.$id_product.'&id_categories='.$type_id.'" class="flex ">
                                        <img style="width:60px;height:60px;" src="images/sanpham/'.$img.'">
                                        <div>
                                            <p style="font-weight:bold;">'.$products_name.'</p>
                                            <p style="color:red">'.$money.'</p>
                                        </div>
                                    </a>
                                </li>
                                ';
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>
</nav>
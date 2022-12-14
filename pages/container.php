<?php
    include 'pages/menu.php';
?>
        <section>

            <div class="slide-show">
                <div class="slide">
                    <img class="slide-item" src="images/logo/img2.webp" alt="">
                    <img class="slide-item" src="images/logo/img3.webp" alt="">
                    <img class="slide-item" src="images/logo/img4.webp" alt="">
                    <img class="slide-item" src="images/logo/img5.webp" alt="">
                </div>

                <div class="owls">
                    <span class="owl-btn active"></span>
                    <span class="owl-btn"></span>
                    <span class="owl-btn"></span>
                    <span class="owl-btn"></span>
                </div>

            </div>
        </section>

        <section>
            <div class="advertise">
                <div class="advert-item">
                    <img class="advert-img" src="images/logo/img6.webp" alt="">
                    <img class="advert-img" src="images/logo/img7.webp" alt="">
                    <img class="advert-img" src="images/logo/img8.webp" alt="">
                    <img class="advert-img" src="images/logo/img9.webp" alt="">
                </div>
            </div>
        </section>

        <!-- Sale -->
        <section>
            <div class="banner-sale">
                <img src="images/logo/img10.webp" alt="">
            </div>
        </section>

        <!-- trademark -->

        <section>

            <div class="brand">
                <h2 class="mark-title">Thương hiệu nổi bật</h2>

                <div class="trade-mark">
                    <!-- Asus -->
                    <?php
                        foreach ($list_dmm as $dm) {
                            extract($dm);
                            echo '
                            <div class="mark-item">
                                <!-- Link đến loại máy tính như hình -->
                                <a href="index.php?act=danhmuc&id='.$id_type.'" class="mark-link"><img class="mark-img" src="images/logo/'.$img.'" alt=""></a>
                                <figcaption class="mark-name">'.$type_name.'</figcaption>
                            </div>';
                        }
                    ?>
                    

                    
                </div>
            </div>

        </section>

        <!-- List item laptop -->
        <section>

            <div class="laptop-product">
                <h2 class="mark-title">Laptop</h2>

                <div class="list-product">

                    <!-- Item -->
                    <?php
                    function product_price($priceFloat)
                    {
                        $symbol = 'đ';
                        $symbol_thousand = '.';
                        $decimal_place = 0;
                        $price = number_format($priceFloat, $decimal_place, '', $symbol_thousand);
                        return $price . $symbol;
                    }
                    foreach ($list_products as $products) {
                        extract($products);
                        $price = product_price($money);
                        $priceFloat = $money;
                        echo '
                            <div class="inner-item">
                                <a href="index.php?act=detail&id_products='.$id_product.'&id_categories='.$type_id.'" class="product-item">
                                    <img class="laptop-img" src="./images/sanpham/' . $img . '" >
                                    <p style="font-weight: bold;" class="inner-name">' . $products_name . '</p>
                                </a>
                                <div class="flex">
                                    <div>
                                        <p style="display:none;" class="inner-price">' . $price . '</p>
                                        <p class="inner-price">' . product_price($priceFloat) . '</p>
                                        <p class="sale"><del>17.990.000<span>đ</span></del> <span class="sold">-24.46%</span> </p>
                                    </div>
                                    <div >
                                        <form action="index.php?act=addtocart" method="POST" style="width:100%"> 
                                            <input type="hidden" name="id" value="'.$id_product.'">
                                            <input type="hidden" name="name" value="'.$products_name.'">
                                            <input type="hidden" name="img" value="'.$img.'">
                                            <input type="hidden" name="money" value="'.$money.'">
                                            <input id="buy" name="addtocart" type="submit" value="Mua ">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            ';
                    }
                    ?>

                </div>
            </div>

        </section>

    </nav>
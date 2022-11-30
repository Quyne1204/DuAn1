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
                    <div class="mark-item">
                        <!-- Link đến loại máy tính như hình -->
                        <a href="#asus" class="mark-link"><img class="mark-img" src="images/logo/img11.webp" alt=""></a>
                        <figcaption class="mark-name">Asus</figcaption>
                    </div>

                    <!-- Lenovo -->
                    <div class="mark-item">
                        <!-- Link đến loại máy tính như hình -->
                        <a href="#lenovo" class="mark-link"><img class="mark-img" src="images/logo/img12.webp" alt=""></a>
                        <figcaption class="mark-name">Lenovo</figcaption>
                    </div>

                    <!-- Acer -->
                    <div class="mark-item">
                        <!-- Link đến loại máy tính như hình -->
                        <a href="#acer" class="mark-link"><img class="mark-img" src="images/logo/img13.jpg" alt=""></a>
                        <figcaption class="mark-name">Acer</figcaption>
                    </div>

                    <!-- HP -->
                    <div class="mark-item">
                        <!-- Link đến loại máy tính như hình -->
                        <a href="#hp" class="mark-link"><img class="mark-img" src="images/logo/img14.webp" alt=""></a>
                        <figcaption class="mark-name">HP</figcaption>
                    </div>
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
                                <a href="index.php?act=detail&id_products=' . $id_product . '&id_categories=' . $type_id . '" class="product-item">
                                    <div class="inner-item">
                                        <img class="laptop-img" src="./images/sanpham/' . $img . '" >
                                        <p class="inner-name">' . $products_name . '</p>
                                        <p style="display:none;" class="inner-price">' . $price . '</p>
                                        <p class="inner-price">' . product_price($priceFloat) . '</p>
                                        <p class="sale"><del>17.990.000<span>đ</span></del> <span class="sold">-24.46%</span> </p>
                                    </div>
                                </a>
                            ';
                    }
                    ?>

                </div>
            </div>

        </section>

    </nav>
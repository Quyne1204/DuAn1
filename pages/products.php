<?php
    include 'pages/menu.php';
?>

            
        <!-- List item laptop -->
        <section>

            <div class="laptop-product">
                <h2 class="mark-title">Laptop <?=$name_dm?></h2>

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
                    foreach ($list_sp as $sp) {
                        extract($sp);
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
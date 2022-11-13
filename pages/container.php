<span>Danh mục sản phẩm</span>
                        </button>
                        
                        <div class="model-category">
                            <?php
                            
                                foreach ($list_dm as $dm) {
                                    extract($dm);
                                    echo '
                                    <ul class="list-category">
                                        <li><a href=""> <span class="icon-arrow"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
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
    </div>
        <section>

            <div class="slide-show">
                <div class="slide">
                    <img class="slide-item" src="https://lh3.googleusercontent.com/90ni7bXbVGCmFrSgWZWthh5RcqMuz206bIaepQMc-C3jEza-AFiLUtP16ht59gz22ToX5HMUi9FF5qcT4KCdjVTyQL1KjPIH=w1920-rw" alt="">
                    <img class="slide-item" src="https://lh3.googleusercontent.com/ac2ZIzZadtew_4hPF8D2xIGT17Cj2qh_uS1sdUIrG8Xlqr_NUI82MqoHg7hiHE1IWJlslpqAg9PvnEQ2jfnnPg0CdghEp_1y=w1920-rw" alt="">
                    <img class="slide-item" src="https://lh3.googleusercontent.com/xZqj_ngVsA_wxY-H9SHp8AJIpmzSSgX4CFfYVTm_wS3Shaq1wP5WqdYSV-sK3pkuJpxQB3RhNWObbQNFzbLG1sd9xoQpZvHo=w1920-rw" alt="">
                    <img class="slide-item" src="https://lh3.googleusercontent.com/YhZudHDQJp7_NPPmxmk0VQXLg2fNrPKuj7c3nm2EfxbqvnBAoouf3oUng2AGD2-p59RxobXMEqcoGMqWr9KFNmfdB6Cz9E3MsQ=w1920-rw" alt="">
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
                    <img class="advert-img" src="https://lh3.googleusercontent.com/RUah6nLmEFFnGMxhxfaG5Rf4HofTU6NBToJKSX-YvsyURIZt13Hys-4-ckC1RpafU4IX12vjC2I9qx8stii5E5DxY448r2jHZw=w308-rw" alt="">
                    <img class="advert-img" src="https://lh3.googleusercontent.com/ZcLDF59_DzKbpCDmUmL2Dpyu9dyLu85LV3qFWWO0mSzrPFruKjhhd3RAr8LlhayjQeZd3xTDhG9GAGhYal1scn1AQaSraMmVmw=w308-rw" alt="">
                    <img class="advert-img" src="https://lh3.googleusercontent.com/WRPx5IU-zXfCOAxiuZ5kXLkgdbM6m3LgY8OQCQ5WXMpk67RcazMiseg92f4r1EgKe1NJkVkhhBP2ZqmzuiJuHugNNAL4rmip=w308-rw" alt="">
                    <img class="advert-img" src="https://lh3.googleusercontent.com/emiOAdOg2qxqYHNwvT-vOzJ50jd7xgMiiecXah9OJO68MsikovAbM11zALX8xqfR_mGQ0a-OP71xfRqnZloC-dIlNuGt97lp=w308-rw" alt="">
                </div>
            </div>
        </section>

        <section>

            <div class="list-tab">
                <div class="menu-tab">
                    <div class="tab active">
                        <h3 class="tab-title">Gaming Gear</h3>
                        <p class="tab-note">Chỉ từ 149k</p>
                    </div>

                    <div class="tab">
                        <h3 class="tab-title">Màn Hình Máy Tính</h3>
                        <p class="tab-note">Chỉ từ 2 triệu</p>
                    </div>

                    <div class="tab">
                        <h3 class="tab-title">Điện Máy</h3>
                        <p class="tab-note">Giảm đến 51%</p>
                    </div>
                </div>

                <!-- Banner 1 -->

                <div class="tab-banner active">
                    <img class="tab-img" src="https://lh3.googleusercontent.com/hpeWESxYMFkjDNyUwKdsKNeIHJE7-vBxvnwlPj1PRWKRklZsVrYrUabADTDBRbSWuNIaMe4FBKu_yCro5nEDK4KICQBXFn5X=rw-w1920" alt="">
                    <div class="inner-tab">
                        <div class="inner-item">
                            <img class="inner-img" src="https://lh3.googleusercontent.com/4bZDdJBhtkmOgCXyD6rxBzwT7ei6JJ5U768dnX1I1d_5riZbWlu9_1Lg9HS2ZxEX26zcqQTIJ1XVZu_GsIjNNQO6txuBbRk-gQ=w230-rw" alt="">
                            <p class="inner-name">Màn hình LCD VIEWSONIC VX2718-2KPC-MHD (2560 x 1440/VA/165Hz/1 ms)</p>
                            <p class="inner-price">5.690.000 <span>đ</span></p>
                            <p class="sale"><del>7.600.000 <span>đ</span></del> <span class="sold">-25.13%</span> </p>
                        </div>

                        <div class="inner-item">
                            <img class="inner-img" src="https://lh3.googleusercontent.com/lEwFIR76oQULHedWQg-X5MOUvHPe81POuvuW1UOxphbkC_qZgvqDJF3ACNrKwgH54JDej-1qGvjUaYylU6vLICUi2XBd4MU=w230-rw" alt="">
                            <p class="inner-name">Màn hình LCD VIEWSONIC VX2718-2KPC-MHD (2560 x 1440/VA/165Hz/1 ms)</p>
                            <p class="inner-price">5.690.000 <span>đ</span></p>
                            <p class="sale"><del>7.600.000 <span>đ</span></del> <span class="sold">-25.13%</span> </p>
                        </div>

                        <div class="inner-item">
                            <img class="inner-img" src="https://lh3.googleusercontent.com/lEwFIR76oQULHedWQg-X5MOUvHPe81POuvuW1UOxphbkC_qZgvqDJF3ACNrKwgH54JDej-1qGvjUaYylU6vLICUi2XBd4MU=w230-rw" alt="">
                            <p class="inner-name">Màn hình LCD VIEWSONIC VX2718-2KPC-MHD (2560 x 1440/VA/165Hz/1 ms)</p>
                            <p class="inner-price">5.690.000 <span>đ</span></p>
                            <p class="sale"><del>7.600.000 <span>đ</span></del> <span class="sold">-25.13%</span> </p>
                        </div>

                        <div class="inner-item">
                            <img class="inner-img" src="https://lh3.googleusercontent.com/lEwFIR76oQULHedWQg-X5MOUvHPe81POuvuW1UOxphbkC_qZgvqDJF3ACNrKwgH54JDej-1qGvjUaYylU6vLICUi2XBd4MU=w230-rw" alt="">
                            <p class="inner-name">Màn hình LCD VIEWSONIC VX2718-2KPC-MHD (2560 x 1440/VA/165Hz/1 ms)</p>
                            <p class="inner-price">5.690.000 <span>đ</span></p>
                            <p class="sale"><del>7.600.000 <span>đ</span></del> <span class="sold">-25.13%</span> </p>
                        </div>

                        <div class="inner-item">
                            <img class="inner-img" src="https://lh3.googleusercontent.com/lEwFIR76oQULHedWQg-X5MOUvHPe81POuvuW1UOxphbkC_qZgvqDJF3ACNrKwgH54JDej-1qGvjUaYylU6vLICUi2XBd4MU=w230-rw" alt="">
                            <p class="inner-name">Màn hình LCD VIEWSONIC VX2718-2KPC-MHD (2560 x 1440/VA/165Hz/1 ms)</p>
                            <p class="inner-price">5.690.000 <span>đ</span></p>
                            <p class="sale"><del>7.600.000 <span>đ</span></del> <span class="sold">-25.13%</span> </p>
                        </div>

                    </div>
                </div>

                <!-- Banner 2 -->

                <div class="tab-banner">
                    <img class="tab-img" src="https://lh3.googleusercontent.com/AX-KHFfzxH_B02K6xkajelNx-PI50PeI-ymr59HOF6PZO1CpZv_rEbIQIg7FbBHlwBAXu0iqw0be8htjbee-H-LG5lBGLyaCxQ=rw-w1920" alt="">
                    <div class="inner-tab">
                        <div class="inner-item">
                            <img class="inner-img" src="https://lh3.googleusercontent.com/lmBQMw1c4H8DEmCWzj9E5oVRxNTK1zrONpxohoCr6m_nDYQmVc9nAhOcI0oHxY5XjbJ9j74gccj07A3oJLwp5bbgDNwnEKBD=w230-rw" alt="">
                            <p class="inner-name">Màn hình LCD VIEWSONIC VX2718-2KPC-MHD (2560 x 1440/VA/165Hz/1 ms)</p>
                            <p class="inner-price">5.690.000 <span>đ</span></p>
                            <p class="sale"><del>7.600.000 <span>đ</span></del> <span class="sold">-25.13%</span> </p>
                        </div>

                        <div class="inner-item">
                            <img class="inner-img" src="https://lh3.googleusercontent.com/lmBQMw1c4H8DEmCWzj9E5oVRxNTK1zrONpxohoCr6m_nDYQmVc9nAhOcI0oHxY5XjbJ9j74gccj07A3oJLwp5bbgDNwnEKBD=w230-rw" alt="">
                            <p class="inner-name">Màn hình LCD VIEWSONIC VX2718-2KPC-MHD (2560 x 1440/VA/165Hz/1 ms)</p>
                            <p class="inner-price">5.690.000 <span>đ</span></p>
                            <p class="sale"><del>7.600.000 <span>đ</span></del> <span class="sold">-25.13%</span> </p>
                        </div>

                        <div class="inner-item">
                            <img class="inner-img" src="https://lh3.googleusercontent.com/lmBQMw1c4H8DEmCWzj9E5oVRxNTK1zrONpxohoCr6m_nDYQmVc9nAhOcI0oHxY5XjbJ9j74gccj07A3oJLwp5bbgDNwnEKBD=w230-rw" alt="">
                            <p class="inner-name">Màn hình LCD VIEWSONIC VX2718-2KPC-MHD (2560 x 1440/VA/165Hz/1 ms)</p>
                            <p class="inner-price">5.690.000 <span>đ</span></p>
                            <p class="sale"><del>7.600.000 <span>đ</span></del> <span class="sold">-25.13%</span> </p>
                        </div>

                        <div class="inner-item">
                            <img class="inner-img" src="https://lh3.googleusercontent.com/lmBQMw1c4H8DEmCWzj9E5oVRxNTK1zrONpxohoCr6m_nDYQmVc9nAhOcI0oHxY5XjbJ9j74gccj07A3oJLwp5bbgDNwnEKBD=w230-rw" alt="">
                            <p class="inner-name">Màn hình LCD VIEWSONIC VX2718-2KPC-MHD (2560 x 1440/VA/165Hz/1 ms)</p>
                            <p class="inner-price">5.690.000 <span>đ</span></p>
                            <p class="sale"><del>7.600.000 <span>đ</span></del> <span class="sold">-25.13%</span> </p>
                        </div>

                        <div class="inner-item">
                            <img class="inner-img" src="https://lh3.googleusercontent.com/4bZDdJBhtkmOgCXyD6rxBzwT7ei6JJ5U768dnX1I1d_5riZbWlu9_1Lg9HS2ZxEX26zcqQTIJ1XVZu_GsIjNNQO6txuBbRk-gQ=w230-rw" alt="">
                            <p class="inner-name">Màn hình LCD VIEWSONIC VX2718-2KPC-MHD (2560 x 1440/VA/165Hz/1 ms)</p>
                            <p class="inner-price">5.690.000 <span>đ</span></p>
                            <p class="sale"><del>7.600.000 <span>đ</span></del> <span class="sold">-25.13%</span> </p>
                        </div>
                    </div>
                </div>

                <!-- Banner 3 -->

                <div class="tab-banner">
                    <img class="tab-img" src="https://lh3.googleusercontent.com/d640pEeZS6pm92HOA5KFip2gho4wIBik-S81txeUo95_Z_wjNVuc3S7wLU1DHT8dges5sw9c5tFztmSGUa4-Seq0g2Y_RQo=rw-w1200" alt="">
                    <div class="inner-tab">
                        <div class="inner-item">
                            <img class="inner-img" src="https://lh3.googleusercontent.com/lEwFIR76oQULHedWQg-X5MOUvHPe81POuvuW1UOxphbkC_qZgvqDJF3ACNrKwgH54JDej-1qGvjUaYylU6vLICUi2XBd4MU=w230-rw" alt="">
                            <p class="inner-name">Màn hình LCD VIEWSONIC VX2718-2KPC-MHD (2560 x 1440/VA/165Hz/1 ms)</p>
                            <p class="inner-price">5.690.000 <span>đ</span></p>
                            <p class="sale"><del>7.600.000 <span>đ</span></del> <span class="sold">-25.13%</span> </p>
                        </div>

                        <div class="inner-item">
                            <img class="inner-img" src="https://lh3.googleusercontent.com/lEwFIR76oQULHedWQg-X5MOUvHPe81POuvuW1UOxphbkC_qZgvqDJF3ACNrKwgH54JDej-1qGvjUaYylU6vLICUi2XBd4MU=w230-rw" alt="">
                            <p class="inner-name">Màn hình LCD VIEWSONIC VX2718-2KPC-MHD (2560 x 1440/VA/165Hz/1 ms)</p>
                            <p class="inner-price">5.690.000 <span>đ</span></p>
                            <p class="sale"><del>7.600.000 <span>đ</span></del> <span class="sold">-25.13%</span> </p>
                        </div>

                        <div class="inner-item">
                            <img class="inner-img" src="https://lh3.googleusercontent.com/lEwFIR76oQULHedWQg-X5MOUvHPe81POuvuW1UOxphbkC_qZgvqDJF3ACNrKwgH54JDej-1qGvjUaYylU6vLICUi2XBd4MU=w230-rw" alt="">
                            <p class="inner-name">Màn hình LCD VIEWSONIC VX2718-2KPC-MHD (2560 x 1440/VA/165Hz/1 ms)</p>
                            <p class="inner-price">5.690.000 <span>đ</span></p>
                            <p class="sale"><del>7.600.000 <span>đ</span></del> <span class="sold">-25.13%</span> </p>
                        </div>

                        <div class="inner-item">
                            <img class="inner-img" src="https://lh3.googleusercontent.com/lEwFIR76oQULHedWQg-X5MOUvHPe81POuvuW1UOxphbkC_qZgvqDJF3ACNrKwgH54JDej-1qGvjUaYylU6vLICUi2XBd4MU=w230-rw" alt="">
                            <p class="inner-name">Màn hình LCD VIEWSONIC VX2718-2KPC-MHD (2560 x 1440/VA/165Hz/1 ms)</p>
                            <p class="inner-price">5.690.000 <span>đ</span></p>
                            <p class="sale"><del>7.600.000 <span>đ</span></del> <span class="sold">-25.13%</span> </p>
                        </div>

                        <div class="inner-item">
                            <img class="inner-img" src="https://lh3.googleusercontent.com/4bZDdJBhtkmOgCXyD6rxBzwT7ei6JJ5U768dnX1I1d_5riZbWlu9_1Lg9HS2ZxEX26zcqQTIJ1XVZu_GsIjNNQO6txuBbRk-gQ=w230-rw" alt="">
                            <p class="inner-name">Màn hình LCD VIEWSONIC VX2718-2KPC-MHD (2560 x 1440/VA/165Hz/1 ms)</p>
                            <p class="inner-price">5.690.000 <span>đ</span></p>
                            <p class="sale"><del>7.600.000 <span>đ</span></del> <span class="sold">-25.13%</span> </p>
                        </div>
                    </div>
                </div>

            </div>

        </section>

        <!-- Sale -->
        <section>
            <div class="banner-sale">
                <img src="https://lh3.googleusercontent.com/0b498Ldzjgn26u_zFMGxYfAT9WQPJG1T9Y0gSzwroa9xfeHn60lkM7AKMho8ha4FrqlWr5NaNn3-d6wXhNRIojPpKgSMWg=w1232-rw" alt="">
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
                        <a href="#asus" class="mark-link"><img class="mark-img" src="https://lh3.googleusercontent.com/IqFtu_Hq7dQkOuTjKwVTjKV5Z1qK3FsuX3yX6Ab30i_yXZ2B1dFs8uQwQ9zgTt3UZts3RnuYx-ujvQW0i5Ox2UDhrqxeehI=w400-rw" alt=""></a>
                        <figcaption class="mark-name">Asus</figcaption>
                    </div>

                    <!-- Lenovo -->
                    <div class="mark-item">
                        <!-- Link đến loại máy tính như hình -->
                        <a href="#lenovo" class="mark-link"><img class="mark-img" src="https://lh3.googleusercontent.com/s2A1-31VtturT9H1hX0UccGw7yGufXD2NZFJkiNt-tTCx2xZO80lCt21b8oY3AYWmi3aUuMQIIySp623gbQoN22Wm_YvKvnB=w400-rw" alt=""></a>
                        <figcaption class="mark-name">Lenovo</figcaption>
                    </div>

                    <!-- Acer -->
                    <div class="mark-item">
                        <!-- Link đến loại máy tính như hình -->
                        <a href="#acer" class="mark-link"><img class="mark-img" src="https://w0.peakpx.com/wallpaper/816/427/HD-wallpaper-acer-dark-blue-logo-dark-blue-neon-lights-creative-dark-blue-abstract-background-acer-logo-brands-acer.jpg" alt=""></a>
                        <figcaption class="mark-name">Acer</figcaption>
                    </div>

                    <!-- HP -->
                    <div class="mark-item">
                        <!-- Link đến loại máy tính như hình -->
                        <a href="#hp" class="mark-link"><img class="mark-img" src="https://lh3.googleusercontent.com/4YXRxEqxqmoY8EPliJtNkbcqQCUe4TPTJyAZ_MIsb8JStdwwf3PInwC0SABKuoZiHJC7dJY6Ex1JqS4bpKo=w400-rw" alt=""></a>
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
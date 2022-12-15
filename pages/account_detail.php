<?php include 'menu.php'; ?>
    <div class="wrapper-update-user">

            <?php
                if(isset($user)&&is_array($user)){
                    extract($user);
                }
            ?>
        <div class="wrapper-account">
            <div class="user-block">
    
                <img src="images/default-image.png" alt="">
    
                <h3><?=$user_name?></h3>
                <p>
                    <?php
                        if($role == 2){
                            echo 'Khách hàng';
                        }else if($role == 1){
                            echo 'Nhân viên';
                        }
                    ?>
                </p>
                
    
            </div>
    
            <div class="info-block">
                <div class="flex">
                    <h2>Thông tin tài khoản</h2>
                    <a href="index.php?act=edit_tk&id=<?=$id_user?>" style="margin-top:7px; margin-left:10px">
                        <span >
                            <svg stroke="currentColor" fill="none" stroke-width="2" width="25px" height="25px"  viewBox="0 0 24 24" stroke-linecap="round"
                                stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                            </svg>
                        </span>
                    </a>
                    <a href="index.php?act=" style="margin-top:10px; margin-left:100px">
                        <h5 style="color:blue">Xem đơn hàng của bạn</h5>
                    </a>

                </div>
    
                <div class="information">
                    <div>
                        <h4>Tài khoản :</h4>
                        <p type="text" ><?=$user_name?></p>
                    </div>
                    <div>
                        <h4>Mật khẩu :</h4>
                        <p type="text" ><?=$password?></p>
                    </div>
                    <div>
                        <h4>Tên đầy đủ :</h4>
                        <p><?=$full_name?></p>
                    </div>
    
                    <div>
                        <h4>Phone :</h4>
                        <p><?=$phone_number?></p>
                    </div>
    
                    <div>
                        <h4>Địa chỉ :</h4>
                        <p><?=$address?></p>
                    </div>
    
                    <div>
                        <h4>Email :</h4>
                        <p><?=$email?></p>
                    </div>
                </div>
    
                <div class="tab-network">
    
                    <div class="icon-network">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="1em"
                            width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z">
                            </path>
                        </svg>
                    </div>
    
                    <div class="icon-network">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="1em"
                            width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z">
                            </path>
                        </svg>
                    </div>
    
                    <div class="icon-network">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em"
                            width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M391.17,103.47H352.54v109.7h38.63ZM285,103H246.37V212.75H285ZM120.83,0,24.31,91.42V420.58H140.14V512l96.53-91.42h77.25L487.69,256V0ZM449.07,237.75l-77.22,73.12H294.61l-67.6,64v-64H140.14V36.58H449.07Z">
                            </path>
                        </svg>
                    </div>
    
                </div>
    
            </div>
        </div>


    </div>

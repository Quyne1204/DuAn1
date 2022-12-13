<div class="container">
                
    <section class="list_products">

        <div class="wrapper-table" style="margin-top: 0px;">
            <div class="cot4">
                <div class="dropdown">
                    <a href="index.php?act=add_cus" ><input class="dropbtn adc" type="button" value="Thêm mới"></a>
                </div>
                <div class="dropdown">
                    <a href="index.php?act=list_cus&id=0">
                        <button class="dropbtn adc ">Vai trò</button>
                    </a>
                    <div class="dropdown-content add">
                    <?php
                        echo '<a href="index.php?act=list_cus&id=1">Nhân viên</a>';
                        echo '<a href="index.php?act=list_cus&id=2">Khách hàng</a>';
                    ?>
                    </div>
                </div>
                <form method="POST" action="index.php?act=list_cus">
                    <div class="right3">
                        <div class="cot22">
                        <input id="id2" name="kyw" type="text" placeholder="Nhập tên người dùng">
                            <button class="handel-search">
                                <svg id="id1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <table class="table-inform">
                <thead>
                    <td width="30px">ID</td>
                    <td width="100px">Tài khoản</td>
                    <td width="80px">Mật khẩu</td>
                    <td width="170px">Tên đầy đủ</td>
                    <td width="110px">Email</td>
                    <td width="100px">Số điện thoại</td>
                    <td width="200px">Địa chỉ</td>
                    <td width="100px">Vai trò</td>
                    <td width="70px">Công cụ</td>
                </thead>
                <?php
                    foreach ($list_cus as $user) {
                        extract($user);
                        $update_cus="index.php?act=update_cus&id=".$id_user;
                        $delete_cus="index.php?act=delete_cus&id=".$id_user;
                        if($role == 1 ){
                            $vaitro = "Nhân viên";
                        }else if($role ==2){
                            $vaitro = "Khách hàng";
                        }
                        echo '
                            <tr>
                                <td>'.$id_user.'</td>
                                <td>'.$user_name.'</td>
                                <td>'.$password.'</td>
                                <td>'.$full_name.'</td>
                                <td>'.$email.'</td>
                                <td>'.$phone_number.'</td>
                                <td>'.$address.'</td>
                                <td>'.$vaitro.'</td>
                                <td class="flex">
                                    <a class="a" href="'.$update_cus.'" style="margin-right:10px">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M21.75 6.75a4.5 4.5 0 01-4.884 4.484c-1.076-.091-2.264.071-2.95.904l-7.152 8.684a2.548 2.548 0 11-3.586-3.586l8.684-7.152c.833-.686.995-1.874.904-2.95a4.5 4.5 0 016.336-4.486l-3.276 3.276a3.004 3.004 0 002.25 2.25l3.276-3.276c.256.565.398 1.192.398 1.852z" />
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M4.867 19.125h.008v.008h-.008v-.008z" />
                                        </svg>
                                    </a>
                                    <a class="a" href="'.$delete_cus.'">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>

                                    </a>
                                </td>
                            </tr>
                            ';
                        }
                ?>
            </table>
        </div>
    
    </section>
</div> 

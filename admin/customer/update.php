<?php
 if(is_array($user)){
    extract($user);
}
?>
<div class="container">
    <h2>Sửa thông tin khách hàng</h2>

    <form action="index.php?act=updatecus" method="POST" >
        <div class="form-body">
            <div style="width:50%;">
                <div class="form-label">
                    <h3>Tên đăng nhập</h3>
                    <input type="text" name="user_name" value="<?php echo $user_name;?>" placeholder="Tên đăng nhập" required>
                </div>

                <div class="form-label">
                    <h3>Mật khẩu</h3>
                    <input type="text" name="pass" value="<?php echo $password;?>" placeholder="Mật khẩu">
                </div>

                <div class="form-label">
                    <h3>Tên đầy đủ</h3>
                    <input type="text" name="full_name" value="<?php echo $full_name;?>" placeholder="Tên đầy đủ">
                </div>
                <div class="form-label">
                    <h3>Vai trò</h3>
                    <select name="role" >
                    <?php
                        if($role == 1) {
                            echo '<option value="1" selected>Nhân viên</option>';
                            echo '<option value="2">Khách hàng</option>';
                        }else if($role == 2){
                            echo '<option value="1">Nhân viên</option>';
                            echo '<option value="2" selected>Khách hàng</option>';
                        }
                ?>
                    </select>
                </div>
            </div>

            <div style="width:50%;">
                <div class="form-label">
                    <h3>Email</h3>
                    <input type="email" name="email" value="<?php echo $email;?>" placeholder="Email">
                </div>

                <div class="form-label">
                    <h3>Số điện thoại</h3>
                    <input type="number" name="phone" value="<?php echo $phone_number;?>" placeholder="Số điện thoại">
                </div>

                <div class="form-label">
                    <h3>Địa chỉ</h3>
                    <input type="text" name="address" value="<?php echo $address;?>" placeholder="Địa chỉ">
                </div>
            </div>

        </div>

        <div class="them">
            <input class="reset" type="hidden" name="id" value="<?php echo $id_user;?>">
            <input class="reset" type="submit" name="update_cus" value="Update">
            <input  type="reset" value="Nhập lại" class="reset">
            <a href="index.php?act=list_cus"><input type="button" value="Danh sách" class="reset"></a>

        </div>
        <?php       
            if(isset($thongbao)&&($thongbao!=""))
            echo '<p style="color:red">'.$thongbao.'</p>';
        ?>
    </form>
</div>
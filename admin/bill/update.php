<?php
    if(is_array($bill)){
        extract($bill);
    }
?>
<div class="boxx"></div>
<div class="upd">
    <form action="index.php?act=updatebill" method="POST" enctype="multipart/form-data">
        <div class="hop">
                <input class="hidden" type="hidden" name="id_bill" value="<?php echo $id_bill ?>">
                <h2>Chỉnh sửa đơn hàng </h2>
                <div class="nhap">
                    <h3>Tình trạng đơn hàng</h3>
                    <select name="ttdh">
                        <?php
                            if($status == 0) {
                                echo '<option value="0" selected>Đang tạo đơn hàng</option>';
                                echo '<option value="1">Đã xử lý</option>';
                                echo '<option value="2">Đang giao hàng</option>';
                                echo '<option value="3">Giao hàng thành công</option>';
                                echo '<option value="4">Đơn hàng đã hoàn tất</option>';
                                echo '<option value="5">Hủy đơn</option>';
                            }else if($status == 1){
                                echo '<option value="0" >Đang tạo đơn hàng</option>';
                                echo '<option value="1" selected>Đã xử lý</option>';
                                echo '<option value="2">Đang giao hàng</option>';
                                echo '<option value="3">Giao hàng thành công</option>';
                                echo '<option value="4">Đơn hàng đã hoàn tất</option>';
                                echo '<option value="5">Hủy đơn</option>';
                            }else if($status == 2){
                                echo '<option value="0" >Đang tạo đơn hàng</option>';
                                echo '<option value="1">Đã xử lý</option>';
                                echo '<option value="2" selected>Đang giao hàng</option>';
                                echo '<option value="3">Giao hàng thành công</option>';
                                echo '<option value="4">Đơn hàng đã hoàn tất</option>';
                                echo '<option value="5">Hủy đơn</option>';
                            }else if($status == 3){
                                echo '<option value="0" >Đang tạo đơn hàng</option>';
                                echo '<option value="1">Đã xử lý</option>';
                                echo '<option value="2">Đang giao hàng</option>';
                                echo '<option value="3" selected>Giao hàng thành công</option>';
                                echo '<option value="4">Đơn hàng đã hoàn tất</option>';
                                echo '<option value="5">Hủy đơn</option>';
                            }else if($status == 4){
                                echo '<option value="0" >Đang tạo đơn hàng</option>';
                                echo '<option value="1">Đã xử lý</option>';
                                echo '<option value="2">Đang giao hàng</option>';
                                echo '<option value="3">Giao hàng thành công</option>';
                                echo '<option value="4" selected>Đơn hàng đã hoàn tất</option>';
                                echo '<option value="5">Hủy đơn</option>';
                            }else if($status == 5){
                                echo '<option value="0" >Đang tạo đơn hàng</option>';
                                echo '<option value="1">Đã xử lý</option>';
                                echo '<option value="2">Đang giao hàng</option>';
                                echo '<option value="3">Giao hàng thành công</option>';
                                echo '<option value="4">Đơn hàng đã hoàn tất</option>';
                                echo '<option value="5" selected>Hủy đơn</option>';
                            }
                        ?>
                    </select>
                </div>
                <div class="nhap">
                    <h3>Tên khách hàng*</h3>
                    <input type="text" value="<?=$name?>" name="name" required>
                </div>
                <div class="nhap">
                    <h3>Email</h3>
                    <input type="email" value="<?=$email?>" name="email">
                </div>
                <div class="nhap">
                    <h3>Số điện thoại*</h3>
                    <input type="number" value="<?=$phone?>" name="phone" required>
                </div>
                <div class="nhap">
                    <h3>Địa chỉ*</h3>
                    <input type="text" value="<?=$address?>" name="address" required>
                </div>
                
                <input type="submit" value="Update" name="update_bill">    
                <input type="reset" value="Reset">
                <input type="submit" value="No">
            
        </div>
    </form>
</div>
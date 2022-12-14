<?php
 if(is_array($products)){
    extract($products);
}
?>

<div class="container">
    <h2>Update sản phẩm</h2>

    <form action="index.php?act=update_pro" method="POST" enctype="multipart/form-data">
        <div class="form-body">

            <div style="width:50%;">
                <div class="form-label">
                    <h3>Tên sản phẩm</h3>
                    <input type="text" name="ten_hh" value="<?php echo $products_name?>" placeholder="Tên sản phẩm" required>
                </div>

                <div class="form-label">
                    <h3>Đơn giá</h3>
                    <input type="number" name="don_gia" value="<?php echo $money?>" placeholder="Đơn giá" required>
                </div>

                <div class="form-label">
                    <h3>Hình ảnh</h3>
                    <img width="100px" src="../images/sanpham/<?php echo $img?>" alt="">
                    <input type="file" name="img" >
                </div>
            </div>

            <div style="width:50%;">
            
                <div class="form-label">
                    <h3>Danh mục</h3>
                    <select name="iddm" required>
                        <?php 
                            foreach ($listdanhmuc as $danhmuc) {
                                extract($danhmuc);
                                echo "<option value=".$id_type.">$type_name</option>";
                            } 
                        ?>
                       </select>
                    </select>
                </div>
                <div class="form-label">
                    <h3>Ngày nhập</h3>
                    <input type="date" name="date" value="<?php echo $date_added?>" placeholder="Ngày nhập hàng" required>
                </div>
                <div class="form-label">
                    <h3>Mô tả</h3>
                    <textarea style="width:400px;height:100px" name="mo_ta" id="hanghoa" required><?php echo $detail?>"</textarea>
                </div>

            </div>

        </div>

        <div class="them">
            <input class="hidden" type="hidden" name="id_sp" value="<?php echo $id_product ?>">
            <input class="reset" type="submit" name="update" value="Update">
            <input  type="reset" value="Nhập lại" class="reset">
            <a href="index.php?act=list_pro"><input type="button" value="Danh sách" class="reset"></a>
        </div>
        <?php       
            if(isset($thongbao)&&($thongbao!=""))
            echo '<p style="color:red">'.$thongbao.'</p>';
        ?>
    </form>
</div>

<div class="container">
    <h2>Nhập thông tin sản phẩm</h2>

    <form action="index.php?act=add_pro" method="POST" enctype="multipart/form-data">
        <div class="form-body">

            <div style="width:50%;">
                <div class="form-label">
                    <h3>Tên sản phẩm</h3>
                    <input type="text" name="ten_hh" placeholder="Tên sản phẩm" required>
                </div>

                <div class="form-label">
                    <h3>Đơn giá</h3>
                    <input type="number" name="don_gia" placeholder="Đơn giá" required>
                </div>

                <div class="form-label">
                    <h3>Hình ảnh</h3>
                    <input type="file" name="img" required>
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
                    <input type="date" name="date" placeholder="Ngày nhập hàng" required>
                </div>
                <div class="form-label">
                    <h3>Mô tả</h3>
                    <textarea style="width:400px;height:100px" name="mo_ta" id="hanghoa" required></textarea>
                </div>

            </div>

        </div>

        <div class="them">
            <input class="reset" type="submit" name="themmoi" value="Thêm mới">
            <input  type="reset" value="Nhập lại" class="reset">
            <a href="index.php?act=list_pro"><input type="button" value="Danh sách" class="reset"></a>
        </div>
        <?php       
            if(isset($thongbao)&&($thongbao!=""))
            echo '<p style="color:red">'.$thongbao.'</p>';
        ?>
    </form>
</div>
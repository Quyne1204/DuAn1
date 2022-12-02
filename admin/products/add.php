<main>
    <div class="quanly">
        <form action="index.php?act=add_pro" method="post" enctype="multipart/form-data">
            <div class="box-quanly">
                <div class="box-item item">
                    <h4 for="">DANH MỤC</h4> <br>
                    <select name="iddm" id="">
                       <?php 
                            foreach ($listdanhmuc as $danhmuc) {
                                extract($danhmuc);
                                echo "<option value=".$id_type.">$type_name</option>";
                            } ?>
                       </select>
                </div>
                <div class="box-item item">
                    <h4 for="">TÊN HÀNG HÓA</h4> <br>
                    <input type="text" id="hanghoa" name="ten_hh" required>
                    <span class="focus-boder"></span>
                </div>
                <div class="box-item item">
                    <h4 for="">ĐƠN GIÁ</h4> <br>
                    <input type="text" id="hanghoa" name="don_gia" required>
                    <span class="focus-boder"></span>
                </div>
                <div class="box-item item">
                    <h4 for="">NGÀY NHẬP HÀNG</h4> <br>
                    <input type="date" id="hanghoa" name="date" required>
                    <span class="focus-boder"></span>
                </div>
                <div class="box-item item">
                    <h4 for="">HÌNH ẢNH</h4> <br>
                    <input type="file" id="hanghoa" name="img" required>
                    <span class="focus-boder"></span>
                </div>
                <div class="box-item item">
                    <h4 for="">MÔ TẢ</h4> <br>
                    <textarea name="mo_ta" id="hanghoa" required></textarea>
                    <span class="focus-boder"></span>
                </div>
                <div class="box-item item">

                </div>
            </div>
        
            <div class="button-form">
                <input type="submit" name="themmoi" value="Thêm mới"> 
                <input type="reset" value="Nhập lại"> 
                <a href="index.php?act=list_pro"><input type="button" value="Danh Sách"></a>
            </div>
                   <?php
                     if(isset($thongbao)&&($thongbao!=""))
                        echo $thongbao;
                    ?>

        </form>
                          
    </div>
</main>
















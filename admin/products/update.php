<?php
 if(is_array($products)){
    extract($products);
}
?>
<main>
    <div class="quanly">
        <form action="index.php?act=update_pro" method="post" enctype="multipart/form-data">
            <div class="box-quanly">
                <div class="box-item item">
                    <h4 for="">DANH MỤC</h4> <br>
                    <select name="iddm" id="">
                       <?php 
                            foreach ($listdanhmuc as $danhmuc) {
                                extract($danhmuc);
                                if($id_type == $type_id) {
                                    echo '<option value="'.$id_type.'" selected>'.$type_name.'</option>';
                                }else{
                                    echo '<option value="'.$id_type.'">'.$type_name.'</option>';
                                }
                            } ?>
                       </select>
                </div>
                <div class="box-item item">
                    <h4 for="">TÊN HÀNG HÓA</h4> <br>
                    <input type="text" id="hanghoa" name="ten_hh" value="<?php echo $products_name ?>" required >
                    <span class="focus-boder"></span>
                </div>
                <div class="box-item item">
                    <h4 for="">ĐƠN GIÁ</h4> <br>
                    <input type="text" id="hanghoa" name="don_gia" value="<?php echo $money ?>" required>
                    <span class="focus-boder"></span>
                </div>
                <div class="box-item item">
                    <h4 for="">NGÀY NHẬP HÀNG</h4> <br>
                    <input type="date" id="hanghoa" name="date" value="<?php echo $date_added ?>" required>
                    <span class="focus-boder"></span>
                </div>
                <div class="box-item item">
                    <h4 for="">MÔ TẢ</h4> <br>
                    <textarea name="mo_ta" id="hanghoa" required ><?php echo $detail ?></textarea>
                    <span class="focus-boder"></span>
                </div>
                <div class="box-item item">

                </div>
                
                <div class="box-item item">
                    <h4 for="">HÌNH ẢNH</h4> <br>
                    <img width="200px" src="../images/sanpham/<?php echo $img ?>" alt="">
                    <input type="file" id="hanghoa" name="img" >
                    <span class="focus-boder"></span>
                </div>
            </div>
        
            <div class="button-form">
                <input type="hidden" name="id_sp" value="<?php echo $id_product ?>">
                <input type="submit" name="update" value="Cập nhật"> 
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
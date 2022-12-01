<?php
 if(is_array($categories)){
    extract($categories);
}
?>
<main>
    <div class="quanly">
        <form action="index.php?act=update_dm" method="post" enctype="multipart/form-data">
            <div class="box-quanly">
                
                <div class="box-item item">
                    <h4 for="">Tên Danh Mục</h4> <br>
                    <input type="text" id="hanghoa" name="ten_hh" required value="<?php echo $type_name ?>">
                    <span class="focus-boder"></span>
                </div>
            </div>
        
            <div class="button-form">
            <input type="hidden" name="iddm" value="<?php echo $id_type ?>">
                <input type="submit" name="update" value="Update"> 
                <input type="reset" value="Nhập lại"> 
                <a href="index.php?act=list_cate"><input type="button" value="Danh Sách"></a>
            </div>
                   <?php
                     if(isset($thongbao)&&($thongbao!=""))
                        echo $thongbao;
                    ?>

        </form>
                          
    </div>
</main>
















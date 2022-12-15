<?php
 if(is_array($categories)){
    extract($categories);
}
?>
<div class="container">
    <h2>Update danh mục</h2>
        <form action="index.php?act=update_dm" method="post" enctype="multipart/form-data">
            <div class="form-body">

                <div >
                    <div class="form-label">
                        <h3>Tên danh mục</h3>
                        <input type="text" id="hanghoa" name="ten_hh" value="<?php echo $type_name ?>" required>
                    </div>
                </div>
            </div>
        
            <div class="button-form">
                <input type="hidden" name="iddm" value="<?php echo $id_type ?>">
                <input type="submit"  class="reset" name="update" value="Update"> 
                <input type="reset"  class="reset" value="Nhập lại"> 
                <a href="index.php?act=list_cate"><input type="button" class="reset" value="Danh Sách"></a>
            </div>
                   <?php
                     if(isset($thongbao)&&($thongbao!=""))
                        echo $thongbao;
                    ?>

        </form>
</div>














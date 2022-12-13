<div class="container">
    <h2>Nhập thông tin danh mục</h2>
        <form action="index.php?act=add_dm" method="post" enctype="multipart/form-data">
            <div class="form-body">

                <div style="width:50%;">
                    <div class="form-label">
                        <h3>Tên danh mục</h3>
                        <input type="text" id="hanghoa" name="ten_hh" required>
                    </div>
                </div>
            </div>
        
            <div class="button-form">
                <input type="submit"  class="reset" name="themmoi" value="Thêm mới"> 
                <input type="reset"  class="reset" value="Nhập lại"> 
                <a href="index.php?act=list_cate"><input type="button" class="reset" value="Danh Sách"></a>
            </div>
                   <?php
                     if(isset($thongbao)&&($thongbao!=""))
                        echo $thongbao;
                    ?>

        </form>
</div>
















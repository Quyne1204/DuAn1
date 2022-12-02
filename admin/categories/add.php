<main>
    <div class="quanly">
        <form action="index.php?act=add_dm" method="post" enctype="multipart/form-data">
            <div class="box-quanly">
                
                <div class="box-item item">
                    <h4 for="">Tên Danh Mục</h4> <br>
                    <input type="text" id="hanghoa" name="ten_hh" required>
                    <span class="focus-boder"></span>
                </div>
            </div>
        
            <div class="button-form">
                <input type="submit" name="themmoi" value="Thêm mới"> 
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
















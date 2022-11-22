<?php
 if(is_array($capnhat)){
    extract($capnhat);
 }
?>
<main>
            <h1>Cập nhật loại hàng</h1>
            <div class="quanly">
                <form action="index.php?act=updatedm" method="post">
                    <h4>Mã loại</h4>
                    <input type="text"disabled placeholder="autonumber" name="id">
                    <br>
                    <h4>Tên loại</h4>
                    <input type="text" name="name"<?php if(isset($name)&&($name!="")) echo $name; ?>>;
                    <br>
                    <div class="submit">
                      <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id; ?>">
                        <input type="submit"name="capnhat" value="Cập Nhật"> 
                        <input type="submit" value="Nhập lại"> 
                        <a href="index.php?act=listdm"><input type="button" value="Danh Sách"></a>
                    </div>
                    <?php
                     if(isset($thongbao)&&($thongbao!=""))
                        echo $thongbao;
                    ?>
                </form>


            </div>
        </main>
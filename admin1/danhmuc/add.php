<main>
            <h1>Quản lý loại hàng</h1>
            <div class="quanly">
                <form action="index.php?act=adddm" method="post">
                    <h4>Mã loại</h4>
                    <input type="text" disabled placeholder="autonumber" name="number">
                    <br>
                    <h4>Tên loại</h4>
                    <input type="text" name="name">
                    <br>
                    <div class="submit">
                        <input type="submit"name="themmoi" value="Thêm mới"> 
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
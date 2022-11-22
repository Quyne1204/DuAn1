<div class="row">
            <div class="row frmtitle">
                <h1>Danh Sách Loại Hàng Hóa</h1>
            </div>
            <div class="row mb10">
                <a href="index.php?act=addsp"><input type="button" value="Nhập Thêm"></a>
            </div>
            <form action="index.php?act=listsp" method="post">
                <input type="text" name="kyw" id="">
                <select name="iddm" id="">
                    <option value="0" selected>Tất cả</option>
                    <?php 
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        echo "<option value='".$id."'>$type_name</option>";
                    } ?>
                    </select>
                    <input type="submit" name="listok" value="OK">
            </form><br><br>
            <div class="row frmcontent">
                <div class="row mb10 frmdsloai">
                    <table>
                     <tr>
                        <th>MÃ SP</th>
                        <th>TÊN SẢN PHẨM</th>
                        <th>GIÁ</th>
                        <th>HÌNH</th>
                        <th>NGÀY NHẬP</th>
                        <th>MÔ TẢ</th>
                     </tr>
                     <?php
                        foreach ($listsanpham as $sanpham) {
                            extract($sanpham);
                            $suasp="index.php?act=suasp&id=".$id_product;
                            $xoasp="index.php?act=xoasp&id=".$id_product;
                            echo '
                                <tr style="padding-bottom:20px">
                                    <td>'.$id_product.'</td>
                                    <td>'.$products_name.'</td>
                                    <td>'.$money.' đ</td>
                                    <td><img width="150px" style="padding-bottom:20px" src="../images/sanpham/'.$img.'"></td>
                                    <td>'.$date_added.'</td> 
                                    <td width="200px" height="100px">'.$detail.'</td> 
                                    <td> <a href="'.$suasp.'"><input type="button" value="Sửa">  </a>
                                    <a href="'.$xoasp.'"><input type="button" value="Xóa"> </a></td>
                                </tr>';
                            }
                         ?>
                     
                    </table>
                </div>
              
                    

                
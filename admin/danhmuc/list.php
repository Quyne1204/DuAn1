<div class="row">
            <div class="row frmtitle">
                <h1>Danh Sách Loại Hàng Hóa</h1>
            </div>
            <div class="row frmcontent">
                <div class="row mb10 frmdsloai">
                    <table>
                     <tr>
                        <th></th>
                        <th>MÃ LOẠI</th>
                        <th>TÊN LOẠI</th>
                        <th></th>
                     </tr>
                     <?php
                     foreach ($listdanhmuc as $danhmuc) {
                            extract($danhmuc);
                            $suadm="index.php?act=suadm&id_type=".$id_type;
                            $xoadm="index.php?act=xoadm&id_type=".$id_type;
                            echo '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>'.$id_type.'</td>
                            <td>'.$type_name.'</td>
                            <td> <a href="'.$suadm.'"><input type="button" value="Sửa">  </a>
                            <a href="'.$xoadm.'"><input type="button" value="Xóa"></td> </a>
                        </tr>';
                        }
                         ?>
                     
                    </table>
                </div>
              
                    <div class="row mb10">
                    
                        <a href="index.php?act=adddm"><input type="button" value="Nhập Thêm"></a>
                    </div>

                
<div class="container">
                
    <section class="list_products ">
        <div class="list-chart flex">
            <p><a href="index.php?act=list_tk">Xem bảng thống kê</a></p>
            <p><a href="index.php?act=chart_1">Xem biểu đồ thống kê</a></p>
            <p><a href="index.php?act=chart_2">Sản phẩm bán chạy nhất</a></p>
            <p><a href="index.php?act=chart_3">Sản phẩm giá cao nhất</a></p>
            <p><a href="index.php?act=chart_4">Sản phẩm giá thấp nhất</a></p>
        </div> 
        <div class="list_tk">
            <table class="table-inform">
                <thead>
                    <th width="30px">STT</th>
                    <th width="100px">Loại hàng</th>
                    <th width="100px">Số lượng</th>
                    <th width="150px">Giá cao nhất</th>
                    <th width="150px">Giá thấp nhất</th>
                    <th width="150px">Giá trung bình</th>
                </thead>
                <tbody>
                    <?php 
                        foreach($dsthongke as $tk){
                            extract($tk);
                            echo '
                                <tr>
                                    <td class="pad">'.$id_dm.'</td>
                                    <td class="pad">'.$name_dm.'</td>
                                    <td class="pad">'.$count_sp.'</td>
                                    <td class="pad">'.$max_price.'</td>
                                    <td class="pad">'.$min_price.'</td>
                                    <td class="pad">'.$avg_price.'</td>
                                </tr>
                            ';
                        }
                    ?>
                </tbody>
            </table>
        </div>
        
    
    </section>
</div> 

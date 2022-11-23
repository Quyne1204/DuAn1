<div class="list">
    <div class="category">
        <table>
            <tr>
                <th width="8%">Mã Đơn</th>
                <th width="18%">Khách hàng </th>
                <th width="14%">Số lượng hàng </th>
                <th width="15%">Giá trị đơn hàng </th>
                <th width="14%">Ngày đặt hàng </th>
                <th width="24%">Tình trạng</th>
                <th></th>
            </tr>
            <?php
                foreach ($list_bill as $bill) {
                    extract($bill);
                    $update_bill ="index.php?act=update_bill&id=".$id_bill; 
                    $count = loadall_bill_count($bill['id_bill']);
                    $status = get_status($bill['status']);
                    echo '<tr>
                        <td>DHS-'.$id_bill.'</td>
                        <td>'.$user_id.' - '.$name.'</td>
                        <td>'.$count.'</td>
                        <td>'.$total.'</td>
                        <td>'.$date.'</td>
                        <td>'.$status.'</td>
                        <td>
                            <a href="" style="margin-right:20px">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21.75 6.75a4.5 4.5 0 01-4.884 4.484c-1.076-.091-2.264.071-2.95.904l-7.152 8.684a2.548 2.548 0 11-3.586-3.586l8.684-7.152c.833-.686.995-1.874.904-2.95a4.5 4.5 0 016.336-4.486l-3.276 3.276a3.004 3.004 0 002.25 2.25l3.276-3.276c.256.565.398 1.192.398 1.852z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.867 19.125h.008v.008h-.008v-.008z" />
                                </svg>
                            </a>
                        </td>
                    </tr>';
                    }
            ?>
        </table>
    </div>
</div>

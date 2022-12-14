<div class="container">
    
<section class="list_products">

    <div class="wrapper-table" style="margin-top: 0px;">
    <!-- ///serach/// -->
        <div class="cot4">
            <div class="dropdown">
                <a href="index.php?act=add_bill" ><input class="dropbtn adc" type="button" value="Thêm mới"></a>
            </div>
            <form method="POST" action="index.php?act=list_bill">
                <div class="right3">
                    <div class="cot22">
                        <input id="id2" name="kyw" type="text" placeholder="Nhập...">
                        <button class="handel-search">
                            <svg id="id1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <div class="category">
            <table>
                <thead>
                    <td width="30px">ID</td>
                    <td width="200px">Khách hàng</td>
                    <td width="120px">Số lượng hàng</td>
                    <td width="150px">Giá trị đơn hàng</td>
                    <td width="130px">Ngày đặt hàng</td>
                    <td width="200px">Tình Trạng</td>   
                    <td width="100px">Công cụ</td>
                </thead>
                <?php
                    foreach ($list_bill as $bill) {
                        extract($bill);
                        $update_bill ="index.php?act=update_bill&id=".$id_bill; 
                        $count = loadall_bill_count($bill['id_bill']);
                        $status = get_status($bill['status']);
                        echo '<tr>
                            <td>'.$id_bill.'</td>
                            <td>'.$user_id.' - '.$name.'</td>
                            <td>'.$count.'</td>
                            <td>'.$total.'</td>
                            <td>'.$date.'</td>
                            <td>'.$status.'</td>
                            <td class="flex">
                                <a class="a" href="index.php?act=update_bill&id='.$id_bill.'" style="margin-right:20px">
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
</session>
</div>

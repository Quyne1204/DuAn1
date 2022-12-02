<?php
    if(is_array($bill)){
        extract($bill);
    }
?>
<div class="box0">
<h1>Sửa sản phẩm</h1>
    <form action="index.php?act=updatebill" method="POST">
    <div>
        <p>Mã đơn hàng</p><br>
        <input type="text" value="DHS-<?php echo "$id_bill" ?>"  disabled><br><br>
        <p>Tình trạng đơn hàng</p><br>
        <input type="text" name="ttdh" value="<?php if(isset($status)&&($status!="")){echo $status ;}?> ">   <br>   
        <input type="hidden" name="id_bill" value="<?php if(isset($id_bill)&&($id_bill!="")){echo $id_bill ;}?> "> <br>     
        
        <p>      
            <span style="margin:10px">0: Đang tạo đơn hàng</span>
            <span style="margin:10px">1:Đã xử lý</span>
            <span style="margin:10px">2:Đang giao hàng</span>
            <span style="margin:10px">3:Giao hàng thành công</span>
        </p>   
        <input name="update_bill" class="normal btn" type="submit" value="Sửa"></input><br> 
    </div>
    </form>
</div>
<?php
 if(is_array($capnhat)){
    extract($capnhat);

 }
 $hinhpart="../upload/".$img;
 if(is_file($hinhpart)){
    $hinh="<img src='".$hinhpart."' height='80'>";
}else{
    $hinh="No Photo";
}
?>
<main>
    <h1>CẬP NHẬT SẢN PHẨM</h1>
    <?php 
                            foreach ($listdanhmuc as $danhmuc) {
                                //extract($danhmuc);
                                if($iddm==$danhmuc['id']) echo '<option value="'.$danhmuc['id'].'" selected > '.$danhmuc['name'].' </optinon>' ;
                                else echo '<option value="'.$danhmuc['id'].'"  > '.$danhmuc['name'].' </optinon>' ;                                
                            } ?>
                            
    <div class="quanly">
        <form action="view/index.php?act=updatehanghoa" method="post" enctype="multipart/form-data">
            <div class="box-quanly">
                <div class="box-item item">
                    <h4>Mã hàng hóa</h4>
                    <input type="text" id="hanghoa" class="ma_hanghoa" disabled value="auto number" name="ma_hh">
                </div>
                <div class="box-item item">
                    <h4 for="">TÊN HÀNG HÓA</h4> <br>
                    <input type="text" id="hanghoa" name="ten_hh" class="">
                    <span class="focus-boder"></span>
                </div>
                <div class="box-item item">
                    <h4 for="">ĐƠN GIÁ</h4> <br>
                    <input type="text" id="hanghoa" name="don_gia" >
                    <span class="focus-boder"></span>
                </div>
              
                <div class="box-item item">
                    <h4 for="">HÌNH ẢNH</h4> <br>
                    <input type="file" id="hanghoa" name="hinh">
                    <span class="focus-boder"></span>
                </div>
                <div class="box-item item">
                    <h4 for="">MÔ TẢ</h4> <br>
                    <textarea name="mo_ta" id="hanghoa" cols="30" rows="10" ></textarea>
                    <span class="focus-boder"></span>
                </div>
                <div class="box-item item">

                </div>
            </div>
          
        
            <div class="button-form">
                <button >CẬP NHẬT</button>
                <button >Làm mới</button>
                    <button >Danh Sách</button>
            </div> 
            <?php if(isset($thongbao) && ($thongbao!="")) echo $thongbao; ?>
        </form>


                       
                   
                 </div>
        </div>
        
    </div>
</main>
<?php
 if(is_array($products)){
    extract($products);
}
?>
<div class="boxx"></div>
<div class="del">
    <form action="index.php?act=delete_pro" method="POST" enctype="multipart/form-data">
        <div class="box">
            
                <input class="hidden" type="hidden" name="id_sp" value="<?php echo $id_product ?>">
                <h2>Bạn chắc chắn muốn xóa? </h2>
                <input type="submit" value="Yes" name="delete">    
                <input type="submit" value="No">
            
        </div>
    </form>
</div>
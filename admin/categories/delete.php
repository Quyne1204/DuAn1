<?php
    if(is_array($categories)){
        extract($categories);
}
?>
<div class="boxx"></div>
<div class="del">
    <form action="index.php?act=deletecate" method="POST" enctype="multipart/form-data">
        <div class="box">
            <input class="hidden" type="hidden" name="id" value="<?php echo $id_type ?>">
            <h2>Bạn chắc chắn muốn xóa? </h2>
            <input type="submit" value="Yes" name="delete">    
            <input type="submit" value="No">
            
        </div>
    </form>
</div>
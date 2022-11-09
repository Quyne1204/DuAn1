<section>

    <div id="form">
        <form method="POST" action="index.php?act=login">

            <div class="form-model">

                <div class="form-control">
                    <label class="form-title">Email</label>
                    <input class="form-input" type="email" name="email" placeholder="Email...">
                </div>

                <div class="form-control">
                    <label class="form-title">Mật khẩu</label>
                    <input class="form-input" type="password" name="password" placeholder="Mật khẩu..." >
                </div>
                <span style="color:red;">
                    <?php
                        if(isset($tb)&&($tb!="")){
                            echo $tb;
                            echo '<br><br>';
                        }
                    ?>
                </span>

                <input class="handel-submit" type="submit" name="login" value="Đăng nhập">

                <p class="suggest">Bạn chưa có tài khoản ? <a href="index.php?act=signup">Đăng ký</a></p>

            </div>

        </form>
    </div>

</section>
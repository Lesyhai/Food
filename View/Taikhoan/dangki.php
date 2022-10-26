<div class="container">
    <div class="boxtitle text-center text-success mt-3 mb-3 h2 fw-bold">Đăng Kí  Tài Khoản</div>
    <div class="dangnhap  mt-3 mb-3 pt-3">
    <div class="formtaikhoan">
        <form class="" action="index.php?act=dangki" method="post">
            <div class=" mt-3 mb-3 fw-bold">
                Email<br>
                    <input type="email" name="email" id="">
            </div>
            <div class=" mt-3 mb-3 fw-bold">
                Tên Đăng Nhập <br>
               <input type="text" name="user" id="">
            </div>
             <div class=" mt-3 mb-3 fw-bold">
                Mật Khẩu <br>
                    <input type="password" name="pass" id="">

            </div>
            <div class=" mt-3 mb-3">
                <input class="btn btn-outline-success" type="submit" name="dangki" id="" value="Đăng Kí">
                    <input class="btn btn-outline-success" type="reset" value="Nhập Lại">
            </div>
        </form>
        <h5 class="text-danger">
             <?php
            if (isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
        </h5>
    </div>
</div>
</div>
<div class="container">
    <div class="boxtitle text-center text-success mt-3 mb-3 h2 fw-bold">Cập Nhật Tài Khoản</div>
    <div class="dangnhap edit  mt-3 mb-3 pt-3">
    <div class="formtaikhoan">
        <?php

            if (isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                extract($_SESSION['user']);
            }

        ?>
        <form class="" action="index.php?act=edit_tk" method="post">
            <div class=" mt-3 mb-3 fw-bold">
                Email<br>
                    <input type="email" name="email" id="" value="<?=$email?>">
            </div>
            <div class=" mt-3 mb-3 fw-bold">
                Tên Đăng Nhập <br>
               <input type="text" name="user" id=""value="<?=$user?>">
            </div>
             <div class=" mt-3 mb-3 fw-bold">
                Mật Khẩu <br>
                    <input type="password" name="pass" id="" value="<?=$mat_khau?>">

            </div>
            <div class=" mt-3 mb-3 fw-bold">
                Địa Chỉ <br>
                    <input type="text" name="diachi" id=""value="<?=$dia_chi?>">

            </div>
            <div class=" mt-3 mb-3 fw-bold">
                Số Điện Thoại <br>
                    <input type="text" name="sdt" id=""value="<?=$sdt?>">
            </div>
            <div class=" mt-3 mb-3">
                <input type="hidden" name="id" value="<?=$id_kh?>">
                <input class="btn btn-outline-success" type="submit" name="capnhat" id="" value="Cập Nhật">
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
<div class="container">
             <?php
                
                if(isset($_SESSION['user'])){
                  extract($_SESSION['user']);
                  ?>
                 
              <div class="boxtitle text-center text-success mt-3 mb-3 h2 fw-bold">Xin Chào <?=$user?></div>
                 <div class="dangnhap  mt-3 mb-3 pt-5">
                 <div class="formtaikhoan">
                  <div class="user text-center fw-bold">
                     <li>
                      <a class="h5"  href="index.php?act=quenmk">Quên Mật Khẩu</a>
                    </li>
                     <li>
                      <a class="h5"  href="index.php?act=edit_tk">Chỉnh Sửa Thông Tin</a>
                    </li>
                   <?php if ($vai_tro==1){ ?>
                         <li>
                      <a class="h5" href="admin/index.php">Đăng Nhập Admin</a>
                    </li>
                    <?php } ?>
                    <li>
                      <a class="h5" href="index.php?act=thoat">Đăng Xuất</a>
                    </li>
                  </div>
                </div>
              <?php

                }else{

                ?>
                <div class="boxtitle text-center text-success mt-3 mb-3 h2 fw-bold">Đăng Nhập</div>
                 <div class="dangnhap  mt-3 mb-3 pt-3">
                 <div class="formtaikhoan">
        <form class="" action="index.php?act=dangnhap" method="post">
            <div class=" mt-3 mb-3 fw-bold">
                Tên Đăng Nhập <br>
                <input type="text" name="user" id="">
            </div>
            <div class=" mt-3 mb-3 fw-bold">
                Mật Khẩu <br>
                <input type="password" name="pass" id="">
            </div>
            <div class="d-flex gap-1 align-items-center">
                <input class="pl-3" type="checkbox" name="" id=""> Ghi Nhớ Tài Khoản?
            </div>
            <div class=" mt-3 mb-3">
                <input class="btn btn-outline-success" type="submit" name="dangnhap" id="" value="Đăng Nhập">
            </div>
        </form>
        <li><a  href="index.php?act=quenmk">Quên Mật Khẩu</a></li>
        <li><a href="index.php?act=dangki">ĐĂng Kí Tài Khoản Ngay</a></li>
        <?php

                }
        ?>
    </div>
</div>
</div>
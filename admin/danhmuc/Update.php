<?php
    if (is_array($dm)){
        extract($dm);
    }
?>
<div class="title">
    <div class="container-fluid title_gray h2 text-start bg-secondary text-white">
        Cập Nhật Loại Hàng Hóa
    </div>
    <div class="content container">
        <form class="container_nhap" action="index.php?act=updatedm" method="post">
            Mã Loại
            <input class="container-fluid" type="text" name="maloai" value="<?=$ma_dm?>" disabled> <br>
            Tên Loại
            <input class="container-fluid" type="text" name="tenloai" value="<?=$ten_loai?>"> <br> <br>
           <form action="">
             <input class="container-fluid" type="hidden" name="id" value="<?=$ma_dm?>" > <br>
            <input class="btn  btn-outline-success" type="submit" name="updatedm" value="Cập Nhật Mới">
            <input class="btn btn-outline-success" type="reset" value="Nhập Lại">
            <button type="button" class="btn btn-outline-success" onclick="location.href='index.php?act=listdm'">Danh Sách</button>
           </form>

            <?php
            if (isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
        </form>
    </div>
</div>

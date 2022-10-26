<?php
if (is_array($tk)){
    extract($tk);
}
?>
<div class="title">
    <style>
        img{
            width: 200px;
            height:200px;
        }
    </style>
    <div class="container-fluid title_gray h2 text-start bg-secondary text-white">
        Cập Nhật Hàng Hóa
    </div>
    <div class="content container">
        <form class="container_nhap" action="index.php?act=updatetk" method="post">
            Tên dăng nhập
            <input class="container-fluid" type="text" name="tendn" value="<?=$user?>"> <br> <br>
            Mật Khẩu
            <input class="container-fluid" type="text" name="mk" value="<?=$mat_khau?>"> <br> <br>
             Email
            <input class="container-fluid" type="text" name="email" value="<?=$email?>"> <br><br>
             Địa Chỉ
            <input class="container-fluid" type="text" name="diachi" value="<?=$dia_chi?>"> <br><br>
             Số Điện Thoại
            <input class="container-fluid" type="text" name="sdt" value="<?=$sdt?>"> <br><br>
             Vai Trò
            <input class="container-fluid" type="text" name="vaitro" value="<?=$vai_tro?>"> <br><br>
            <input class="container-fluid" type="hidden" name="idkh" value="<?=$id_kh?>"> <br>
            <input class="btn  btn-outline-success" type="submit" name="updatetk" value="Cập Nhật">
            <input class="btn btn-outline-success" type="reset" value="Nhập Lại">
            <button type="button" class="btn btn-outline-success" onclick="location.href='?act=dskh'">Danh Sách</button>

            <?php
            if (isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
        </form>
    </div>
</div>

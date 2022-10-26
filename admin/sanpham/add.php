

<div class="title">
    <div class="container-fluid title_gray h2 text-start bg-secondary text-white">
        Thêm Mới Sản Phẩm
    </div>
    <div class="content container">
        <form class="container_nhap" action="index.php?act=addsp" method="post" enctype="multipart/form-data">
            Mã Sản Phẩm <br>
            <input type="text" name="masp" value="auto number" disabled> <br> <br>
            Mã Loại <br>
            <select name="iddm" id="">
                <?php

                foreach ($listdmds as $listdm) {               
                    extract($listdm);
                    echo '<option value="'.$ma_dm.'">'.$ten_loai.'</option>';
                }
                ?>
            </select> <br> <br>
            Tên Sản Phẩm
            <input class="container-fluid" type="text" name="tensp"> <br> <br>
            Ảnh Sản Phẩm
            <input class="container-fluid" type="file" name="anhsp" > <br> <br>
            Mô tả
            <textarea class="#" name="mota"  cols="160" rows="5"></textarea> <br> <br>
            Giá Sản Phẩm
            <input class="container-fluid" type="text" name="giasp"> <br> <br>
            Mã Đặc Biệt
            <input class="container-fluid" type="text" name="madb"> <br> <br>
            <input class="btn  btn-outline-success" type="submit" name="addsp" value="Thêm Mới">
            <input class="btn btn-outline-success" type="reset" value="Nhập Lại">
            <button type="button" class="btn btn-outline-success" onclick="location.href='index.php?act=listsp'">Danh Sách</button>

            <?php
            if (isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
        </form>
    </div>
</div>
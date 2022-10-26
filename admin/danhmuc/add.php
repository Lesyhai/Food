
<div class="title">
    <div class="container-fuid title_gray h2 text-start bg-secondary text-white">
        Thêm Mới Loại Hàng
    </div>
    <div class="content container">
        <form   class="container_nhap" action="index.php?act=addl" method="post" enctype="multipart/form-data">
            Mã Danh Mục
            <input class="container-fluid" type="text" name="maloai" disabled> <br>
            Tên Danh Mục
            <input class="container-fluid" type="text" name="tendm"> <br> <br>
            <input class="btn  btn-outline-success" type="submit" name="add" value="Thêm Mới">
            <input class="btn btn-outline-success" type="reset" value="Nhập Lại">
            <button type="button" class="btn btn-outline-success" onclick="location.href='index.php?act=listdm'">Danh Sách</button>

            <?php
            if (isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
        </form>
    </div>
</div>
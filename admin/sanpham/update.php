<?php
if (is_array($sp)){
    extract($sp);
}
 $imgfile = "../upload/".$hinh_anh;
 if (is_file($imgfile)){
    $hinh = "<img  src='".$imgfile."' />";
 }else{
    $hinh = "Ko có hình ảnh hiển thị";
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
        <form class="container_nhap" action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            

               <select name="iddm" id="">
                <?php

                foreach ($listdmds as $listdm) {
                
                    extract($listdm);
                    if ($listdm == $ma_dm) $s = "selected"; else $s = "";
                    echo '<option value="'.$ma_dm.'" '.$s.'>'.$ten_loai.'</option>';
                }
                ?>
            </select> <br> <br>
            Tên Sản Phẩm
            <input class="container-fluid" type="text" name="tensp" value="<?=$ten_sp?>"> <br> <br>
            Ảnh Sản Phẩm
            <input class="container-fluid" type="file" name="anhsp" > <br> <br>
           <?=$hinh?><br>
            Mô tả
            <textarea class="#" name="mota"  cols="170" rows="5"> <?=$mo_ta?></textarea> <br> <br>
            Giá Sản Phẩm
            <input class="container-fluid" type="text" name="giasp" value="<?=$gia?>"> <br><br>
            <input class="container-fluid" type="text" name="madb" value="<?=$dac_biet?>"> <br><br>
            <input class="container-fluid" type="hidden" name="id" value="<?=$masp?>"> <br>
            <input class="btn  btn-outline-success" type="submit" name="updatesp" value="Cập Nhật">
            <input class="btn btn-outline-success" type="reset" value="Nhập Lại">
            <button type="button" class="btn btn-outline-success" onclick="location.href='?act=listsp'">Danh Sách</button>

            <?php
            if (isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
        </form>
    </div>
</div>

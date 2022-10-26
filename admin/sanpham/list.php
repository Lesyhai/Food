
<div class="title">
    <style>
        table tr th{
            padding: 20px;
            background-color: #007514;
            color: white;
        }
        table tr td {
            width: 300px;
            height: 100px;
            padding: 10px 5px;
            border: 1px solid gray;
            background-color: antiquewhite;
            font-weight: bold;
        }
        table tr td input[type=checkbox]{
            width: 20px;
            height: 20px;
        }
        table tr td input[type=button]{
            width: 70px;
            height: 30px;
            background-color: #26A69A;
            color: white;
            border: none;
        }
        
    </style>
    <div class="container-fluid title_gray h2 text-start bg-secondary text-white">
        Danh Sách Sản Phẩm
    </div>
    <div class="content container" >
        <form class="list mt-4 mb-4" action="index.php?act=listsp" method="post" >
            <input type="text" name="kyw">
            <select name="iddm" id="">
                <?php
                foreach ($listdmds as $listdm) {
                    extract($listdm);
                    echo '<option value="'.$ma_dm.'">'.$ten_loai.'</option>';
                }
                ?>
            </select> 
            <input type="submit" name="listname" value="OK">
        </form>
        <table class="container-fluid text-center" border="1">
            <tr >
                <th></th>
                <th>Mã Sản Phẩm</th>
                <th>Tên Sản Phẩm</th>
                <th>Ảnh</th>
                <th>Mô Tả</th>
                <th>Lượt Xem</th>
                <th>Giá</th>
                 <th>Loại</th>
                 <th>Đặc Biệt</th>
                <th></th>
            </tr>
            <?php
            foreach ($listsanpham as $sanpham ){
                extract($sanpham);
                $suasp = "index.php?act=suasp&id=".$masp;
                $xoasp = "index.php?act=xoasp&id=".$masp;

                echo  '<tr>
                <td><input type="checkbox" /></td>
                <td>'.$masp.'</td>
                <td>'.$ten_sp.'</td>
                <td>'.'<img style="width:100px; height:100px;"  src="../upload/'.$hinh_anh.'">'.'</td>
                <td>'.$mo_ta.'</td>
                <td>'.$soluotxem.'</td>
                <td>'.$gia.'</td>
                <td>'.$ma_dm.'</td>
                <td>'.$dac_biet.'</td>
                <td>
                 <a href="'.$suasp.'"> <input type="button" value="Sửa" /></a>
                     <a href="'.$xoasp.'"> <input type="button" value="Xóa" /></a>
                </td>
            </tr>';
            }
            ?>
        </table>
        <form action="">
            <input
                class="btn btn-outline-success mt-3"
                type="button"
                value="Chọn Tất Cả"
            />
            <input
                class="btn  btn-outline-success mt-3"
                type="button"
                value="Bỏ Chon Tất Cả"
            />
            <input
                class="btn btn-outline-success mt-3"
                type="button"
                value="Xóa Các Mục Đã Chọn"
            />
            <a href="index.php?act=addsp"
            ><input
                    class="btn btn-outline-success mt-3"
                    type="button"
                    value="Nhập thêm"
                /></a>
        </form>
    </div>
</div>

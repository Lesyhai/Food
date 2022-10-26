
<div class="title">
    <style>
        table tr th{
            padding: 20px;
            background-color: #007514;
            color: white;
        }
        table tr td {
            padding: 10px 0;
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
        Danh Sách Bình Luận
    </div>
    <div class="content container">
        <table class="container-fluid text-center" border="1">
            <tr >
                <th></th>
                <th>Mã Bình Luận</th>
                <th>Nội Dung</th>
                <th>Mã Khách Hàng</th>
                <th>Mã Loại hàng</th>
                <th>Ngày Bình Luận</th>
                <th></th>
            </tr>
            <?php
            foreach ($listbl as $sbl){
                extract($sbl);
                $xoabl = "index.php?act=xoabl&id=".$ma_bl;
                echo  '<tr>
                <td><input type="checkbox" /></td>
                <td>'.$ma_bl.'</td>
                <td>'.$noi_dung.'</td>
                <td>'.$ma_kh.'</td>
                <td>'.$idpro.'</td>
                <td>'.$ngay_bl.'</td>
                <td>
                     <a href="'.$xoabl.'"> <input type="button" value="Xóa" /></a>
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
        </form>
    </div>
</div>

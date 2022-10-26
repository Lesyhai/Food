
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
        Danh Sách Tài Khoản
    </div>
    <div class="content container">
        <table class="container-fluid text-center" border="1">
            <tr >
                <th></th>
                <th>Mã Tài Khoản</th>
                <th>Tên Đăng NHập</th>
                <th>Mật Khẩu</th>
                <th>Email</th>
                <th>Địa Chỉ</th>
                <th>Số Điện Thoại</th>
                <th>Vai Trò</th>
                <th></th>
            </tr>
            <?php
            foreach ($listtk as $stk){
                extract($stk);
                $suatk = "index.php?act=suatk&id=".$id_kh;
                $xoatk = "index.php?act=xoatk&id=".$id_kh;
                echo  '<tr>
                <td><input type="checkbox" /></td>
                <td>'.$id_kh.'</td>
                <td>'.$user.'</td>
                <td>'.$mat_khau.'</td>
                <td>'.$email.'</td>
                <td>'.$dia_chi.'</td>
                <td>'.$sdt.'</td>
                <td>'.$vai_tro.'</td>
                <td>
                 <a href="'.$suatk.'"> <input type="button" value="Sửa" /></a>
                     <a href="'.$xoatk.'"> <input type="button" value="Xóa" /></a>
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


<div class="title">
    <div class="container h2 text-start bg-secondary text-white">
        Danh Sách Loại Hàng
    </div>
    <div class="content container">
        <table class="container-fluid text-center" border="1">
            <tr >
                <th></th>
                <td>Mã Loại</td>
                <td>Tên Loại</td>
                <th></th>
            </tr>
            <?php
            foreach ($listdanhmuc as $danhmuc ){
                extract($danhmuc);
                echo  '<tr>
                <td><input type="checkbox" /></td>
                <td>'.$id.'</td>
                <td>'.$ten_loai.'</td>
                <td>
                    <input type="button" value=" Sửa" />
                    <input type="button" value="Xóa" />
                </td>
            </tr>';
            }
            ?>
        </table>
        <form action="">
            <input
                    class="btn btn-primary btn-outline-success mt-3"
                    type="button"
                    value="Chọn Tất Cả"
            />
            <input
                    class="btn btn-primary btn-outline-success mt-3"
                    type="button"
                    value="Bỏ Chon Tất Cả"
            />
            <input
                    class="btn btn-primary btn-outline-success mt-3"
                    type="button"
                    value="Xóa Các Mục Đã Chọn"
            />
            <a href="admin.html"
            ><input
                        class="btn btn-primary btn-outline-success mt-3"
                        type="button"
                        value="Nhập tdêm"
                /></a>
        </form>
    </div>
</div>

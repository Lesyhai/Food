
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
        Danh Sách Thống Kê Danh Mục
    </div>
    <div class="content container">
        <table class="container-fluid text-center" border="1">
            <tr >
                <th>Mã Danh Mục</th>
                <th>Tên danh Mục</th>
                <th>Số Lượng</th>
                <th>Giá Thấp Nhất</th>
                <th>Giá Cao Nhất</th>
                <th>Giá Trung Bình</th>
            </tr>
            <?php
            foreach ($listthongke as $thongke){
                extract($thongke);
                echo  '<tr>
                <td>'.$madm.'</td>
                <td>'.$tendm.'</td>
                <td>'.$countsp.'</td>
                <td>'.$mingia.'</td>
                <td>'.$maxgia.'</td>
                <td>'.$avggia.'</td>
            </tr>';
            }
            ?>
        </table>
        <form action="">
             <input
                    class="btn btn-outline-success mt-3"
                    type="button"
                    onclick="location.href='index.php?act=bieudo'"
                    value="Xem Biểu Đồ"
            />
        </form>
    </div>
</div>

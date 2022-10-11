<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Theem Danh Mục</title>
</head>
<body> -->
    <!-- menu  -->
    <!-- <div class="h1 text-start container">ADMIN</div>
    <nav class="navbar navbar-expand-lg bg-success fixed container">
      <div class="content_0"></div>
      <div class="container">
        <button 
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a
                class="nav-link active text-white"
                aria-current="page"
                href="index.php"
                >Trang Chủ</a
              >
            </li>
            <li>
              <a class="nav-link active text-white" href="index.php?act=adddm">Danh Mục</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="index.php?act=addsp"> Hàng Hóa </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="index.php?act=dskh">Khách Hàng</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="index.php?act=dsbl">Bình Luận</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="index.php?act=thongke">Thống Kê</a>
            </li>
          </ul>
        </div>
      </div>
    </nav> -->

    <!-- end menu  -->
    <div class="title">
      <div class="container h2 text-start bg-secondary text-white">
        Thêm Mới Loại Hàng Hóa
      </div>
      <div class="content container">
        <form action="index.php?act=adddm" method="post">
            Mã Loại
            <input class="container-fluid" type="text" name="maloai" disabled> <br>
            Tên Loại
            <input class="container-fluid" type="text" name="tenloai"> <br> <br>
            <input class="btn  btn-outline-success" type="submit" name="add" value="Thêm Mới">
            <input class="btn btn-outline-success" type="reset" value="Nhập Lại">
            <button type="button" class="btn btn-outline-success" onclick="location.href='?act=listdm'">Danh Sách</button>

            <?php 
                if (isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
        </form>
      </div>
    </div>
<!-- </body>
</html> -->
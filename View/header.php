<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>X-SHOP</title>
    <link rel="icon" href="./View/src/image/tealogo.png">
      <link rel="stylesheet" href="./View/src/css/style.css">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      type="text/css"
      media="screen"
      href="css/bootstrap.min.css"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
  </head>
  <body>
    <!-- top bar  -->
    <nav class="top_bar navbar navbar-expand-lg bg-light">
      <div class="content_top_bar container-fluid">
        <div class="logo_mid">
          <a class="text-decoration-none h2 text-success" href="index.php">X-<span class="h2 text-secondary">SHOP</span></a>
        </div>
        <div class="menu_top_bar">
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="icon_top_bar"><i class="bx bx-user"></i></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="icon">
              <i class="bx bxl-facebook"></i>
              <i class="bx bxl-twitter"></i>
              <i class="bx bxl-instagram"></i>
              <i class="bx bxl-google-plus"></i>
            </div>
            <ul class="navbar-nav me-3 mb-1">
              <li class="nav-item">
                <?php
                
                if(isset($_SESSION['user'])){
                    extract($_SESSION['user']);
                  ?>
                 
                 <div class=" btn_sn btn btn-outline-success "><a class="text-decoration-none" href="index.php?act=dangnhap"
                  ><?=$user?></a</div>
              <?php

                }else{

                ?>
                <div class=" btn_sn btn btn-outline-success "><a class="text-decoration-none" href="index.php?act=dangnhap"
                  >Đăng Nhập</a</div>
                      <?php  

                          }

                          ?>
              </li>
                 <button type="button" class=" btn_cart btn  btn-outline-success "> <a href="./View/viewcart.php" class="d-flex align-items-center text-decoration-none">
                <span>Giỏ Hàng</span><i class="bx bx-cart-alt"></i>
              </a></button>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!-- end top bar -->

    <!-- menu  -->

    <nav class="navbar navbar-expand-lg bg-success fixed">
      <div class="content_0"></div>
      <div class="container-fluid">
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
              <a class="nav-link active text-white" aria-current="page" href="index.php"
                >Trang Chủ</a
              >
            </li>
            <li>
              <a class="nav-link active text-white" href="index.php?act=gioithieu">Giới Thiệu</a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link text-white"
                href="index.php?act=sanpham"
              >
                Sản Phẩm
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="index.php?act=lienhe">Liên Hệ</a>
            </li>
          </ul>
        </div>
        <form class="srch d-flex" role="search">
          <input
            class="form_control me-2"
            type="search"
            placeholder="Search"
            aria-label="Search"
            required
          />
          <button class="btn_search" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <!-- end menu  -->

    <!-- banner silder  -->
    <div
      id="carouselExampleControls"
      class="carousel slide"
      data-bs-ride="carousel"
    >
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            src="./View/src/image/slideshow_1.jpg"
            class="d-block w-100"
            alt="..."
          />
        </div>
        <div class="carousel-item">
          <img
            src="./View/src/image/slideshow_2.jpg"
            class="d-block w-100"
            alt="..."
          />
        </div>
        <div class="carousel-item">
          <img
            src="./View/src/image/slideshow_3.jpg"
            class="d-block w-100"
            alt="..."
          />
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleControls"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleControls"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- end banner slider  -->
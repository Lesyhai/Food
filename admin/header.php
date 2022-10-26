<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
    <link rel="icon" href="../View/src/image/tealogo.png" />
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
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    />
    <link rel="stylesheet" href="../View/src/css/style.css" />
    
    <style>
      .bieudo_css{
          background: rgb(35,134,83);
        background: linear-gradient(90deg, rgba(35,134,83,1) 0%, rgba(0,115,73,0.8130602582830007) 100%, rgba(0,50,218,0.7038165608040091) 100%, rgba(0,101,121,0.8326681014202556) 100%);
        padding: 10px;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        border-radius: 10px;
        margin: 0 auto;
        margin-top: 30px;
        width:100%;
         max-width:1000px; 
        height:500px;
      }
      .content{
        background: rgb(35,134,83);
        background: linear-gradient(90deg, rgba(35,134,83,1) 0%, rgba(0,115,73,0.8130602582830007) 100%, rgba(0,50,218,0.7038165608040091) 100%, rgba(0,101,121,0.8326681014202556) 100%);
        padding: 10px;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        border-radius: 10px;
      }
       .container_nhap{
        color: white;
       }
      .container_nhap input[type=text],.container_nhap textarea,.container_nhap select{
        outline: none;
        border: none;
        border-bottom: 3px solid green;
        border-radius: 5px;
        padding-left: 5px;
      }
      .container_nhap select{
        width:200px;
        height:40px;
        border-radius: 5px;
      }
      .container_nhap select option{
         transition: .5s;
        
      }
      .container_nhap select option:hover{
        background-color: green;
        color: white;
          transition: .5s;
      }
      .list input[type="text"]{
        width:250px;
        height:40px;
        outline: none;
        padding-left: 5px;
        border-radius: 5px;
      }
      .list select{
        width:170px;
        height:40px;
        outline: none;
         border-radius: 5px;
      }
      .list input[type="submit"]{
          width:150px;
        height:40px;
         border-radius: 5px;
         color: green;
         transition: .5s;
      }
      .list input[type="submit"]:hover{
        background-color: green;
        color: white;
        transition: .5s;
      }
    </style>
  </head>
  <body>
    <!-- <div class="h1 pl-2 text-start container-fluid">ADMIN</div> -->
    <nav class="navbar navbar-expand-lg bg-success fixed container-fluid pl-1 pr-1">
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
              <a class="nav-link active text-white" href="index.php?act=listdm">Danh Mục</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="index.php?act=listsp"> Hàng Hóa </a>
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
    </nav>
    
  
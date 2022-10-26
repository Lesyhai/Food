<?php
    session_start();
    include "../../model/connect.php";
    include "../../model/binhluan.php";
    $idpro = $_REQUEST['idpro'];
    $dsbl = load_allbl($idpro);
?>

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
  <body?>
    <!-- coment  -->

        <div class="d-flex layout_cmt justify-content-center row">
      <div class="title h2 text-center text-success fw-bold">Nhận Xét Của khách Hàng</div>
        <div class="col-md-8">
            <div class="d-flex flex-column comment-section">
               <?php
                  if (isset($_SESSION['user'])){
                    $iduser = $_SESSION['user']['id_kh'];
                    ?>
                     <div class="p-2">
                    <div class="d-flex flex-row user-info">
                        <?php 

                            foreach ($dsbl as $bl){
                                extract($bl);
                                ?>
                        <div class="d-flex flex-column justify-content-start ml-2">
                            <span class="d-block font-weight-bold text-success h4"><i class='bx bxs-user' ></i><?php
                            
                            if ($ma_kh == 1){
                                echo "ADMIN";
                            }else {
                                 echo "USER";
                            }
                            
                            ?></span>
                        <span class="date text-black-50 h5"><?=$ngay_bl?></span></div>
                    </div>
                    <div class="mt-2">
                        <p class="comment-text"><?=$noi_dung?></p>
                        <?php

                            }

                            ?>
                    </div>
                </div>
               
                <form action="<?=$_SERVER['PHP_SELF'];?>" method="post" class="b_l p-2">
                    <input type="hidden" name="idpro" value="<?=$idpro?>">
                    <input type="text" name="noidung" class="msg w-100 rounded border border-success" style="height:70px; padding-left:10px; outline:none;" placeholder="Nhập Bình Luận Của Bạn"> <br> <br>
                    <input class="btn btn-outline-success float-end" type="submit" name="guibl" value="Gửi Bình Luận">
                </form>
                 <?php
                  }else{
               ?>

                       <div class=" btn_sn btn btn-outline-success text-center "><a class="text-decoration-none" href="index.php?act=dangnhap"
                  >Đăng Nhập Để Bình Luận</a</div>


                  <?php 

                  }

                  ?>
            </div>
            <?php

                if (isset($_POST['guibl'])&&($_POST['guibl'])){
                    $noidung = $_POST['noidung'];
                    $idpro = $_POST['idpro'];
                    $tenkh = $_POST['tenkh'];
                    $makh = $_SESSION['user']['id_kh'];
                    date_default_timezone_set ('Asia/Ho_Chi_Minh').
                    $ngaybl = date('h:i:sa d-m-Y');
                    insert_bl($noidung,$makh,$idpro,$ngaybl);
                    echo "<script>window.location.href='".$_SERVER['HTTP_REFERER']."';</script>";
                }

            ?>
        </div>
    </div>

</body>
</html>
    <!-- end coment  -->
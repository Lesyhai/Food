    <h2 class="text-center mt-5 fw-bold text-success">CHI TIẾT SẢN PHẨM</h2>
        <!-- Product section-->

        <?php 
        
          extract($onesp);

        ?>
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                  <?php 
                    $img = $img_path.$hinh_anh;
                    echo '<div class="col-md-6"><img class="img_ct mb-5 mb-md-0" src="'.$img.'" alt="..." /></div>
                    <div class="col-md-6">
                        <h1 class="display-5 fw-bolder">'.$ten_sp.'</h1>
                        <div class="fs-5 mb-5">
                            <span>'.$gia.'₫</span>
                        </div>
                        <p>'.$mo_ta.'</p>
                        <div class="d-flex">
                            <input class="form-control border-success text-success text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                            <button class="btn btn-outline-success flex-shrink-0" type="button">
                                <i class="bi-cart-fill me-1"></i>
                                Thêm Vào Giỏ Hàng
                            </button>
                        </div>
                    </div>';
                    ?>
                </div>
            </div>
        </section>

    <!-- end product details  -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
        $("#binhluan").load("View/Binhluan/binhluan.php", {idpro: <?=$masp?>});
    });
    </script>

      <div id="binhluan" class=" mt-5">
      </div>

    <!-- product others  -->

    <section class="section-products">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-md-8 col-lg-6">
            <div class="header">
              <h2>Sản Phẩm Tương Tự</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <?php
          $i = 0;
          foreach ($sp_cung_loai as $spcl) {
              extract($spcl);
               $hinh = $img_path.$hinh_anh;
               $linksp = "index.php?act=sanphamct&idsp=".$masp;
                if (($i==2)||($i==5)||($i==8)){
            $mr ="";
        }else{
           $mr ="mr";
        }
              echo '<div class="col-md-3 '.$mr.'">
          <div class="ibox">
            <div class="ibox-content product-box">
              <div class="product-imitation">
                <img class="img-fluid" src="'.$hinh.'" alt="" />
              </div>
              <div class="product-desc">
                <a href="'.$linksp.'" class="product-name text-decoration-none">'.$ten_sp.'</a>
                <div class="small m-t-xs">
                  Giá '.$gia.'₫
                </div>
                <div class="m-t text-righ">
                  <a href="'.$linksp.'" class="btn btn-outline-success"
                    >Mua Ngay
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>';
          }                   
          ?>
          <!-- Single Product -->
         
        </div>
      </div>
    </section>
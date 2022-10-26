    <!-- product banner  -->
    <div class="container-fluid banner_product">
      <div class="row align-items-center">
        <div class="text_home col-12 col-md-6 text">
          <h2>Nghi Thức Trà Đạo</h2>
          <p>
            Nghi thức trà đạo (Cha no Yu ) chính là nghi thức pha trà, thực hiện
            từ bước chuẩn bị đến bước pha trà với bộ trà cụ trước mặt các vị
            khách trong gian phòng gọi là trà thất (Chashitsu). Những bước pha
            trà được gọi là temae. Nghe có vẻ đơn giản nhưng thực sự ẩn chứa
            nhiều ý nghĩa sâu xa.
          </p>
        </div>
        <div class="col-12 col-md-6">
          <img src="./View/src/image/home_banner_1.jpg" width="100%" alt="" />
        </div>
      </div>
    </div>
    <!-- end product banner  -->

    <!-- product content -->
    <div class="container">
      <div class="title">
        <h2 class="text-center">Top 10 Sản Phẩm</h2>
      </div>
      <div class="row">
           <?php
        $i = 0;
      foreach ($listtop10 as $sptop10){
        extract($sptop10);
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
                  <a href="'.$linksp.'" class="btn btn btn-outline-success"
                    >Mua Ngay</i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>';
        $i += 1;
      }
        ?>
        </div>
    </div>

    <!-- end product content  -->

    <!-- slogan  -->

    <div class="slogan container-fluid text-center">
      <i
        >"Nếu người đàn ông không uống trà, anh ấy không thể cảm nhận được sự
        thật và cái đẹp."</i
      >
      <p>~ Japanese Proverb ~</p>
    </div>

    <!-- end slogan  -->

    <div class="banner_bottom position-relative align-items-center">
        <img class="" width="100%" src="./View/src/image/coctra.jpg" alt="" />
      <div class="text_button_bottom position-absolute top-50 end-0 translate-middle">
        <p class="text-white h2">Trà Vệt Nam Chất Lượng</p>
        <button class="btn btn-outline-success position-absolute end-0">
          Xem Thêm
        </button>
      </div>
    </div>

    <div class="feedback container row mt-5 mx-auto">
      <div class="col-12 col-lg-6">
        <h2>Khách Hàng Nói Về Chúng Tôi</h2>
        <hr />
        <p>
          Web này tiện lợi ghê !! có đầy nhiều loại trà vừa thơm lại vừa tốt cho
          sức khỏe. Dụng cụ trà lại đầy đủ. Mua hàng lại được hướng dẫn đầy đủ
          về cách pha trà cũng như cách thưởng thức...... Cảm ơn <a class="text-decoration-none fw-bold text-success">X-<span class="text-secondary">SHOP</span></a> nhé!
        </p>
        <span>— Cao Trọng Tấn</span>
        <p>
          Trà ở đây thơm qua Hôm qua mình đi uống thử 1 lần mà nghiện luôn. Chịu
          khó dẫn bạn qua đó thưởng thức mới được.
        </p>
        <span>— Nguyễn Thanh Mai</span>
        <p>
          Mấy bạn pha trà khéo ghê. Cách pha cũng hay nữa. Phải chịu khó qua đó
          để học cách pha mới được. :)))
        </p>
        <span>— Khánh Linh</span>
      </div>
      <div class="col-sm-12 col-lg-6">
        <iframe
          width="100%"
          height="390"
          src="https://www.youtube.com/embed/7DK-3OSdhIQ"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
        ></iframe>
      </div>
    </div>

      <div class="container">
      <div class="title">
        <h2 class="text-center">Sản Phẩm Đặc Biệt</h2>
      </div>
      <div class="row">
           <?php
        $i = 0;
      foreach ($listdb as $dacbiet){
        extract($dacbiet);
        $hinh = $img_path.$hinh_anh;
        $linksp = "index.php?act=sanphamct&idsp=".$masp;
        if (($i==2)||($i==5)||($i==8)){
            $mr ="";
        }else{
           $mr ="mr";
        }
        if ($dac_biet == "1"){
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
              </div>
            </div>
          </div>
        </div>';
        $i += 1;
      }
        }
        ?>
        </div>
    </div>
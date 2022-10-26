<div class="container-fluid ">
  <nav class="navbar navbar-expand-sm navbar-light bg-white border-bottom ">
    <a class="navbar-brand ml-2 font-weight-bold" href="#"><span id="burgundy">X-</span><span id="orange">SHOP</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor" aria-controls="navbarColor" aria-expanded="false" aria-label="Toggle navigation"> 
        <span class="navbar-toggler-icon"></span> 
    </button>
    <div class="collapse navbar-collapse" id="navbarColor">
        <ul class="navbar-nav">
            <li class="nav-item rounded bg-light search-nav-item">
                <form class="d-flex " action="index.php?act=sanpham" method="post">
                <input type="text" id="search" class="bg-light" placeholder="Tìm Kiếm Sản Phẩm" name="nhapsp">
                <input class="btn btn-outline-success" type="submit" name="timkiemsp" value="Tìm Kiếm">
                </form>
                </li>             
        </ul>        
    </div>    
</nav>
 <div id="mobile-filter">
    <p class="pl-sm-0 pl-2"> Home | <b> Sản Phẩm </b></p>
    <div class="border-bottom pb-2 ml-2">
        <h4 id="burgundy">Bộ Lọc</h4>
    </div>
    <div class="py-2 border-bottom ml-3">
        <h6 class="font-weight-bold">Thể Loại</h6>
        <div id="orange"><span class="fa fa-minus"></span></div>
        <form>
            <?php
            
            foreach ($dsdm as $dm) {
                extract($dm);
                $linkdm = "index.php?act=sanpham&iddm=".$ma_dm;
                echo '<div class="form-group">
                     <a class="text-decoration-none text-success" href="'.$linkdm.'"><lable>'.$ten_loai.'<lable></a>
                    </div>';
            }
            ?>
        </form>
    </div>

</div>
<!-- Sidebar filter section -->

<section id="sidebar">
    <p> Trang Chủ | <b>Tất Cả Sản Phẩm</b></p>
    <div class="border-bottom pb-2 ml-2">
        <h4 id="burgundy">Bộ Lọc Sản Phẩm</h4>
    </div>
    <div class="py-2 border-bottom ml-3">
        <h6 class="font-weight-bold">Danh Mục</h6>
        <div id="orange"><span class="fa fa-minus"></span></div>
        <form>
            <?php
            
            foreach ($dsdm as $dm) {
                extract($dm);
                $linkdm = "index.php?act=sanpham&iddm=".$ma_dm;
                echo '<div class="form-group">
                <a class="text-decoration-none text-success" href="'.$linkdm.'"><lable>'.$ten_loai.'<lable></a>
            </div>';
            }
            ?>
        </form>
    </div>
</section> 
<!-- products section -->
<section id="products">
    <div class="container">
        <div class="row">
         <?php
        $i = 0;
      foreach ($dssp as $sp){
        extract($sp);
        $hinh = $img_path.$hinh_anh;
        $linksp = "index.php?act=sanphamct&idsp=".$masp;
        if (($i==2)||($i==5)||($i==8)||($i==11)){
            $mr ="";
        }else{
           $mr ="mr";
        }
        echo '<div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1 mb-2">
                <div class="card">
                    <img class="card-img-top" src="'.$hinh.'">
                    <div class="card-body">
                        <h5><b><a href="'.$linksp.'" class="product-name text-decoration-none">'.$ten_sp.'</a></b> </h5>
                        <div class="d-flex flex-row my-2">
                            <div class="text-muted">'.$gia.'₫</div>
                           
                        </div> 
                        <button class="btn btn-success  w-100 rounded ">Mua Ngay</button>      
                    </div>
                </div>
            </div>';
        $i += 1;
      }
        ?>
        </div>
    </div>    
</section>
</div>

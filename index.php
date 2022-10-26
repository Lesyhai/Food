<?php
    session_start();
    include "View/header.php";
    include "model/connect.php";
    include "model/danhmuc.php";
    include "model/sanpham.php";
    include "model/taikhoan.php";
    include "global.php";

    $listdb =load_allsp_db();
    $spnew = load_allsp_home();
    $dsdm = load_alldm();
    $listtop10 =load_allsp_top10();
    if ((isset($_GET['act']))&&($_GET['act']!="")){
        $act = $_GET['act'];
        switch ($act){
        case 'sanpham':
            if (isset($_POST['nhapsp'])){
                $nhap = $_POST['nhapsp'];
            }else{
                $nhap = "";
            }
            if (isset($_GET['iddm'])&&($_GET['iddm']>0)){
                    $iddm = $_GET['iddm'];
            }else{
                     $iddm = 0;
            }
            $dssp = load_allsp($nhap,$iddm);
            include "View/sanpham.php";
             break;
        case 'sanphamct':
            if (isset($_GET['idsp'])&&($_GET['idsp']>0)){
                $id = $_GET['idsp'];
                $onesp = loadonesp($id);
                extract($onesp);
                $sp_cung_loai = load_sp_cl($id,$ma_dm);
                include "View/sanphamct.php";
            }else{
                 include "View/home.php";
            }
             break;
        case 'gioithieu':
             include "View/gioithieu.php";
             break;
             
         case 'dangnhap':
            if (isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser = checkuser($user,$pass);
                if (is_array($checkuser)){
                    $_SESSION['user'] = $checkuser;
                    echo "<script>alert('Đăng Nhập Thành Công!');</script>";
                    echo "<script>window.location.href='index.php';</script>";
                }else{
                    echo "<script>alert('Đăng Nhập Không Thành Công!');</script>";
                }
            }
             include "View/dangnhap.php";
             break;
        case 'edit_tk':
            if (isset($_POST['capnhat'])&&($_POST['capnhat'])){
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $diachi = $_POST['diachi'];
                $sdt = $_POST['sdt'];
                $id= $_POST['id'];
              update_tk($id,$user,$pass,$email,$diachi,$sdt);
              echo "<script>window.location.href='index.php';</script>";
              echo "<script>alert('Sửa Tài Khoản Thành Công!');</script>";
            }
             include "View/Taikhoan/edit_tk.php";
             break;
        case 'dangki':
            if (isset($_POST['dangki'])&&($_POST['dangki'])){
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                insert_tk($email,$user,$pass);
                echo "<script>alert('Đăng Kí Thành Công!');</script>";
                echo "<script>window.location.href='index.php';</script>";
            }
             include "View/Taikhoan/dangki.php";
             break;
        case 'quenmk':
             if (isset($_POST['quenmk'])&&($_POST['quenmk'])){
                $email = $_POST['email'];
                $checkemail = checkemail($email);
                if (is_array($checkemail)){
                    $thongbao="Mật Khẩu Của Bạn Là: ".$checkemail['mat_khau'];
                }else{
                    $thongbao="Email này không tồn tại!";
                }
            }
            include "View/Taikhoan/quenmk.php";
             break;
        case 'thoat':
            session_unset();
            echo "<script>window.location.href='index.php';</script>";
            break; 
        case 'lienhe':
             include "View/lienhe.php";
             break;
        default:
            include "View/home.php";
            break;
        }
    }else{
        include "View/home.php";
    }
    include "View/footer.php";

?>
<?php
    include "./header.php";
    include "../model/connect.php";
    include "../model/danhmuc.php";
    include "../model/taikhoan.php";
    include "../model/binhluan.php";
    include "../model/thongke.php";
    include "../model/sanpham.php";
    // Controller
    if (isset($_GET['act'])){
        $act = $_GET['act'];
        switch ($act){
            case 'addl':
                if (isset($_POST['add']) && ($_POST['add'])){
                    $tenloai = $_POST['tendm'];
                    insert_danhmuc($tenloai);
                    $thongbao="Thêm Thành Công";
                }
                include "danhmuc/add.php";
                break;
            case 'listdm':
                $listdmds = load_alldm();
                include "danhmuc/list.php";
                break;
            case 'xoadm':
                if (isset($_GET['id'])&&($_GET['id']>0)){
                    delete_dm($_GET['id']);
                }
               $listdmds = load_alldm();
                include "danhmuc/list.php";
                break;
            case 'suadm':
                if (isset($_GET['id'])&&($_GET['id']>0)){
                    $dm = loadone($_GET['id']);
                }
                include "danhmuc/Update.php";
                break;
            case 'updatedm':
                if (isset($_POST['updatedm']) && ($_POST['updatedm'])){
                    $tenloai = $_POST['tenloai'];
                    $maloai = $_POST['id'];
                    update_danhmuc($maloai,$tenloai);
                    $thongbao="Cập Nhật Thành Công";
                }
                $listdmds = load_alldm();
                include "danhmuc/list.php";
                break;

                /* Sản Phẩm */

            case 'addsp':
                if (isset($_POST['addsp']) && ($_POST['addsp'])){
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    $mota = $_POST['mota'];
                    $madb = $_POST['madb'];
                    $anhsp = $_FILES['anhsp']["name"];
                    $target = "../upload/";
                    $target_file = $target . basename($_FILES['anhsp']['name']);
                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                    // Check if image file is a actual image or fake image
                    if(isset($_POST["addsp"])) {
                    $check = getimagesize($_FILES["anhsp"]["tmp_name"]);
                    if($check !== false) {
                        move_uploaded_file($_FILES["anhsp"]["tmp_name"],$target_file);
                        // echo "File is an image - " . $check["mime"] . ".";
                    } else {
                        // echo "File is not an image.";
                    }
                    insert_sp(null,$tensp,$anhsp,$mota,$giasp,$iddm,$madb);
                    $thongbao="Thêm Thành Công";
                    }
                }
                $listdmds = load_alldm();
                include "./sanpham/add.php";
                break;
            case 'listsp':
                if (isset($_POST['listname']) && ($_POST['listname'])){
                    $kyw = $_POST['kyw'];
                    $iddm = $_POST['iddm'];
                }else{
                    $kyw = '';
                    $iddm = 0;
                }
                $listdmds = load_alldm();
                $listsanpham =  load_allsp($kyw,$iddm);
                include "sanpham/list.php";
                break;
            case 'xoasp':
                if (isset($_GET['id'])&&($_GET['id']>0)){
                    delete_sp($_GET['id']);
                }
               $listsanpham =  load_allsp("",0);
                include "sanpham/list.php";
                break;
            case 'suasp':
                if (isset($_GET['id'])&&($_GET['id']>0)){
                    $sp = loadonesp($_GET['id']);
                }
                $listdmds = load_alldm();
                include "sanpham/update.php";
                break;
            case 'updatesp':
                if (isset($_POST['updatesp']) && ($_POST['updatesp'])){
                    $masp = $_POST['id'];
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    $mota = $_POST['mota'];
                    $madb = $_POST['madb'];
                    $anhsp = $_FILES['anhsp']["name"];
                    $target = "../upload/";
                    $target_file = $target . basename($_FILES['anhsp']['name']);
                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                     move_uploaded_file($_FILES["anhsp"]["tmp_name"],$target_file);
 
                        update_sp($masp,$tensp,$anhsp,$mota,$giasp,$iddm,$madb);
                        $thongbao="Thêm Thành Công";
                    }
                $listdmds = load_alldm();
             $listsanpham =  load_allsp("",0);
                include "sanpham/list.php";
                break;

            // Khach Hang

            case 'dskh':
                $listtk = load_alltk();
                include "Taikhoan/list.php";
                break;
            case 'xoatk':
                if (isset($_GET['id'])&&($_GET['id']>0)){
                    delete_tk($_GET['id']);
                }
               $listtk = load_alltk();
                include "Taikhoan/list.php";
                break;
            case 'suatk':
                if (isset($_GET['id'])&&($_GET['id']>0)){
                    $tk = loadone_tk($_GET['id']);
                }
                $listdmds = load_alltk();
                include "Taikhoan/update.php";
                break;
            case 'updatetk':
                if (isset($_POST['updatetk']) && ($_POST['updatetk'])){
                    $makh = $_POST['idkh'];
                    $tendn = $_POST['tendn'];
                    $mk = $_POST['mk'];
                    $email = $_POST['email'];
                    $diachi= $_POST['diachi'];
                    $sdt = $_POST['sdt'];
                    $vaitro = $_POST['vaitro'];
                        updateone_tk($makh,$tendn,$mk,$email,$diachi,$sdt,$vaitro);
                        $thongbao="Thêm Thành Công";
                }
                $listtk = load_alltk();
                include "Taikhoan/list.php";
                break;

                // Binh Luan

                case 'dsbl':
                $listbl = load_allbl(0);
                include "binhluan/list.php";
                break;
                
                case 'xoabl':
                if (isset($_GET['id'])&&($_GET['id']>0)){
                    delete_bl($_GET['id']);
                }
               $listbl = load_allbl(0);
                include "binhluan/list.php";
                break;

                // Thong Ke

                 case 'thongke':
                    $listthongke = load_allthongke();
                    include "thongke/list.php";
                    break;

                 case 'bieudo':
                    $listthongke = load_allthongke();
                    include "thongke/bieudo.php";
                    break;


            default:
                include "main.php";
                break;
            }
    }else{
        include "main.php";
    }
    include "footer.php";
?>
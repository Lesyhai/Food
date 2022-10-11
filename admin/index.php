<?php
    include "../model/connect.php";
    
    include "header.php";
    if (isset($_GET['act'])){
        $act =$_GET['act'];
        switch ($act){
            case 'adddm':
                if (isset($_POST['add']) && ($_POST['add'])){
                    $ten_loai = $_POST['tenloai'];
                    $sql = "INSERT INTO categories(ten_loai) VALUES ('$ten_loai')";
                    pdo_execute($sql);
                    $thongbao="Thêm Thành Công";
                }
                include "danhmuc/add.php";
                break;
            case 'listdm':
                $sql = "SELECT * FROM categories ";
                $listdanhmuc = pdo_query($sql);
                include "danhmuc/list.php";
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
<?php

    include_once ("connect.php");
    // Sản Phẩm

    function insert_sp($masp,$tensp,$anhsp,$mota,$giasp,$iddm,$madb){
    $sql = "INSERT INTO sanpham(masp,ten_sp,hinh_anh,mo_ta,gia,ma_dm,dac_biet) VALUES (null,'$tensp','$anhsp','$mota','$giasp','$iddm','$madb')";
    pdo_execute($sql);
    }

    function delete_sp($id){
    $sql = "DELETE FROM sanpham WHERE masp=".$id;
    pdo_execute($sql);
    }

    function load_allsp_db(){
    $sql = "SELECT * FROM sanpham WHERE 1 ORDER BY dac_biet DESC LIMIT 0,10";
    $listdb = pdo_query($sql);
    return  $listdb;
    }

    function load_allsp_top10(){
    $sql = "SELECT * FROM sanpham WHERE 1 ORDER BY soluotxem DESC LIMIT 0,10";
    $listssptop10 = pdo_query($sql);
    return  $listssptop10;
    }
      function load_allsp_home(){
    $sql = "SELECT * FROM sanpham WHERE 1 ORDER BY masp DESC LIMIT 0,9";
    $listsphome = pdo_query($sql);
    return $listsphome;
    }

    function load_allsp($kyw,$iddm){
    $sql = "SELECT * FROM sanpham WHERE 1";
    if ($kyw != ""){
        $sql.= " AND ten_sp LIKE '%".$kyw."%'";
    }
    if ($iddm > 0){
        $sql.= " AND ma_dm LIKE '".$iddm."'";
    }
    $sql.= " ORDER BY masp DESC";
    $listsp = pdo_query($sql);
    return $listsp;
    }

    function loadonesp($id){

    $sql = "SELECT * FROM sanpham WHERE masp=".$id;
    $sp = pdo_query_one($sql);
    return $sp;
    }

     function load_sp_cl($id,$iddm){
    $sql = "SELECT * FROM sanpham WHERE ma_dm=".$iddm." AND masp<>".$id;
    $sp =  pdo_query($sql);
    return $sp;
    }

    function update_sp($masp,$tensp,$anhsp,$mota,$giasp,$iddm,$madb){
    if ($anhsp != ""){
    $sql = "UPDATE `sanpham` SET `ten_sp` = '$tensp',`hinh_anh` = '$anhsp',`mo_ta` = '$mota',`gia` = '$giasp',`ma_dm` = '$iddm' WHERE masp=".$masp;
    }else{
        $sql = "UPDATE `sanpham` SET `ten_sp` = '$tensp',`mo_ta` = '$mota',`gia` = '$giasp',`ma_dm` = '$iddm',`dac_biet` = '$madb' WHERE masp=".$masp;
    }
    pdo_execute($sql);
    }
 ?>
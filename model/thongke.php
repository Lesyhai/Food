<?php

   function load_allthongke(){
        $sql = "SELECT categories.ma_dm as madm, categories.ten_loai as tendm, count(sanpham.masp) as countsp, min(sanpham.gia) as mingia, max(sanpham.gia) as maxgia,avg(sanpham.gia) as avggia";
        $sql.= " FROM sanpham left join categories on categories.ma_dm=sanpham.ma_dm";
        $sql.= " GROUP BY categories.ma_dm ORDER BY categories.ma_dm DESC";
        $listthongke = pdo_query($sql);
        return $listthongke;
    }

?>
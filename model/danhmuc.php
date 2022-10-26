<?php
//danh mục
    include_once ("connect.php");
    function insert_danhmuc($tenloai){
        $sql = "INSERT INTO categories(ten_loai) VALUES ('$tenloai')";
        pdo_execute($sql);
    }

    function delete_dm($id){
        $sql = "DELETE FROM categories WHERE ma_dm=".$id;
        pdo_execute($sql);
    }

    function load_alldm(){
        $sql = "SELECT * FROM categories ORDER BY ma_dm DESC";
        $listdm = pdo_query($sql);
        return $listdm;
    }
    function loadone($id){

        $sql = "SELECT * FROM categories WHERE ma_dm=".$id;
        $dm = pdo_query_one($sql);
        return $dm;
    }

    function update_danhmuc($maloai,$tenloai){
        $sql = "UPDATE categories SET ten_loai = '".$tenloai."' WHERE ma_dm=".$maloai;
        pdo_execute($sql);
    }

?>
<?php
   function load_alltk(){
        $sql = "SELECT * FROM tai_khoan ORDER BY id_kh DESC";
        $listtk = pdo_query($sql);
        return $listtk;
    }
  function insert_tk($email,$user,$mat_khau){
    $sql = "INSERT INTO tai_khoan(email,user,mat_khau) VALUES ('$email','$user','$mat_khau')";
    pdo_execute($sql);
    }
  function checkuser($user,$pass){

    $sql = "SELECT * FROM tai_khoan WHERE user='".$user."' AND mat_khau='".$pass."'";
    $sp = pdo_query_one($sql);
    return $sp;
    }
  function checkemail($email){

    $sql = "SELECT * FROM tai_khoan WHERE email='".$email."'";
    $sp = pdo_query_one($sql);
    return $sp;
    }
  function update_tk($id,$user,$pass,$email,$diachi,$sdt){
    
    $sql = "UPDATE tai_khoan SET user='".$user."',mat_khau='".$pass."',email='".$email."',dia_chi='".$diachi."',sdt='".$sdt."' WHERE id_kh=".$id;
    pdo_execute($sql);
  }
    function delete_tk($id){
        $sql = "DELETE FROM tai_khoan WHERE id_kh=".$id;
        pdo_execute($sql);
    }
    function loadone_tk($id){
        $sql = "SELECT * FROM tai_khoan WHERE id_kh=".$id;
        $tk = pdo_query_one($sql);
        return $tk;
    }
     function updateone_tk($id,$user,$pass,$email,$diachi,$sdt,$vaitro){
    
    $sql = "UPDATE tai_khoan SET user='".$user."',mat_khau='".$pass."',email='".$email."',dia_chi='".$diachi."',sdt='".$sdt."',vai_tro='".$vaitro."'  WHERE id_kh=".$id;
    pdo_execute($sql);
  }
?>
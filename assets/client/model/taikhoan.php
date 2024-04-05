<?php
function insert_taikhoan($email,$user,$pass,$hoten_user,$address,$tel){
    $sql = "INSERT INTO taikhoan(email,user,pass,hoten_user,address,tel) VALUES ('$email','$user','$pass','$hoten_user','$address','$tel')";
    pdo_execute($sql);
}
function check_user($user,$pass){
    $sql = "SELECT * from taikhoan where user='".$user."' AND pass='".$pass."'";
    $sp =pdo_query_one($sql);
    return $sp;
}
function update_taikhoan($id,$hoten_user,$address){
    $sql = "UPDATE  taikhoan set hoten_user='".$hoten_user."',address='".$address."' where id=".$id;
    pdo_execute($sql);
}
function update_taikhoan_admin($id,$user,$hoten_user,$pass,$email,$address,$tel,$role){
    $sql = "UPDATE  taikhoan set user='".$user."', hoten_user='".$hoten_user."', pass='".$pass."',email='".$email."',address='".$address."',tel='".$tel."',role='".$role."' where id=".$id;
    pdo_execute($sql);
}
function check_email($email){
    $sql = "SELECT * from taikhoan where email='".$email."'";
    $sp =pdo_query_one($sql);
    return $sp;
}
function loadall_taikhoan(){
    $sql ="SELECT * FROM taikhoan ORDER BY id desc";
    $listtaikhoan=pdo_query($sql);
    return $listtaikhoan;
}
function loadone_tk($id){
    $sql = "SELECT * from taikhoan where id=".$id;
    $tk =pdo_query_one($sql);
    return $tk;
}
function delete_taikhoan($id){
    $sql = "DELETE from taikhoan where id=".$id;
    pdo_execute($sql);
}
function insert_billcheck($hoten_user,$email,$address,$tel,$idbill,$ptthanhtoan,$ptvanchuyen,$soluongsp,$tonggiadonhang){
    $sql = "INSERT INTO billcheck(hoten_user,email,address,tel,id_hoadon,ptthanhtoan,ptvanchuyen,soluongsp,tonggiadonhang) VALUES ('$hoten_user','$email','$address','$tel','$idbill','$ptthanhtoan','$ptvanchuyen','$soluongsp','$tonggiadonhang')";
    pdo_execute($sql);
}
function loadone_billcheck($id){
    $sql = "SELECT * from billcheck where id=".$id;
    $loadbill = pdo_query_one($sql);
    return $loadbill;
}
function loadall_billcheck_user($tel){
    $sql = "SELECT * FROM billcheck where tel=".$tel;
    $idtheobill = pdo_query($sql);
    return $idtheobill;
}
?>
<?php
function insert_anhsp($idsp,$hinh){
    $sql = "INSERT INTO anhsp(idsp,img_sp) VALUES ('$idsp','$hinh')";
    pdo_execute($sql);
}
function load_anhsp_cungsp($idsp){
    $sql = "SELECT * from anhsp where idsp=".$idsp."";
    $listanh=pdo_query($sql);
    return $listanh;
}
function insert_hoadon($hoten_user,$email,$address,$tel){
    $sql = "INSERT INTO hoadon(hoten_user,email,address,tel) VALUES ('$hoten_user','$email','$address','$tel')";
    pdo_execute($sql);
}
?>
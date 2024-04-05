<?php

function insert_danhmuc($tenloai,$hinh){
    $sql = "INSERT INTO danhmuc(name,img_danhmuc) VALUES ('$tenloai','$hinh')";
    pdo_execute($sql);
}
function delete_danhmuc($id){
    $sql = "DELETE from danhmuc where id=".$id;
    pdo_execute($sql);
}
function loadall_danhmuc(){
    $sql ="SELECT * FROM danhmuc ORDER BY id asc";
    $listdanhmuc=pdo_query($sql);
    return $listdanhmuc;
}
function loadone_danhmuc($id){
    $sql = "SELECT * from danhmuc where id=".$id;
    $dm =pdo_query_one($sql);
    return $dm;
}
function update_danhmuc($id,$tenloai,$hinh){
    if($hinh!="")
    $sql = "UPDATE  danhmuc set name='".$tenloai."',img_danhmuc='".$hinh."' where id=".$id;
    else
    $sql = "UPDATE  danhmuc set name='".$tenloai."' where id=".$id;
    pdo_execute($sql);
}
?>
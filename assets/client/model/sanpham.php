<?php

function insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm){
    $sql = "INSERT INTO sanpham(name,price,img,mota,iddanhmuc) VALUES ('$tensp','$giasp','$hinh','$mota','$iddm')";
    pdo_execute($sql);
}
function delete_sanpham($id){
    $sql = "DELETE from sanpham where id=".$id;
    pdo_execute($sql);
}
function loadall_sanpham_home(){
    $sql ="SELECT * FROM sanpham where 1 ORDER BY id desc limit 0,5";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_yeuthich(){
    $sql ="SELECT * FROM sanpham where 1 ORDER BY luotxem desc limit 0,4";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham($kyw,$iddm){
    $sql ="SELECT * FROM sanpham where 1";
    if($kyw!=""){
        $sql.=" and name like '%".$kyw."%'";
    }
    if($iddm>0){
        $sql.=" and iddanhmuc ='".$iddm."'";
    }
    $sql.=" ORDER BY id asc";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_kw($kyw){
    $sql ="SELECT * FROM sanpham where 1";
        $sql.=" and name like '%".$kyw."%'";
    $sql.=" ORDER BY id desc";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_danhmuc($iddm){
    $sql ="SELECT * FROM sanpham where 1";
    $sql.=" and iddanhmuc ='".$iddm."'";
    $sql.=" ORDER BY id desc";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadone_sanphamCart($idList){
    $sql ='SELECT * FROM sanpham WHERE id IN ('.$idList.')';
    $sanpham = pdo_query($sql);
    return $sanpham;
}
function loadone_sanpham($id){
    $sql = "SELECT * from sanpham where id=".$id;
    $sp =pdo_query_one($sql);
    return $sp;
}
function load_ten_dm($iddm){
    if($iddm>0){
        $sql = "SELECT * from danhmuc where id=".$iddm;
        $dm =pdo_query_one($sql);
        extract($dm);
        return $name;
    }else{
        return "";
    }
}
function load_sanpham_cungdanhmuc($iddm){
    $sql = "SELECT * from sanpham where iddanhmuc=".$iddm."";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function load_sanpham_cungloai($id,$iddm){
    $sql = "SELECT * from sanpham where iddanhmuc=".$iddm." AND id <> ".$id;
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function update_sanpham($id,$tensp,$giasp,$mota,$hinh,$iddm){
    if($hinh!=""){
        $sql = "UPDATE  sanpham SET name='".$tensp."',price='".$giasp."',mota='".$mota."',img='".$hinh."',iddanhmuc='".$iddm."' where id=".$id;
    }
    else{
        $sql = "UPDATE  sanpham SET name='".$tensp."',price='".$giasp."',mota='".$mota."',iddanhmuc='".$iddm."' where id=".$id;
    }
    pdo_execute($sql);
}
function loadall_sanpham_donhang_id($id_hoadon){
    $sql ="SELECT * FROM sanpham_donhang where 1";
    $sql.=" and id_hoadon ='".$id_hoadon."'";
    $sql.=" ORDER BY id desc";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function update_luotxem($luotxem,$id){
    $sql = "UPDATE sanpham set luotxem=".$luotxem." where id=".$id;
    pdo_execute($sql);
}
function loadone_bill_1($id){
    $sql ="SELECT * FROM billcheck where id=".$id;
    $bill = pdo_query_one($sql);
    return $bill;
}
function update_trangthai($trangthai,$id){
    $sql = "UPDATE tbl_order set trangthai =".$trangthai." where id_order=".$id;
    pdo_execute($sql);
}
?>
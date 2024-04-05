<?php

function addOrder($id_user, $hoten_user, $tel, $email, $address, $tongtien, $ptthanhtoan,$ptvanchuyen,$currentDateTime){
    $sql="INSERT INTO tbl_order (id_user, hoten, sdt, email, diachi, tongtien, pttt,ptvc,ngaydathang) VALUES ($id_user, '$hoten_user', '$tel', '$email', '$address', $tongtien, $ptthanhtoan,$ptvanchuyen,'$currentDateTime');";
    $id=pdo_executeid($sql);
    return $id;
}

function addOrderDetail($id_order, $name_pro, $giamua, $soluong, $thanhtien){
    $sql="INSERT INTO order_detail (id_order, name_pro, giamua, soluong, thanhtien) VALUES ($id_order, '$name_pro', $giamua, $soluong, $thanhtien );";
    pdo_execute($sql);
}
function loadall_order_id($id_user){
    $sql ="SELECT * FROM tbl_order WHERE id_user=".$id_user;
    $listorder = pdo_query($sql);
    return $listorder;
}
function loadone_order($id_order){
    $sql ="SELECT * FROM tbl_order WHERE id_order=".$id_order;
    $oneOrder = pdo_query_one($sql);
    return $oneOrder;
}
function loadall_pro_id($id_order){
    $sql ="SELECT * FROM order_detail WHERE id_order=".$id_order;
    $listPro = pdo_query($sql);
    return $listPro;
}
function loadall_order(){
    $sql ="SELECT * FROM tbl_order ORDER BY id_order desc";
    $listOrder = pdo_query($sql);
    return $listOrder;
}
function loadall_donhang_moi(){
    $sql ="SELECT * FROM tbl_order where 1 ORDER BY id_order desc limit 0,5";
    $listOrder=pdo_query($sql);
    return $listOrder;
}
function loadall_ord_kw($kyw){
    $sql ="SELECT * FROM tbl_order where 1";
        $sql.=" and hoten like '%".$kyw."%'";
    $sql.=" ORDER BY id_order desc";
    $listord=pdo_query($sql);
    return $listord;
}
?>
<?php
function insert_lienhe($hoten,$phone,$thongtin){
    $sql = "INSERT INTO lienhe(hoten,phone,thongtin) VALUES ('$hoten','$phone','$thongtin')";
    pdo_execute($sql);
}
function loadall_lienhe(){
    $sql ="SELECT * FROM lienhe ORDER BY id_lienhe asc";
    $listlienhe=pdo_query($sql);
    return $listlienhe;
}
?>
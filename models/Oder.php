<?php

function selectSoLuong(){
    try {
        $sql = "SELECT `SanPhamID`, `SoLuong` FROM `sanpham` "; 

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}

function UpdateSoLuongSP($SoLuong, $idsp)
{
    try {
        $sql = "UPDATE `sanpham` SET `SoLuong` = :SoLuong WHERE `sanpham`.`SanPhamID` = :idsp;";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(":idsp", $idsp);

        $stmt->bindParam(":SoLuong", $SoLuong);

        $stmt->execute();
    } catch (\Exception $e) {
        debug($e);
    }
}

function updateSoLuong($SoLuong, $idsp)
{
    try {
        $sql = "UPDATE `sanpham` SET `SoLuong` = :SoLuong WHERE `sanpham`.`SanPhamID` = :idsp;";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(":idsp", $idsp);

        $stmt->bindParam(":SoLuong", $SoLuong);

        $stmt->execute();
    } catch (\Exception $e) {
        debug($e);
    }
}

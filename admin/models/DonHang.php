<?php

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
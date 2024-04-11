<?php

function DoanhSo()
{
    try {
        $sql = "SELECT `total_bill`  FROM `orders`";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll();
    } catch (\Exception $th) {
        debug($th);
    }
}

function member(){
    try {
        $sql = "SELECT `type` FROM `users`";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll();
    } catch (\Exception $th) {
        debug($th);
    }
}

function SoLuongSP(){
    try {
        $sql = "SELECT `SoLuong` FROM `sanpham`";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll();
    } catch (\Exception $th) {
        debug($th);
    }
}
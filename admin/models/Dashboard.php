<?php

function DoanhSo($created_at1, $created_at2)
{
    try {
        if(empty($created_at1) && empty($created_at2)){
            $sql = "SELECT `total_bill`  FROM `orders` ";
        }else{
            $sql = "SELECT `total_bill`, `created_at` FROM orders 
            WHERE created_at >= '".$created_at1."' 
            AND created_at <= '".$created_at2."'";
        }

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll();
    } catch (\Exception $th) {
        debug($th);
    }
}

function DonHang(){
    try {
        $sql = "SELECT `id`, `status_delivery` FROM `orders`";

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

function BinhLuan(){
    try {
        $sql = "SELECT * FROM `binhluan`";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll();
    } catch (\Exception $th) {
        debug($th);
    }
}

function SoLuongSPTonkho(){
    try {
        $sql = "SELECT `SoLuong` FROM `sanpham`";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll();
    } catch (\Exception $th) {
        debug($th);
    }
}

function SoLuongSPBanRa(){
    try {
        $sql = "SELECT `quantity`, `order_id` FROM `order_items`";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll();
    } catch (\Exception $th) {
        debug($th);
    }
}



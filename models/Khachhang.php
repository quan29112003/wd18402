<?php

// hàm lấy dữ liệu từ database
function getAllUser()
{
    try {
        $sql = 'SELECT * FROM khachhang';

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}

function getUserByID($id){
    try {
        $sql = 'SELECT * FROM khachhang WHERE ID_KhachHang = :id';

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(':id', $id);

        $stmt->execute();

        return $stmt->fetch();
    } catch (\Exception $e) {
        debug($e);
    }
}
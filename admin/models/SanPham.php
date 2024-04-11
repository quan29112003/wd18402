<?php

// function showOne2table($id)
//     {
//         try {
//             $sql = "SELECT sanpham.SanPhamID, danhmuc.TenDanhMuc, sanpham.TenSanPham, sanpham.GiaSP, sanpham.MoTa FROM sanpham INNER JOIN danhmuc ON sanpham.ID_DanhMuc = danhmuc.DanhMucID WHERE sanpham.SanPhamID = :id LIMIT 1";

//             $stmt = $GLOBALS['conn']->prepare($sql);

//             $stmt->bindParam(":id", $id);

//             $stmt->execute();

//             return $stmt->fetch();
//         } catch (\Exception $e) {
//             debug($e);
//         }
//     }
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

function listAnhSanPham($idSP){
    try {
        $sql = "SELECT * FROM `anhsanpham` WHERE ID_SanPham = :idSP";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(":idSP", $idSP);

        $stmt->execute();

        return $stmt->fetch();
    } catch (\Exception $th) {
        debug($th);
    }
}
<?php

function chitietsp($id)
{

    $view = 'chitiet';

    $dataDanhMuc = listAll('danhmuc');
    // Lấy thông tin sản phẩm hiện tại
    $dataSanPham = showOne2table('sanpham', 'anhsanpham', 'SanPhamID', 'ID_SanPham', 'SanPhamID', $id);

    // Lấy ID_DanhMuc của sản phẩm hiện tại
    $idDanhMuc = $dataSanPham['ID_DanhMuc'];

    // Lấy các sản phẩm cùng loại (cùng ID_DanhMuc) từ bảng sanpham và anhsanpham
    $SanPhamCungLoai = listMany('sanpham', 'anhsanpham', 'SanPhamID', 'ID_SanPham', 'ID_DanhMuc', $idDanhMuc);
    // debug($SanPhamCungLoai);

    $SanPhamBinhLuan = listMany('binhluan', 'sanpham', 'idsanpham', 'SanPhamID', 'idsanpham', $id);

    




    require_once PATH_VIEW . 'layouts/master.php';
}

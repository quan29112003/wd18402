<?php
function SanPhamList($id){

    $view = 'listdoc';

    $dataDanhMuc = listAll('danhmuc');
    $data = showOne3table2('danhmuc', 'sanpham', 'anhsanpham', 'DanhMucID', 'ID_DanhMuc', 'SanPhamID', 'ID_SanPham', 'DanhMucID', $id);

    require_once PATH_VIEW . 'layouts/master.php';
}



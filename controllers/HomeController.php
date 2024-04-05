<?php

// hàm xuất dữ liệu ra file home.php trong file views
function danhmuc(){
    $dataUser = getAllUser();
    
    require_once PATH_VIEW . 'lient.php';
}

function index(){

    $view = 'trangchu';

    $dataDanhMuc = listAll('danhmuc');

    $dataSanPham = list2table('anhsanpham', 'sanpham', 'ID_SanPham', 'sanphamID');

    require_once PATH_VIEW . 'layouts/master.php';
}

function searchProduct()
{
    $keyword = $_GET['keyword'];
    $cate_id = $_GET['catalog'];

    $products = searchProductInCatalogue($keyword, $cate_id);
    $catalogues = listAll('danhmuc');
    $list_of_price = list_of_price();
    require_once PATH_VIEW . 'listdoc.php';
}

function GioiThieu() {
    require_once PATH_VIEW . 'gioithieu.php';
}

// luồng mvc 1: vào index
// vào index -> được điều hướng đến hàm xử lý logic trong controller tương ứng
// -> hàm sẽ trả view luôn vì không có tương tác với model

// luồng mvc 2: vào index
// -> được điều hướng đến hàm xử lý logic trong controller tương ứng
// -> hàm sẽ tương tác với hàm xử lý dữ liệu trong model
// -> dữ liệu này sẽ được trả về view
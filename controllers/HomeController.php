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

    $SanPhamNew = list2table3('sanpham', 'anhsanpham', 'SanPhamID', 'ID_SanPham','SanPhamID');


    require_once PATH_VIEW . 'layouts/master.php';
}

function searchProduct()
{
    // $keyword = $_GET['keyword'];
    // $cate_id = $_GET['catalog'];

    
    $dataDanhMuc = listAll('danhmuc');

    $data = searchProductInCatalogue();
    $list_of_price = list_of_price();
    require_once PATH_VIEW . 'listdoc.php';
}

function GioiThieu() {
    require_once PATH_VIEW . 'gioithieu.php';
}
function LienHe() {
    

    if (!empty($_POST)) {

        $data = [
            'hoten' => $_POST['hoten'],
            'tel' => $_POST['tel'],
            'noidung' => $_POST['noidung']
        ];

        insert('lienhe', $data);
        $_SESSION['success'] = 'Gửi liên hệ thành công!';

        header('Location: ' . BASE_URL . '?act=lienhe');

        exit;
    }
    require_once PATH_VIEW . 'lienhe.php';
}

// luồng mvc 1: vào index
// vào index -> được điều hướng đến hàm xử lý logic trong controller tương ứng
// -> hàm sẽ trả view luôn vì không có tương tác với model

// luồng mvc 2: vào index
// -> được điều hướng đến hàm xử lý logic trong controller tương ứng
// -> hàm sẽ tương tác với hàm xử lý dữ liệu trong model
// -> dữ liệu này sẽ được trả về view
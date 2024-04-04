<?php

function SanPhamListAll()
{
    $title = 'Danh sách sản phẩm';
    $view = 'SanPham/list';
    $doanhso = 0;

    $data = list2table('sanpham', 'danhmuc', 'ID_DanhMuc', 'DanhMucID');
    $dataAnh = listAll('anhsanpham');

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function SanPhamShow($id)
{
    $data = showOne3table('sanpham', 'danhmuc', 'anhsanpham', 'ID_DanhMuc', 'DanhMucID', 'SanPhamID', 'ID_SanPham','SanPhamID', $id);
    
    if (empty($data)) {
        e404();
    }

    $title = 'chi tiet san pham';
    $view = 'SanPham/show';

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function SanPhamCreate()
{
    $title = 'thêm mới danh mục';
    $view = 'SanPham/create';
    
    $dataDanhMuc = listAll('danhmuc');

    if (!empty($_POST)) {

        $data = [
            'ID_DanhMuc' => $_POST['ID_DanhMuc'],
            'TenSanPham' => $_POST['TenSanPham'],
            'GiaSP' => $_POST['GiaSP'],
            'SoLuong' => $_POST['SoLuong'],
            'MoTa' => $_POST['MoTa'],
        ];

        insert('sanpham', $data);

        header('Location: ' . BASE_URL_ADMIN . '?act=san-pham');

        exit;
    }


    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function AnhSPCreate($id)
{
    $title = 'thêm ảnh sản phẩm';
    $view = 'SanPham/UpLoad';


    $SanPham = showOne('sanpham', 'SanPhamID', $id);

    if (!empty($_POST)) {

        $data = [
            'ID_SanPham' => $_POST['ID_SanPham'],
        ];

        $anh = $_FILES['anhSP1'] ?? null;

        if (!empty($anh)) {
            $data['anhSP1'] = upload_file($anh);
        }
        // debug($data);
        insert('anhsanpham', $data);

        header('Location: ' . BASE_URL_ADMIN . '?act=san-pham');

        exit;
    }


    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function SanPhamUpdate($id)
{
    $SanPham = showOne('sanpham', 'SanPhamID', $id);

    $dataDanhMuc = listAll('danhmuc');

    if (empty($SanPham)) {
        e404();
    }

    $title = 'thêm mới sản phẩm';
    $view = 'SanPham/update';

    if (!empty($_POST)) {

        $data = [
            'ID_DanhMuc' => $_POST['ID_DanhMuc'],
            'TenSanPham' => $_POST['TenSanPham'],
            'GiaSP' => $_POST['GiaSP'],
            'SoLuong' => $_POST['SoLuong'],
            'MoTa' => $_POST['MoTa'],
        ];


        update('sanpham','SanPhamID', $id, $data);

        header('Location: ' . BASE_URL_ADMIN . '?act=san-pham-update&id=' . $id);

        exit;
    }


    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function SanPhamDelete($id)
{
    destroy('sanpham', 'SanPhamID', $id);

    header('Location: ' . BASE_URL_ADMIN . '?act=san-pham');
    die;
}

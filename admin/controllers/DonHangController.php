<?php

function DonHangListAll()
{
    $title = 'Danh sách đon hàng';
    $view = 'DonHang/list';

    // $data = list3table('sanpham', 'danhmuc', 'anhsanpham', 'ID_DanhMuc', 'DanhMucID', 'SanPhamID', 'ID_SanPham');

    $donhang = list2table('orders','order_items','id','order_id') ;
    
    
    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function DonHangShow($id)
{
    // $data = showOne3table('sanpham', 'danhmuc', 'anhsanpham', 'ID_DanhMuc', 'DanhMucID', 'SanPhamID', 'ID_SanPham','SanPhamID', $id);

    $DonHangShow = showOne2table('order_items','orders','order_id','id','order_id',$id);


    
    if (empty($DonHangShow)) {
        e404();
    }

    $title = 'chi tiet don hang';
    $view = 'DonHang/show';

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function DonHangUpdate($id)
{
    $DonHangEdit = showOne('orders', 'id', $id);

    // $dataDanhMuc = listAll('danhmuc');

    if (empty($DonHangEdit)) {
        e404();
    }

    // $title = 'thêm mới sản phẩm';
    $view = 'DonHang/update';

    if (!empty($_POST)) {

        $data = [
            'status_delivery' => $_POST['status_delivery'],
            
        ];


        update('orders','id', $id, $data);

        header('Location: ' . BASE_URL_ADMIN . '?act=don-hang');

        exit;
    }


    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}
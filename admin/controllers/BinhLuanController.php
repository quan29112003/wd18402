<?php

function binhluanListAll() {
    $title = 'Danh sách bình luận';
    $view = 'BinhLuan/list';

    $data = listBinhLuan();
    $namesp = listAll('sanpham');

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function BinhLuanHide($id) {
    update('binhluan', 'id', $id, ['Hidden' => 1]);

    header('Location: ' . BASE_URL_ADMIN . '?act=binh-luan');
    die;
}

function BinhLuanHien($id) {
    update('binhluan', 'id', $id, ['Hidden' => 0]);

    header('Location: ' . BASE_URL_ADMIN . '?act=binh-luan');
    die;
}

function BinhLuanDetail($id) {
    $data = showOne2table('binhluan','sanpham','idsanpham','SanPhamID','id',$id);

    // debug($data);
    
    if (empty($data)) {
        e404();
    }

    // $title = 'chi tiet san pham';
    $view = 'BinhLuan/show';

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}
<?php

function DonHangListAll()
{
    $title = 'Danh sách đon hàng';
    $view = 'DonHang/list';

    // $data = list3table('sanpham', 'danhmuc', 'anhsanpham', 'ID_DanhMuc', 'DanhMucID', 'SanPhamID', 'ID_SanPham');

    $donhang = list2table('orders', 'order_items', 'id', 'order_id');
    $user = listAll('users');

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function DonHangShow($id)
{
    // $data = showOne3table('sanpham', 'danhmuc', 'anhsanpham', 'ID_DanhMuc', 'DanhMucID', 'SanPhamID', 'ID_SanPham','SanPhamID', $id);

    $DonHangShow = list2table2('order_items', 'orders', 'order_id', 'id', 'order_id', $id);



    if (empty($DonHangShow)) {
        e404();
    }

    $title = 'chi tiet don hang';
    $view = 'DonHang/show';

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function DonHangUpdate($id)
{
    // $DonHangEdit = showOne('orders', 'id', $id);

    // // $dataDanhMuc = listAll('danhmuc');

    // if (empty($DonHangEdit)) {
    //     e404();
    // }

    // $title = 'thêm mới sản phẩm';
    $view = 'DonHang/update';

    $order_items = listAll('order_items');


    $sanpham = listAll('sanpham');

    $hoanSoLuongSP = 0;
    if (!empty($_POST)) {

        $data = [
            'status_delivery' => $_POST['status_delivery'],
        ];

        if ($_POST['status_delivery'] == -1) {
            foreach ($order_items as $value) {
                if ($value['order_id'] == $id) {
                    foreach ($sanpham as $item) {
                        if ($value['product_id'] == $item['SanPhamID']) {
                            // $idsp = $item['SanPhamID']

                            $hoanSoLuongSP = (int)$item['SoLuong'] + (int)$value['quantity'];
                            // debug($value['product_id']);
                            // debug($hoanSoLuongSP);
                            updateSoLuong($hoanSoLuongSP, $item['SanPhamID']);
                        }
                    }
                }
            }
        }

        // if($data['status_delivery'] == -1){
        //     $hoanSoLuonSP = $data['status_delivery'];
        //     update('sanpham', 'SanPhamID ');
        // }


        update('orders', 'id', $id, $data);

        header('Location: ' . BASE_URL_ADMIN . '?act=don-hang');

        exit;
    }


    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

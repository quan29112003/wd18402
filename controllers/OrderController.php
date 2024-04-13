<?php

function orderCheckout()
{

    $dataDanhMuc = listAll('danhmuc');

    require_once PATH_VIEW . 'giohang/thanhtoan.php';
}

function orderPurchase()
{
    if (!empty($_POST) && !empty($_SESSION['cart'])) {
        try {
            // Xử lý lưu vào bảng orders và order_items
            $data = $_POST;
            $data['user_id']            = $_SESSION['user']['id'];
            $data['total_bill']         = caculator_total_order(false);
            $data['status_delivery']    = STATUS_DELIVERY_WFC;
            // $data['status_payment']     = STATUS_PAYMENT_UNPAID;

            $orderID = insert_get_last_id('orders', $data);

            foreach ($_SESSION['cart'] as $productID => $item) {
                // $price = isset($item['giaSP']) ? $item['giaSP'] : 0;
                $orderItem = [
                    'order_id'      => $orderID,
                    'product_id'    => $productID,
                    'product_name'  => $item['TenSanPham'],
                    'quantity'      => $item['quantity'],
                    'price'         => $item['GiaSP'],
                    // 'status_payment' => STATUS_PAYMENT_UNPAID,
                ];

                $dataSoLuong = selectSoLuong();

                $SoLuong = 0;

                foreach ($dataSoLuong as $value) {
                    if ($item['SanPhamID'] == $value['SanPhamID']) {
                        $SoLuong = $value['SoLuong'] - $item['quantity'];
                    }
                }

                insert('order_items', $orderItem);

                UpdateSoLuongSP($SoLuong, $item['SanPhamID']);
            }

            // Xử lý hậu

            deleteCartItemByCartID($_SESSION['cartID']);
            delete2('carts', $_SESSION['cartID']);

            unset($_SESSION['cart']);
            unset($_SESSION['cartID']);
        } catch (\Exception $e) {
            debug($e);
        }
        $_SESSION['success'] = 'Đặt hàng thành công!';
        header('Location: ' . BASE_URL . '?act=xemspdonhang&id=' . $orderID);
        exit();
    }

    header('Location: ' . BASE_URL);
}


function KiemTraDonHang($id)
{
    // $DonHangDaMua = showOne2table('order_items','orders','order_id','id','order_id',$id);

    //  $DonHangDaMua = list2table('orders','order_items','id','order_id',$id) ;

    $dataDanhMuc = listAll('danhmuc');
    $DonHangDaMua = list3table2('orders', 'users', 'order_items', 'user_id', 'id', 'id', 'order_id', 'user_id', $id);

    $order_items = listAll('order_items');


    $sanpham = listAll('sanpham');

    $hoanSoLuongSP = 0;

    if (empty($DonHangDaMua)) {
        $_SESSION['error'] = 'Không có gì!';
    }

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


        update('orders', 'id', $id, $data);

        header('Location: ' . BASE_URL . '?act=kiemtradonhang&id=' . $_SESSION['user']['id']);

        exit;
    }

    $title = 'Chi Tiết Đơn Hàng';
    require_once PATH_VIEW . 'giohang/kiemtradonhang.php';
}

function XemSPDonHang($id)
{

    $dataDanhMuc = listAll('danhmuc');
    $SanPhamDonHang = list2table2('order_items', 'orders', 'order_id', 'id', 'order_id', $id);

    // debug($SanPhamDonHang);

    if (empty($SanPhamDonHang)) {
        $_SESSION['error'] = 'Không có gì!';
    }


    require_once PATH_VIEW . 'giohang/xemspdonhang.php';
}

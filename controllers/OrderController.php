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

                insert('order_items', $orderItem);
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


    if (empty($DonHangDaMua)) {
        $_SESSION['error'] = 'Không có gì!';
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

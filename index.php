<?php

session_start();

// require file trong commons
require_once './commons/env.php';
require_once './commons/helper.php';
require_once './commons/connect-db.php';
require_once './commons/model.php';

// require file trong controllers và models
require_file(PATH_CONTROLLER);
require_file(PATH_MODEL);

// $data = listAll('danhmuc');
// debug($data);

// điều hướng
$act = $_GET['act'] ?? '/';


$arrRouteNeedAuth = [
    // 'cart-add',
    // 'cart-list',
    // 'cart-inc',
    // 'cart-dec',
    // 'cart-del',
    'order-checkout',
    'order-purchase',
    'order-success',
];

middleware_auth_check($act, $arrRouteNeedAuth);

match ($act) {
    '/' => index(),

    'cart-add' => cartAdd($_GET['productID']),
    'cart-list' => cartList(),
    'cart-inc' => cartInc($_GET['productID']),
    'cart-dec' => cartDec($_GET['productID']),
    'cart-delete' => cartDelete($_GET['productID']),


    'order-checkout'  => orderCheckout(),
    'order-purchase'  => orderPurchase(),

    'login' => authenShowFormLogin(),
    'logout' => authenLogout(),


    'san-pham' => SanPhamList($_GET['id']),
    'chi-tiet' => chitietsp($_GET['id']),
    'listdoc' => SanPhamList($_GET['id']),


    'qltk' => Qltk(),
    'updatetk' => updateTk($_GET['id']),

    'kiemtradonhang' => KiemTraDonHang($_GET['id']),
    'xemspdonhang' => XemSPDonHang($_GET['id']),

    'search' => searchProduct(),

    'gioithieu' => GioiThieu(),
};

require_once './commons/disconnect-db.php';

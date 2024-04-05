<?php
session_start();
// require file trong commons
require_once '../commons/env.php';
require_once '../commons/helper.php';
require_once '../commons/connect-db.php';
require_once '../commons/model.php';

// require file trong controllers và models
require_file(PATH_CONTROLLER_ADMIN);
require_file(PATH_MODEL_ADMIN);

// $data = showOne('danhmuc',3);

// debug($data);
// điều hướng
$act = $_GET['act'] ?? '/';

match ($act) {
    '/' => dashboard(),

    // crud danh mục
    'danh-muc' => DanhMucListAll(),
    'danh-muc-detail' => DanhMucshow($_GET['id']),
    'danh-muc-create' => DanhMuccreate(),
    'danh-muc-update' => DanhMucupdate($_GET['id']),
    'danh-muc-delete' => DanhMucdelete($_GET['id']),

    // crud sản phẩm
    'san-pham' => SanPhamListAll(),
    'san-pham-detail' => SanPhamShow($_GET['id']),
    'san-pham-create' => SanPhamCreate(),
    'san-pham-update' => SanPhamUpdate($_GET['id']),
    'san-pham-delete' => SanPhamDelete($_GET['id']),

    // crud user
    'users' => userListAll(),
    'user-detail' => userShowOne($_GET['id']),
    'user-create' => userCreate(),
    'user-update' => userUpdate($_GET['id']),
    'user-delete' => userDelete($_GET['id']),
};

require_once '../commons/disconnect-db.php';

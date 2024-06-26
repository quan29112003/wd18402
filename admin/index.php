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

$arrRouteNeedAuth = [
     '/',

     'danh-muc',
     'danh-muc-detail',
     'danh-muc-create',
     'danh-muc-update',
     'danh-muc-delete',

     'san-pham',
     'san-pham-detail',
     'san-pham-create',
     'san-pham-update',
     'san-pham-delete',
     'anh-san-pham',
     'anh-san-pham-update',
     'anh-san-pham-delete',
     
     'san-pham-an',
     'san-pham-hien',

     'don-hang',
     'don-hang-detail',
     'don-hang-update',

     'users',
     'user-detail',
     'user-create',
     'user-update',
     'user-delete',

     'binh-luan',
     'binh-luan-an',
     'binh-luan-hien',
     'binh-luan-detail',
];

middleware_auth_check_admin($act, $arrRouteNeedAuth);
// debug($_SESSION['admin']);
match ($act) {
     '/' => dashboard(),

     // login or logout
     'login-admin' => LoginAdmin(),
     'logout-admin' => LogoutAdmin(),

     // crud danh mục
     'danh-muc' => DanhMucListAll(),
     'danh-muc-detail' => DanhMucshow($_GET['id']),
     'danh-muc-create' => DanhMuccreate(),
     'danh-muc-update' => DanhMucupdate($_GET['id']),
     'danh-muc-delete' => DanhMucdelete($_GET['id']),
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
     'anh-san-pham' => AnhSPCreate($_GET['id']),
     'anh-san-pham-update' => AnhSPupdate($_GET['id'], $_GET['idAnh']),
     'anh-san-pham-delete' => AnhSPdelete($_GET['id']),

     'don-hang' => DonHangListAll(),
     'don-hang-detail' => DonHangShow($_GET['id']),
     'don-hang-update' => DonHangUpdate($_GET['id']),
     // crud sản phẩm

     'san-pham-an' => SanPhamHide($_GET['id']),
     'san-pham-hien' => SanPhamHien($_GET['id']),

     // crud user
     'users' => userListAll(),
     'user-detail' => userShowOne($_GET['id']),
     'user-create' => userCreate(),
     'user-update' => userUpdate($_GET['id']),
     'user-delete' => userDelete($_GET['id']),

     'binh-luan' => binhluanListAll(),
     'binh-luan-an' => BinhLuanHide($_GET['id']),
     'binh-luan-hien' => BinhLuanHien($_GET['id']),
     'binh-luan-detail' => BinhLuanDetail($_GET['id'])
};

require_once '../commons/disconnect-db.php';

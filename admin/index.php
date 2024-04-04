<?php

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
     'anh-san-pham' => AnhSPCreate($_GET['id']),
     'anh-san-pham-update' => AnhSPupdate($_GET['id'], $_GET['idAnh']),
     'anh-san-pham-delete' => AnhSPdelete($_GET['id']),

     'don-hang' => DonHangListAll(),
     'don-hang-detail' => DonHangShow($_GET['id']),
     'don-hang-update' => DonHangUpdate($_GET['id']),


};

require_once '../commons/disconnect-db.php';
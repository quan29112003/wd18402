<?php
// hiển thị danh sách sản phẩm
function SanPhamListAll()
{
    $title = 'Danh sách sản phẩm';
    $view = 'SanPham/list';

    // lấy ra sản phẩm và danh mục
    $data = list2table('sanpham', 'danhmuc', 'ID_DanhMuc', 'DanhMucID');
    // lấy ra ảnh sản phẩm
    $dataAnh = listAll('anhsanpham');

    foreach ($data as $value) {
        if ($value['SoLuong'] == 0) {
            $id = $value['SanPhamID'];
            update('sanpham', 'SanPhamID', $id, ['IsHidden' => 1]);
        }
    }

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

// hiện chi tiết sản phẩm
function SanPhamShow($id)
{
    // lấy ra sản phẩm, danh mục, ảnh sản phẩm
    $data = showOne3table('sanpham', 'danhmuc', 'anhsanpham', 'ID_DanhMuc', 'DanhMucID', 'SanPhamID', 'ID_SanPham', 'SanPhamID', $id);

    if (empty($data)) {
        e404();
    }

    $title = 'chi tiet san pham';
    $view = 'SanPham/show';

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

// thêm mới sản phẩm
function SanPhamCreate()
{
    $title = 'thêm mới danh mục';
    $view = 'SanPham/create';

    // lấy ra danh mục
    $dataDanhMuc = listAll('danhmuc');

    if (!empty($_POST)) {

        $data = [
            'ID_DanhMuc' => $_POST['ID_DanhMuc'] ?? null,
            'TenSanPham' => $_POST['TenSanPham'] ?? null,
            'GiaSP' => $_POST['GiaSP'] ?? null,
            'SoLuong' => $_POST['SoLuong'] ?? null,
            'MoTa' => $_POST['MoTa'] ?? null,
        ];


        $errors = validateCreateProduct($data);

        if (!empty($errors)) {
            $_SESSION['errors'] = $errors;
            $_SESSION['data'] = $data;
            header('Location: ' . BASE_URL_ADMIN . '?act=san-pham-create');
            exit();
        }
        // thêm data vào bảng sản phẩm
        insert('sanpham', $data);

        // quay trở về trang danh sách sản phẩm
        header('Location: ' . BASE_URL_ADMIN . '?act=san-pham');

        exit;
    }


    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function validateCreateProduct($data)
{
    $errors = [];
    if (empty($data['TenSanPham'])) {
        $errors[] = 'Trường tên sản phẩm là bắt buộc';
    }

    if (empty($data['GiaSP'])) {
        $errors[] = 'Trường giá sản phẩm là bắt buộc';
    }

    if (empty($data['SoLuong'])) {
        $errors[] = 'Trường số lượng sản phẩm là bắt buộc';
    }

    return $errors;
}

// thêm mới ảnh sản phẩm
function AnhSPCreate($id)
{
    $title = 'thêm ảnh sản phẩm';
    $view = 'SanPham/UpLoad';

    // lấy ra id của sản phẩm
    $SanPham = showOne('sanpham', 'SanPhamID', $id);

    if (!empty($_POST)) {

        $data = [
            'ID_SanPham' => $_POST['ID_SanPham'],
        ];

        $anh = $_FILES['anhSP1'] ?? null;

        if (!empty($anh)) {
            // upload_file nằm trong commons/helper là function upload ảnh
            $data['anhSP1'] = upload_file($anh);
        }
        // thêm ảnh 
        insert('anhsanpham', $data);

        // quay trở về trang danh sách sản phẩm
        header('Location: ' . BASE_URL_ADMIN . '?act=san-pham');

        exit;
    }


    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

// cập nhật ảnh sản phẩm
function AnhSPupdate($id, $idAnh)
{
    $title = 'thêm ảnh sản phẩm';
    $view = 'SanPham/updateAnh';

    // lấy ra id của sản phẩm
    $SanPham = showOne('sanpham', 'SanPhamID', $id);

    // lấy ra ảnh cần update
    $AnhSanPham = showOne('anhsanpham', 'anhID', $idAnh);

    if (!empty($_POST)) {

        $data = [
            'ID_SanPham' => $_POST['ID_SanPham'],
        ];

        $anh = $_FILES['anhSP1'] ?? null;

        if (!empty($anh)) {
            // upload_file nằm trong commons/helper là function upload ảnh
            $data['anhSP1'] = upload_file($anh);
        }
        // cập nhật ảnh 
        update('anhsanpham', 'anhID', $idAnh, $data);

        // kiểm tra có ảnh đẩy lên không , ảnh sản phẩm có tồn tại không, ảnh mới có được đẩy lên không, còn file trong upload không
        if (!empty($anh) && !empty($AnhSanPham['anhSP1']) && !empty($data['anhSP1']) && file_exists(PATH_UPLOAD . $AnhSanPham['anhSP1'])) {
            unlink(PATH_UPLOAD . $AnhSanPham['anhSP1']);
        }

        // quay trở về trang danh sách sản phẩm
        header('Location: ' . BASE_URL_ADMIN . '?act=san-pham');

        exit;
    }


    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

// cập nhật sản phẩm
function SanPhamUpdate($id)
{
    // lấy ra sản phẩm muốn update
    $SanPham = showOne('sanpham', 'SanPhamID', $id);

    // lấy ra danh mục
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

        // cập nhật sản phẩm
        update('sanpham', 'SanPhamID', $id, $data);

        // ở lại trang update
        header('Location: ' . BASE_URL_ADMIN . '?act=san-pham');

        exit;
    }


    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

// xóa sản phẩm

function AnhSPDelete($id)
{


    // lấy ra ảnh cần update
    $AnhSanPham = showOne('anhsanpham', 'anhID', $id);

    destroy('anhsanpham', 'anhID', $id);
    // kiểm tra có ảnh đẩy lên không , ảnh sản phẩm có tồn tại không, ảnh mới có được đẩy lên không, còn file trong upload không
    if (!empty($AnhSanPham['anhSP1']) && file_exists(PATH_UPLOAD . $AnhSanPham['anhSP1'])) {
        unlink(PATH_UPLOAD . $AnhSanPham['anhSP1']);
    }
    header('Location: ' . BASE_URL_ADMIN . '?act=san-pham');
    die;
}

function SanPhamDelete($id)
{
    destroy('sanpham', 'SanPhamID', $id);

    header('Location: ' . BASE_URL_ADMIN . '?act=san-pham');
    die;
}
function SanPhamHide($id)
{
    // Thực hiện cập nhật trường 'IsHidden' hoặc tương tự trong bảng 'sanpham' để đánh dấu sản phẩm là ẩn
    // Giả sử 'IsHidden' là tên trường để xác định sản phẩm có đang bị ẩn hay không
    if ($id == 0) {
        header('Location: ' . BASE_URL_ADMIN . '?act=san-pham');
        die;
    } else {
        update('sanpham', 'SanPhamID', $id, ['IsHidden' => 1]);

        header('Location: ' . BASE_URL_ADMIN . '?act=san-pham');
        die;
    }
}

function SanPhamHien($id)
{
    $dataSoLuong = selectSoLuong();
    foreach ($dataSoLuong as $value) {
        if ($id == $value['SanPhamID']) {
            if ($value['SoLuong'] == 0) {
                header('Location: ' . BASE_URL_ADMIN . '?act=san-pham');
                die;
            } else {
                update('sanpham', 'SanPhamID', $id, ['IsHidden' => 0]);

                header('Location: ' . BASE_URL_ADMIN . '?act=san-pham');
                die;
            }
        }
    }
}

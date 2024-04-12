<?php

function DanhMucListAll()
{
    $title = 'Danh sách danh mục';
    $view = 'DanhMuc/list';

    $data = listAll('danhmuc');

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function DanhMucshow($id)
{
    $data = showOne('danhmuc', 'DanhMucID', $id);

    if (empty($data)) {
        e404();
    }

    $title = 'chi tiet danh muc';
    $view = 'DanhMuc/show';

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function DanhMuccreate()
{
    $title = 'thêm mới danh mục';
    $view = 'DanhMuc/create';

    if (!empty($_POST)) {

        $data = [
            'TenDanhMuc' => $_POST['TenDanhMuc']
        ];

        $errors = validateCreateDanhMuc($data);

        if (!empty($errors)) {
            $_SESSION['errors'] = $errors;
            $_SESSION['data'] = $data;
            header('Location: ' . BASE_URL_ADMIN . '?act=danh-muc-create');
            exit();
        }

        insert('danhmuc', $data);

        header('Location: ' . BASE_URL_ADMIN . '?act=danh-muc');

        exit;
    }


    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function validateCreateDanhMuc($data)
{
    $errors = [];
    if (empty($data['TenDanhMuc'])) {
        $errors[] = 'Trường tên danh mục là bắt buộc';
    }

    return $errors;
}

function DanhMucupdate($id)
{
    $DanhMuc = showOne('danhmuc', 'DanhMucID', $id);

    if (empty($DanhMuc)) {
        e404();
    }

    $title = 'cập nhật danh mục';
    $view = 'DanhMuc/update';

    if (!empty($_POST)) {

        $data = [
            'TenDanhMuc' => $_POST['TenDanhMuc']
        ];

        $errors = validateUpdateDanhMuc($data);

        if (!empty($errors)) {
            $_SESSION['errors'] = $errors;
            $_SESSION['data'] = $data;
            header('Location: ' . BASE_URL_ADMIN . '?act=danh-muc-update&id=' . $id);
            exit();
        }

        update('danhmuc', 'DanhMucID',  $id, $data);

        header('Location: ' . BASE_URL_ADMIN . '?act=danh-muc');

        exit;
    }


    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function validateUpdateDanhMuc($data)
{
    $errors = [];
    if (empty($data['TenDanhMuc'])) {
        $errors[] = 'Trường tên danh mục là bắt buộc';
    }

    return $errors;
}

function DanhMucdelete($id)
{
    destroy('danhmuc', 'DanhMucID', $id);

    header('Location: ' . BASE_URL_ADMIN . '?act=danh-muc');
    die;
}

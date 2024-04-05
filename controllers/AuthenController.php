<?php

function authenShowFormLogin()
{
    if ($_POST) {
        authenLogin();
    }

    require_once PATH_VIEW . 'authen/dangnhap_dangky.php';
}

function authenLogin()
{
    $user = getUserClientByEmailAndPassword($_POST['email'], $_POST['password']);

    if (empty($user)) {
        $_SESSION['error'] = 'Email hoặc password chưa đúng!';

        header('Location: ' . BASE_URL . '?act=login');
        exit();
    }

    $_SESSION['user'] = $user;

    header('Location: ' . BASE_URL);
    exit();
}

function authenLogout()
{
    if (!empty($_SESSION['user'])) {
        session_destroy();
    }

    header('Location: ' . BASE_URL);
    exit();
}

function Qltk()
{
    
    require_once PATH_VIEW . 'authen/qltk.php';
}

function updatetk($id)
{
    $TaiKhoan = showOne('users', 'id', $id);

    if (empty($TaiKhoan)) {
        $_SESSION['error'] = 'Bạn chưa đăng nhập!';
        
        header('Location: ' . BASE_URL . '?act=login');
    }

    $title = 'cập nhật tài khoản';

    if (!empty($_POST)) {

        $data = [
            'name' => $_POST['name'],
            'hoten_user' => $_POST['hoten_user'],
            'diachi' => $_POST['diachi'],
            'tel' => $_POST['tel'],
        ];

        update('users', 'id',  $id, $data);
        $_SESSION['success'] = 'Cập nhật thành công!';


        header('Location: ' . BASE_URL . '?act=updatetk&id=' . $id);

        exit;
        
    }


    require_once PATH_VIEW . 'authen/qltk.php';
}

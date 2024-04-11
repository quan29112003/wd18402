<?php

function authenShowFormLoginandSignin()
{
    
    require_once PATH_VIEW . 'authen/dangnhap_dangky.php';
}

function authenShowFormLogin()
{
    if ($_POST) {
        authenLogin();
    }

    require_once PATH_VIEW . 'authen/dangnhap_dangky.php';
}

function authenShowFormSignup()
{
    if ($_POST) {
        authenSignup();
    }

    require_once PATH_VIEW . 'authen/dangnhap_dangky.php';
}

function authenLogin()
{
    $user = getUserClientByEmailAndPassword($_POST['email'], $_POST['password']);
    $test = "test";
    if (empty($user)) {
        $_SESSION['error'] = 'Email hoặc password chưa đúng!';

        header('Location: ' . BASE_URL . '?act=login');
        exit();
    }

    $_SESSION['user'] = $user;

    header('Location: ' . BASE_URL);
    exit();
}

function authenSignup() {
    // $title = 'đăng ký user';
    // $view = 'authen/create';
    $test = "test";
    if(!empty($_POST)) {
        $data = [
         "name" => $_POST['name'] ?? null,
         "email" => $_POST['email'] ?? null,
         "hoten_user" => $_POST['hoten_user'] ?? null,
         "diachi" => $_POST['diachi'] ?? null,
         "tel" => $_POST['tel'] ?? null,
         "password" => $_POST['password'] ?? null,
        ];

        $errors = validateCreate($data);
        if(!empty($errors)) {
            $_SESSION['errorsSignin'] = $errors;
            $_SESSION['data'] = $data;
            header('location: ' . BASE_URL . '?act=signup');
            exit();
        }         
         insert('users', $data);
         $_SESSION['successSignin'] = 'Thao tác thành công';
         unset($_SESSION['d']);
         header('location: ' . BASE_URL . '?act=login');
         exit();
    }
    require_once PATH_VIEW . 'layouts/master.php';
}

function validateCreate($data) {
    // name- bắt buộc, độ dài tối đa 50 ký tự
    //email - bắt buộc, phải là email, ko được trùng
    //họ tên user - bắt buộc, độ dài tối đa 50 ký tự
    // địa chỉ - bắt buộc, độ dài tối đa 50 ký tự
    //password - bắt buộc, độ dài nhỏ nhất là 8, lớn nhất là 20
    //type- bắt buộc, phải là 0 or 1
    $errors = [];
    if(empty($data['name'])) {
        $errors[] = 'Trường name là bắt buộc';
    }else if(strlen($data['name']) >50) {
        $errors[] = 'Trường name độ dài tối đa 50 ký tự';
    }

    if(empty($data['email'])) {
        $errors[] = 'Trường email là bắt buộc';
    }else if(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email không đúng định dạng';
    } else if(!checkUniqueEmail('users', $data['email'])) {
        $errors[] = 'Email này đã được sử dụng rồi';
    }

    if(empty($data['hoten_user'])) {
        $errors[] = 'Họ tên là bắt buộc';
    }else if(strlen($data['hoten_user']) >50) {
        $errors[] = 'Họ tên độ dài tối đa 50 ký tự';
    }

    if(empty($data['diachi'])) {
        $errors[] = 'Địa chỉ là bắt buộc';
    }else if(strlen($data['diachi']) >50) {
        $errors[] = 'Họ tên độ dài tối đa 50 ký tự';
    }

    if(empty($data['tel'])) {
        $errors[] = 'Số điện thoại là bắt buộc';
    }else if(strlen($data['tel']) >10 || strlen($data['tel']) <10) {
        $errors[] = 'Số điện thoại không đúng định dạng';
    }

    if(empty($data['password'])) {
        $errors[] = 'Password là bắt buộc';
    }else if(strlen($data['password']) <8 || strlen($data['password']) >20) {
        $errors[] = 'Độ dài tối thiểu của password phải là 8, lớn nhất là 20';
    }

    return $errors;
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

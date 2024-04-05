<?php

function khachhangDetail($id){
    $user = getUserByID($id);

    require_once PATH_VIEW . 'khachhang/detail.php';
}

// function TaikhoanUpdate($id)
// {
//     $TaiKhoan = showOne('users', 'id', $id);

//     if (empty($TaiKhoan)) {
//         e404();
//     }
//     debug($TaiKhoan);

//     $title = 'cập nhật tài khoản';

//     if (!empty($_POST)) {

//         $data = [
//             'name' => $_POST['name'],
//             'hoten_user' => $_POST['hoten_user'],
//             'diachi' => $_POST['diachi'],
//             'tel' => $_POST['tel'],
//         ];

//         update('users', 'id',  $id, $data);

//         header('Location: ' . BASE_URL . '?act=qltk&id=' . $id);

//         exit;
//     }


//     require_once PATH_VIEW . 'authen/qltk.php';
// }
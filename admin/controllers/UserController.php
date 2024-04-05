<?php
function userListAll() {
  $title = 'Danh sách user';
  $view = 'users/index';
  $users = listAll('users');

  require_once PATH_VIEW_ADMIN . 'layouts/master.php';
//   require_once PATH_VIEW_ADMIN . 'users/show.php';
}
function userShowOne($id){
    
    
    $user = showOne('users', 'id',$id);
    
    if(empty($user)) {
        e404();
    }
    $title = 'Chi tiết user' . $user['name'];
    $view = 'users/show';
    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}
function userCreate() {
    $title = 'Thêm mới user';
    $view = 'users/create';

    if(!empty($_POST)) {
        $data = [
         "name" => $_POST['name'] ?? null,
         "email" => $_POST['email'] ?? null,
         "hoten_user" => $_POST['hoten_user'] ?? null,
         "diachi" => $_POST['diachi'] ?? null,
         "tel" => $_POST['tel'] ?? null,
         "password" => $_POST['password'] ?? null,
         "type" => $_POST['type'] ?? null,
        ];


        $errors = validateCreate($data);
        if(!empty($errors)) {
            $_SESSION['errors'] = $errors;
            $_SESSION['data'] = $data;
            header('Location: ' . BASE_URL_ADMIN . '?act=user-create');
            exit();
        }         
         insert('users', $data);
         $_SESSION['success'] = 'Thao tác thành công';
         header('Location: ' . BASE_URL_ADMIN . '?act=users');
         exit();
    }
    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
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

    if($data['type'] === null) {
        $errors[] = 'Type là bắt buộc';
    }else if(!in_array($data['type'], [0,1])) {
        $errors[] = 'Type phải là Admin hoặc Member';
    }
    return $errors;
}

function userUpdate($id){
    $user = showOne('users', 'id',$id);
    
    if(empty($user)) {
        e404();
    }
    $title = 'Cập nhật User: ' . $user['name'];
    $view = 'users/update';

    if(!empty($_POST)) {
        $data = [
         "name" => $_POST['name'] ?? null,
         "email" => $_POST['email'] ?? null,
         "hoten_user" => $_POST['hoten_user'] ?? null,
         "diachi" => $_POST['diachi'] ?? null,
         "tel" => $_POST['tel'] ?? null,
         "password" => $_POST['password'] ?? null,
         "type" => $_POST['type'] ?? null,
        ];
        $errors = validateUpdate($id,$data);
        if(!empty($errors)) {
            $_SESSION['errors'] = $errors;    
        }else {
            update('users', 'id',$id, $data);
            $_SESSION['success'] = 'Thao tác thành công';
        }
         header('Location: ' . BASE_URL_ADMIN . '?act=user-update&id=' .$id);
         exit();
    }
    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function validateUpdate($id,$data) {
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
    } else if(!checkUniqueEmailForUpdate('users',$id, $data['email'])) {
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

    if($data['type'] === null) {
        $errors[] = 'Type là bắt buộc';
    }else if(!in_array($data['type'], [0,1])) {
        $errors[] = 'Type phải là Admin hoặc Member';
    }
    return $errors;
}
function userDelete($id){
    delete2('users',$id);
    header('Location: ' . BASE_URL_ADMIN . '?act=users');
    exit();

}
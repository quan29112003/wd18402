<?php 

function LoginAdmin()
{
    if ($_POST) {
        Login();
    }

    require_once PATH_VIEW_ADMIN . 'loginAdmin.php';
}

function Login(){
    $admin = getUserAdminByEmailAndPassword($_POST['email'], $_POST['password']);
    
    if (empty($admin)) {
        $_SESSION['error'] = 'Email hoặc password chưa đúng!';

        header('Location: ' . BASE_URL_ADMIN . '?act=login-admin');
        exit();
    }

    $_SESSION['admin'] = $admin;

    header('Location: ' . BASE_URL_ADMIN );
    exit();
}

function LogoutAdmin()
{
    if (!empty($_SESSION['admin'])) {
        session_destroy();
    }

    header('Location: ' . BASE_URL_ADMIN );
    exit();
}
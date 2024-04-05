<?php 

function LoginAdmin()
{
    if ($_POST) {
        Login();
    }

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function Login(){
    $admin = getUserAdminByEmailAndPassword($_POST['email'], $_POST['email']);

    if (empty($user)) {
        $_SESSION['error'] = 'Email hoặc password chưa đúng!';

        header('Location: ' . BASE_URL_ADMIN . '?act=login-admin');
        exit();
    }

    $_SESSION['userAdmin'] = $user;

    header('Location: ' . BASE_URL_ADMIN);
    exit();

}

function LogoutAdmin()
{
    if (!empty($_SESSION['userAdmin'])) {
        session_destroy();
    }

    header('Location: ' . BASE_URL_ADMIN);
    exit();
}
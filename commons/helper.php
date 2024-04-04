<?php

// khai báo các hàm dùng global

if (!function_exists('require_file')) {

    function require_file($pathfolder)
    {
        $files = array_diff(scandir($pathfolder), ['.', '..']);

        foreach ($files as $file) {
            require_once $pathfolder . $file;
        }
    }
}

if (!function_exists('debug')) {
    function debug($data)
    {
        echo "<pre>";

        print_r($data);

        die;
    }
}

if (!function_exists('e404')) {
    function e404()
    {
        echo "404 - not found";
        die;
    }
}

if (!function_exists('upload_file')) {
    function upload_file($file)
    {
        $path = 'uploads/' . time() . '-' . basename($file['name']);
        $anhpath = time() . '-' . basename($file['name']);
        if (move_uploaded_file($file['tmp_name'], PATH_UPLOAD . $path)) {
            return $anhpath;
        }

        return null;
    }
}

if (!function_exists('middleware_auth_check')) {
    function middleware_auth_check($act, $arrRouteNeedAuth)
    {
        if ($act == 'login') {
            if (!empty($_SESSION['user'])) {
                header('Location: ' . BASE_URL);
                exit();
            }
        } elseif (empty($_SESSION['user']) && in_array($act, $arrRouteNeedAuth)) {
            header('Location: ' . BASE_URL . '?act=login');
            exit();
        }
    }
}

function list_of_price()
{
    $list = [
        1 => "Dưới 10 triệu",
        2 => "Từ 10 triệu đến 20 triệu",
        3 => "Từ 20 triệu đến 30 triệu",
        4 => "Trên 30 triệu"
    ];
    return $list;
}

if (!function_exists('calculate_total_order')) {
    function caculator_total_order($flag = true) {
        if (isset($_SESSION['cart'])) {
            $total = 0;
            foreach ($_SESSION['cart'] as $item) {
                $total += $item['GiaSP'] * $item['quantity']; // Accumulate the total
            }
            return $flag ? number_format($total)  : $total;
        }
        return 0;
    }
}

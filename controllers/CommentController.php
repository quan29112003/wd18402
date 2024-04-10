<?php

function BinhLuan($id)
{

    $BinhLuan = showOne2table('binhluan','sanpham','idsanpham','SanPhamID','idsanpham',$id);
    // $BinhLuan = showOne2('binhluan','idsanpham',$id);
    // debug($BinhLuan);
    if (!empty($_POST)) {

        // Get the current date and time
        $ngaybinhluan = date('Y-m-d H:i:s');

        $data = [
            'idsanpham' => $_POST['idsanpham'],
            'noidung' => $_POST['noidung'],
            'ngaybinhluan' => $ngaybinhluan, // Assign the variable here
            'username' => $_POST['username']
        ];

        insert('binhluan', $data);

        header('Location: ' . BASE_URL . '?act=chi-tiet&id=' . $id);

        exit;
    }
    require_once PATH_VIEW . 'binhluan/formbinhluan.php';
}

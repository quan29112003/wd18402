<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="boxcenter">
            <?php
                    if(isset($_SESSION['user'])){
                        extract($_SESSION['user']);
                        $tenadmin = $user;
                    ?>
                    <?php
                    }else{
                        $tenadmin = "";
                    ?>
                            <a href="<?php header('Location: dangnhap.php'); ?>"></a>
                    <?php }?>
        <div class="row mb headeradmin">
            <h1>ADMIN <?php echo $tenadmin?></h1>
        </div>
        <div class="row mb menu">
            <ul>
                <li><a href="index.php?act=lisdm">Quản lý danh mục</a></li>
                <li><a href="index.php?act=listsp">Quản lý sản phẩm</a></li>
                <li><a href="index.php?act=dskhachhang">Quản lý tài khoản</a></li>
                <li><a href="index.php?act=listlienhe">Quản lý Liên hệ</a></li>
                <li><a href="index.php?act=listord">Quản lý Đơn hàng</a></li>
                <li><a href="index.php?act=thongke">Thống kê</a></li>
                <li><a href="index.php?act=thoat">Log out Admin</a></li>
                
            </ul>
        </div>
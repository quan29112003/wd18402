<?php

function dashboard()
{

    $view = 'dasboard';

    $doanhSo = DoanhSo();
    $member = member();
    $SoLuong = SoLuongSP();
    $TongMember = 0;
    $TongDoanhSo = 0;
    $TongSoLuongSP = 0;
    $TongDonHang = 0;


    foreach ($doanhSo as $item1) {
        $TongDonHang += 1;
    }

    foreach ($doanhSo as $item) {
        $TongDoanhSo += $item['total_bill'];
    }

    foreach ($member as $value) {
        if ($value['type'] === 0) {
            $TongMember += 1;
        }
    }

    foreach ($SoLuong as $value1) {
            $TongSoLuongSP += $value1['SoLuong'];
    }



    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

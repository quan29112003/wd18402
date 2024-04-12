<?php

function dashboard()
{

    $view = 'dasboard';
    if (!empty($_POST)) {
        $created_at1 = $_POST['created_at1'];
        $created_at2 = $_POST['created_at2'];
        $doanhSo = DoanhSo($created_at1, $created_at2);
    } else {
        $doanhSo = DoanhSo("", "");
    }

    $orders = listAll('orders');
    $DonHang = DonHang();
    $binhluan = BinhLuan();
    $member = member();
    $SoLuongTonKho = SoLuongSPTonkho();
    $SoLuongBanRa = SoLuongSPBanRa();
    $TongMember = 0;
    $TongDoanhSo = 0;
    $TongSoLuongSPTonKho = 0;
    $TongSoLuongSPBanRa = 0;
    $DonHangDangXuLy = 0;
    $DonHangDaGiao = 0;
    $DonHangDaHuy = 0;
    $TongBinhLuan = 0;

    foreach ($binhluan as $value) {
        $TongBinhLuan += 1;
    }


    foreach ($DonHang as $item1) {
        if($item1['status_delivery'] == 3){
            $DonHangDaGiao += 1;
        }else if($item1['status_delivery'] == -1){
            $DonHangDaHuy += 1;
        }else{
            $DonHangDangXuLy += 1;
        }
    }

    foreach ($doanhSo as $item) {
        $TongDoanhSo += $item['total_bill'];
    }

    foreach ($member as $value) {
        if ($value['type'] === 0) {
            $TongMember += 1;
        }
    }

    foreach ($SoLuongTonKho as $value1) {
        $TongSoLuongSPTonKho += $value1['SoLuong'];
    }

    foreach ($SoLuongBanRa as $value1) {
        foreach ($orders as $value2) {
            if ($value1['order_id'] == $value2['id']) {
                // var_dump($value2['id']);

                if ($value2['status_delivery'] != -1) {
                    // var_dump($value2['status_delivery']);
                    $TongSoLuongSPBanRa += $value1['quantity'];
                }
            }
        }
    }





    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

<div class="row">
            <div class="row formtitle"><h1>DANH SÁCH ĐƠN HÀNG</h1></div>
            <form action="index.php?act=listord" method="post">
                            <input type="text" name="kyw">
                        <input type="submit" value="Search" name="listcheck">
            </form>
            <div class="row frmcontent">
                <form action="" method="post">
                    <div class="row mb10 frmlist">
                        <table>
                            <tr>
                                <th></th>
                                <th>MÃ ĐƠN HÀNG</th>
                                <th>TÊN KHÁCH HÀNG</th>
                                <th>EMAIL KHÁCH HÀNG</th>
                                <th>ĐỊA CHỈ</th>
                                <th>SĐT</th>
                                <th>THANH TOÁN</th>
                                <th>VẬN CHUYỂN</th>
                                <th>SỐ LƯỢNG SP</th>
                                <th>TỔNG TIỀN</th>
                                <th>TRẠNG THÁI</th>
                                <th></th>
                            </tr>
                            <?php
                                foreach($listOrder as $order){
                                    extract($order);
                                    $fixtt = "index.php?act=fixtt&id=".$id_order;
                                    $xembill = "index.php?act=xembill&id=".$id_order;
                                    // $linkdm = "index.php?act=xemdm&id=".$id;
                                    if($pttt==0){
                                        $thanhtoan = "Nhận hàng trả tiền";
                                    }else{
                                        $thanhtoan= "Thanh toán QR";
                                    }
                                    if($ptvc==0){
                                        $vanchuyen = "Nhanh";
                                    }else{
                                        $vanchuyen = "Hỏa Tốc";
                                    }
                                    if($trangthai==0){
                                        $trangthai1="Chưa giao hàng";
                                    }elseif($trangthai==1){
                                        $trangthai1 = "Đang giao hàng";
                                    }else{
                                        $trangthai1= "Đã giao hàng";
                                    }
                                    echo '<tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>'.$id.'</td>
                                    <td>'.$hoten.'</td>
                                    <td>'.$email.'</td>
                                    <td>'.$diachi.'</td>
                                    <td>'.$sdt.'</td>
                                    <td>'.$thanhtoan.'</td>
                                    <td>'.$vanchuyen.'</td>
                                    <td>'.$ngaydathang.'</td>
                                    <td>$'.$tongtien.'</td>
                                    <td>'.$trangthai1.'</td>
                                    <td>
                                    <a href="'.$xembill.'"><input type="button" value="Xem đơn hàng"></a>
                                    <a href="'.$fixtt.'"><input type="button" value="Cập nhật đơn hàng"></a></td>
                                </tr>';
                                }
                            ?>
                        </table>
                    </div>

                    <div class="row mb10">
                    <input type="button" value="Select All">
                    <input type="button" value="Del All">
                    <input type="button" value="Del pick">
                    <a href="index.php?act=adddanhmuc"><input type="button" value="Add"></div></a>
                </form>
            </div>
        </div>
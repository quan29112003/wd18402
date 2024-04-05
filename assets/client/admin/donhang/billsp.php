<?php
    // var_dump(is_array($sanpham));die();
    if(is_array($oneOrder)){
        extract($oneOrder);
    }
?>
<div class="row">
            <div class="row formtitle"><h1>Thông tin đơn hàng</h1></div>
            <div class="row frmcontent">
            <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                <div class="row mb10">
                    TÊN KHÁCH HÀNG<br>
                <input type="text" name="tensp" value="<?=$oneOrder['hoten']?>" disabled>
                </div>
                <div class="row mb10">
                    EMAIL KHÁCH HÀNG<br>
                <input type="text" name="giasp" value="<?=$oneOrder['email']?>" disabled>
                </div>
                <div class="row mb10">
                    SDT KHÁCH HÀNG<br>
                <input type="text" name="giasp" value="<?=$oneOrder['sdt']?>" disabled>
                </div>
                <div class="row mb10">
                    ĐỊA CHỈ KHÁCH HÀNG<br>
                <input type="text" name="giasp" value="<?=$oneOrder['diachi']?>" disabled>
                </div>
                <div class="row mb10 frmlist">
                <table>
                            <tr>
                                <th></th>
                                <th>TÊN SẢN PHẨM</th>
                                <th>GIÁ SP</th>
                                <th>SỐ LƯỢNG</th>
                            </tr>
                    <?php
                    foreach ($listPro as $pro) {
                        extract($pro);
                        echo'<tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>'.$name_pro.'</td>
                        <td>$'.$giamua.'</td>
                        <td>'.$soluong.'</td>
                    </tr>';
                    }
                    ?>
                    </table>
                </div>
                <div class="row mb10">
                    <a href="index.php?act=lisdh"><input type="button" value="LIST"></a>
                </div>
                </form>
            </div>
        </div>
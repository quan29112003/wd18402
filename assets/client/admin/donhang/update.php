<?php
    if(is_array($oneOrder)){
        extract($oneOrder);
    }
    ?>
<div class="row mb ">
    <div class="boxtrai mr">
        <div class="row mb">
                <div class="boxtitle">CẬP NHẬT TRẠNG THÁO</div>
                <div class=" row boxcontent formtaikhoan">
                    <form action="index.php?act=updatetrangthai" method="post">
                    <div class="row mb10">Trạng thái đơn hàng<br>
                        <select name="trangthai" id="">
                                <?php
                                foreach($listtrangthai as $trangthai){
                                    extract($trangthai);
                                    echo '<option value="'.$id.'">'.$trangthai.'</option>';
                                }
                                ?>
                        </select>
                    </div> 
                        <div class="row mb10">Email:<br>
                            <input type="email" name="email" value="<?=$oneOrder['email']?>" disabled><br>
                        </div>
                        <div class="row mb10">Tên khách hàng:
                            <input type="text" name="user" value="<?=$oneOrder['hoten']?>" disabled>
                        </div>
                        <div class="row mb10">Địa chỉ:
                            <input type="text" name="address" value="<?=$oneOrder['diachi']?>" disabled>
                        </div>
                        <div class="row mb10">Số Điện Thoại:
                            <input type="text" name="tel" value="<?=$oneOrder['sdt']?>" disabled>
                        </div>
                        <div class="row mb10">Số lượng sp:
                            <input type="text" name="tel" value="<?=$oneOrder['ngaydathang']?>" disabled>
                        </div>
                        <div class="row mb10">Phải thanh toán:
                            <input type="text" name="tel" value="$<?=$oneOrder['tongtien']?>" disabled>
                        </div>
                    </div><hr>
                        <div class="row mb10">
                            <input type="hidden" name="id" value="<?=$oneOrder['id_order']?>">
                            <input type="submit" value="Cập nhật trạng thái" name="capnhat">
                        </div>
                    </form>
                    </div>
                </div>

        </div>
    </div>
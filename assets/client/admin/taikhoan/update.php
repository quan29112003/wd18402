<?php
    if(is_array($tk)){
        extract($tk);
    }
    ?>
<div class="row mb ">
    <div class="boxtrai mr">
        <div class="row mb">
                <div class="boxtitle">CẬP NHẬT TÀI KHOẢN</div>
                <div class=" row boxcontent formtaikhoan">
                    <form action="index.php?act=updatetk" method="post">
                        <div class="row mb10">Email:
                            <input type="email" name="email" value="<?=$email?>"><br>
                        </div>
                        <div class="row mb10">Tên đăng nhập:
                            <input type="text" name="user" value="<?=$user?>">
                        </div>
                        <div class="row mb10">Mật Khẩu:
                            <input type="password" name="pass" value="<?=$pass?>">
                        </div>
                        <div class="row mb10">Địa chỉ:
                            <input type="text" name="address" value="<?=$address?>">
                        </div>
                        <div class="row mb10">Số Điện Thoại:
                            <input type="text" name="tel" value="<?=$tel?>">
                        </div>
                        <div class="row mb10">Danh mục<br>
                        <select name="vaitro" id="">
                                <?php
                                foreach($listvaitro as $vaitro){
                                    extract($vaitro);
                                    if($id_vaitro==$role) $s="selected"; else $s="";
                                    echo '<option value="'.$id_vaitro.'"'.$s.'>'.$ten_vai_tro.'</option>';
                                }
                                ?>
                        </select>
                    </div> 
                    </div>
                        <div class="row mb10">
                            <input type="hidden" name="id" value="<?=$id?>">
                            <input type="submit" value="Update" name="capnhat">
                            <input type="reset" value="Nhập lại">
                        </div>
                    </form>
                    <h3 class="thongbao">
                    <?php
                    if(isset($thongbao)&&($thongbao!="")){
                        echo $thongbao;
                    }
                    ?>
                    </h3>
                    </div>
                </div>

        </div>
    </div>
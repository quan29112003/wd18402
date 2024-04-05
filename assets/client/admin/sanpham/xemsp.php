<?php
    if(is_array($onesp)){
        extract($onesp);
    }
?>
<div class="row mb ">
    <div class="boxtrai mr">
        <div class="row mb">
            <?php
                extract($onesp);
                $img_path="upload/";
            ?>
                <div class="boxtitle">Thông tin sản phẩm</div>
                <div class=" row boxcontent">
                    <?php

						extract($anhsp);
							foreach ($anhsp as $anhsp) {
								$img = $anhsp['img_sp'];
								$hinhpath ="../upload/".$img;
						 echo '<a href="img/products/shoes/large/1.jpg" title="Photo title" data-effect="mfp-zoom-in"><img src="'.$hinhpath.'" alt="" class="img-fluid" width="200px"></a>';}
                    echo '<h1>Tên sản phẩm : '.$name.'</h1>';
                    echo '<h5>Giá sản phẩm : $'.$price.'</h5>';
                    echo '<h3>Mô tả sản phẩm :</h3>';
                    echo $mota;
                    ?>
                    </div>
                </div>
                <div class="row">
            <div class="row formtitle"><h1>DANH SÁCH BÌNH LUẬN</h1></div>
            <div class="row frmcontent">
                <form action="" method="post">
                    <div class="row mb10 frmlist">
                        <table>
                            <tr>
                                <th></th>
                                <th>NỘI DUNG BÌNH LUẬN</th>
                                <th>USER</th>
                                <th>NGÀY BÌNH LUẬN</th>
                                <th></th>
                            </tr>
                            <?php
                                foreach ($binhluan_cung_sp as $binhluan_cung_sp ) {
                                    extract($binhluan_cung_sp);
                                    $fixbl = "index.php?act=fixbl&id=".$id;
                                    $delbl = "index.php?act=delbl&id=".$id;
                                    echo '<tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>'.$noidung.'</td>
                                    <td>'.$user.'</td>
                                    <td>'.$ngaybinhluan.'</td>
                                    <td><a href="'.$delbl.'"><input type="button" value="Del"></a></td>
                                </tr>';
                                }
                            ?>
                        </table>
                    </div>

                    <div class="row mb10">
                    <input type="button" value="Select All">
                    <input type="button" value="Del All">
                    <input type="button" value="Del pick">
                </form>
            </div>
        </div>
    </div>
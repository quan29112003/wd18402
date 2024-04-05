<?php
    if(is_array($dm)){
        extract($dm);
    }

?>
<div class="row">
            <div class="row formtitle"><h1>CẬP NHẬT SẢN PHẨM</h1></div>
            <div class="row frmcontent">
                <form action="index.php?act=updatedm" method="post" enctype="multipart/form-data">
                    <div class="row mb10">MÃ LOẠI<br>
                        <input type="text" name="maloai" disabled></div>
                    
                <div class="row mb10">TÊN LOẠI<br>
                <input type="text" name="tenloai" value="<?php if(isset($name)&&($name!="")) echo $name?>"></div>
                <div class="row mb10">
                    <input type="hidden" name="id" value="<?php if(isset($id)&&($id!="")) echo $id?>">
                    <div class="row mb10">
                    HÌNH SẢN PHẨM<br>
                <input type="file" name="hinh" >
                <?=$hinh?>;
                </div>
                    <input type="submit" name="update" value="UPDATE">
                    <input type="reset" value="RESET">
                    <a href="index.php?act=lisdm"><input type="button" value="LIST"></a>
                </div>
                <?php
                if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                ?>
                </form>
            </div>
        </div>
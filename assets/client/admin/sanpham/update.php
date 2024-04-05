<?php
    // var_dump(is_array($sanpham));die();
    if(is_array($sanpham)){
        extract($sanpham);
        

    }else{
        echo "đang sai";
    }
    $hinhpath ="../upload/".$img;
    if(is_file($hinhpath)){
            $hinh="<img src='".$hinhpath."' height='80'>";
    }else{
            $hinh ="Can't Upload !";
    }
?>
<div class="row">
            <div class="row formtitle"><h1>UPDATE ITEM</h1></div>
            <div class="row frmcontent">
            <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                    <div class="row mb10">
                    <select name="iddm" id="">
                                <option value="0" selected>Tất cả</option>
                                <?php
                                foreach($listdanhmuc as $danhmuc){
                                    extract($danhmuc);
                                    if($iddm==$id) $s="selected"; else $s="";
                                    echo '<option value="'.$id.'"'.$s.'>'.$name.'</option>';
                                }
                                ?>
                        </select>
                    </div> 
                <div class="row mb10">
                    TÊN SẢN PHẨM<br>
                <input type="text" name="tensp" value="<?=$sanpham['name']?>">
                <input type="hidden" name="idsp" value="<?=$sanpham['id']?>">
                </div>
                <div class="row mb10">
                    GIA SẢN PHẨM<br>
                <input type="text" name="giasp" value="<?=$price?>">
                </div>
                <div class="row mb10">
                    HÌNH SẢN PHẨM<br>
                <input type="file" name="hinh" >
                <?=$hinh?>;
                </div>
                <div class="row mb10">
                    MÔ TẢ VỀ SẢN PHẨM<br>
                <textarea name="mota" cols="30" rows="10"><?=$mota?></textarea>
                </div>
                <div class="row mb10">
                    <input type="hidden" name="id" value="<?=$id?>">
                    <input type="submit" name="update" value="UPDATE">
                    <input type="reset" value="RESET">
                    <a href="index.php?act=listsp"><input type="button" value="LIST"></a>
                </div>
                <?php
                if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                ?>
                </form>
            </div>
        </div>
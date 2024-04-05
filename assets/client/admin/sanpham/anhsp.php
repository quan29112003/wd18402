<div class="row">
            <div class="row formtitle"><h1>THÊM ẢNH SẢN PHẨM</h1></div>
            <div class="row frmcontent">
            <link rel="stylesheet" href="view/css/style.css">
                <form action="index.php?act=addanhsp" method="post" enctype="multipart/form-data">
                    <div class="row mb10">Sản phẩm<br>
                        <select name="idsp" id="">
                                <?php
                                foreach($listsanpham as $sanpham){
                                    extract($sanpham);
                                    echo '<option value="'.$id.'">'.$name.'</option>';
                                }
                                ?>
                        </select>
                    </div>
                <div class="row mb10">
                    HÌNH SẢN PHẨM<br>
                <input type="file" name="hinh" >
                </div>
                <div class="row mb10">
                    <input type="submit" name="themanh" value="ADD">
                    <input type="reset" value="RESET">
                    <a href="index.php?act=listsp"><input type="button" value="LIST"></a>
                </div>
                <?php
                if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                ?>
                </form>
            </div>
        </div>
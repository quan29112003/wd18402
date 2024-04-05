<div class="row">
            <div class="row formtitle"><h1>THÊM MỚI LOẠI HÀNG HÓA</h1></div>
            <div class="row frmcontent">
                <form action="index.php?act=adddanhmuc" method="post" enctype="multipart/form-data">
                    <div class="row mb10">MÃ LOẠI<br>
                        <input type="text" name="maloai" disabled></div>
                <div class="row mb10">TÊN LOẠI<br>
                <input type="text" name="tenloai">
            </div>
                HÌNH Danh Mục<br>
                <input type="file" name="hinh" >
                </div>
                <div class="row mb10">
                    <input type="submit" name="themmoi" value="ADD">
                    <input type="reset" value="RESET">
                    <a href="index.php?act=lisdm"><input type="button" value="LIST"></a>
                </div>
                <?php
                if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                ?>
                </form>
            </div>
        </div>
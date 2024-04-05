<div class="row">
            <div class="row formtitle"><h1>DANH SÁCH LIÊN HỆ</h1></div>
            <div class="row frmcontent">
                <form action="" method="post">
                    <div class="row mb10 frmlist">
                        <table>
                            <tr>
                                <th></th>
                                <th>STT</th>
                                <th>TÊN KHÁCH HÀNG</th>
                                <th>SỐ ĐIỆN THOẠI KHÁCH HÀNG</th>
                                <th>THÔNG TIN / YÊU CẦU CỦA KHÁCH HÀNG</th>
                                <th></th>
                            </tr>
                            <?php
                                foreach($listlienhe as $lienhe){
                                    extract($lienhe);
                                    $dellh = "index.php?act=deldm&id=".$id;
                                    echo '<tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>'.$id_lienhe.'</td>
                                    <td>'.$hoten.'</td>
                                    <td>'.$phone.'</td>
                                    <td>'.$thongtin.'</td>
                                    <td><a href="'.$dellh.'" onclick="return checkDelete()"><input type="button" value="Phản Hồi"></a></td>
                                </tr>';
                                }
                            ?>
                        </table>
                    </div>

                    <div class="row mb10">
                </form>
                <script language="JavaScript" type="text/javascript">
                    function checkDelete(){
                        return confirm('Bạn chắc chắn về điều này?');
                    }
                    </script>
            </div>
        </div>
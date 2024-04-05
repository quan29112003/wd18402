<div class="row">
            <div class="row formtitle"><h1>DANH SÁCH TÀI KHOẢN</h1></div>
            <div class="row frmcontent">
                <form action="" method="post">
                    <div class="row mb10 frmlist">
                        <table>
                            <tr>
                                <th></th>
                                <th>MÃ TK</th>
                                <th>TÊN ĐĂNG NHẬP</th>
                                <th>Họ và tên</th>
                                <th>EMAIL</th>
                                <th>ĐỊA CHỈ</th>
                                <th>ĐIỆN THOẠI</th>
                                <th>VAI TRÒ</th>
                                <th></th>
                            </tr>
                            <?php
                                foreach($listtaikhoan as $taikhoan){
                                    extract($taikhoan);
                                    $fixtk = "index.php?act=fixtk&id=".$id;
                                    $deltk = "index.php?act=deltk&id=".$id;
                                    $vaitro = "";
                                    if($role==1){
                                        $vaitro = "Admin";
                                    }
                                    if($role==0){
                                        $vaitro = "Khách hàng";
                                    }
                                    if($role==2){
                                        $vaitro = "Nhân Viên";
                                    }
                                    echo '<tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>'.$id.'</td>
                                    <td>'.$user.'</td>
                                    <td>'.$hoten_user.'</td>
                                    <td>'.$email.'</td>
                                    <td>'.$address.'</td>
                                    <td>'.$tel.'</td>
                                    <td>'.$vaitro.'</td>
                                    <td><a href="'.$fixtk.'"><input type="button" value="Fix"></a>
                                    <a href="'.$deltk.'" onclick="return checkDelete()"><input type="button" value="Del"></a></td>
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
                <script language="JavaScript" type="text/javascript">
                    function checkDelete(){
                        return confirm('Bạn chắc chắn về điều này?');
                    }
                    </script>
            </div>
        </div>
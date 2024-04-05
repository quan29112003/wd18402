<div class="row">
            <div class="row formtitle"><h1>DANH SÁCH BÌNH LUẬN</h1></div>
            <div class="row frmcontent">
                <form action="" method="post">
                    <div class="row mb10 frmlist">
                        <table>
                            <tr>
                                <th></th>
                                <th>ID</th>
                                <th>NỘI DUNG BÌNH LUẬN</th>
                                <th>IDUSER</th>
                                <th>IDPRO</th>
                                <th>NGÀY BÌNH LUẬN</th>
                                <th></th>
                            </tr>
                            <?php
                                foreach($listbinhluan as $binhluan){
                                    extract($binhluan);
                                    $fixbl = "index.php?act=fixbl&id=".$id;
                                    $delbl = "index.php?act=delbl&id=".$id;
                                    echo '<tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>'.$id.'</td>
                                    <td>'.$noidung.'</td>
                                    <td>'.$iduser.'</td>
                                    <td>'.$idpro.'</td>
                                    <td>'.$ngaybinhluan.'</td>
                                    <td><a href="'.$fixbl.'"><input type="button" value="Fix"></a>
                                    <a href="'.$delbl.'"><input type="button" value="Del"></a></td>
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
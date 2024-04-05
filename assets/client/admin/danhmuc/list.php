<div class="row">
            <div class="row formtitle"><h1>DANH SÁCH LOẠI HÀNG HÓA</h1></div>
            <div class="row frmcontent">
                <form action="" method="post">
                    <div class="row mb10 frmlist">
                        <table>
                            <tr>
                                <th></th>
                                <th>HÌNH DANH MỤC</th>
                                <th>MÃ LOẠI</th>
                                <th>TÊN LOẠI</th>
                                <th></th>
                            </tr>
                            <?php
                                foreach($listdanhmuc as $danhmuc){
                                    extract($danhmuc);
                                    $fixdm = "index.php?act=fixdm&id=".$id;
                                    $deldm = "index.php?act=deldm&id=".$id;
                                    $linkdm = "index.php?act=xemdm&id=".$id;
                                    $hinhpath ="../upload/".$img_danhmuc;
                                    if(is_file($hinhpath)){
                                        $hinh="<img src='".$hinhpath."' height='100' width='100'>";
                                    }else{
                                        $hinh ="Can't Upload !";
                                    }
                                    echo '<tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>'.$hinh.'</td>
                                    <td>'.$id.'</td>
                                    <td>'.$name.'</td>
                                    <td><a href="'.$fixdm.'"><input type="button" value="Fix"></a>
                                    <a href="'.$deldm.'" onclick="return checkDelete()"><input type="button" value="Del"></a>
                                    <a href="'.$linkdm.'"><input type="button" value="Xem danh mục"></a></td>
                                </tr>';
                                }
                            ?>
                        </table>
                    </div>

                    <div class="row mb10">
                    <input type="button" value="Select All">
                    <input type="button" value="Del All">
                    <input type="button" value="Del pick">
                    <a href="index.php?act=adddanhmuc"><input type="button" value="Add"></div></a>
                </form>
                <script language="JavaScript" type="text/javascript">
                    function checkDelete(){
                        return confirm('Bạn chắc chắn về điều này?');
                    }
                    </script>
            </div>
        </div>
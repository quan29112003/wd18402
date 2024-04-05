<?php
    if(is_array($dm)){
        extract($dm);
    }
?>
<div class="row">
            <div class="row formtitle mb"><h1>LIST <?php echo $name?></h1></div>
            <div class="row frmcontent">
                <form action="" method="post">
                    <div class="row mb10 frmlist">
                        <table>
                            <tr>
                                <th></th>
                                <th>Id danh mục</th>
                                <th>MÃ SẢN PHẨM</th>
                                <th>TÊN SẢN PHẨM</th>
                                <th>HÌNH SẢN PHẨM</th>
                                <th>GIÁ SẢN PHẨM</th>
                                <th>LƯỢT XEM</th>
                                <th></th>
                            </tr>
                            <?php
                            foreach($listsanpham as $sanpham){
                                extract($sanpham);
                                    $fixsp = "index.php?act=fixsp&id=".$id;
                                    $delsp = "index.php?act=delsp&id=".$id;
                                    $hinhpath ="../upload/".$img;
                                    if(is_file($hinhpath)){
                                        $hinh="<img src='".$hinhpath."' height='80'>";
                                    }else{
                                        $hinh ="Can't Upload !";
                                    }

                                    echo '<tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>'.$iddanhmuc.'</td>
                                    <td>'.$id.'</td>
                                    <td>'.$name.'</td>
                                    <td>'.$hinh.'</td>
                                    <td>'.$price.'</td>
                                    <td>'.$luotxem.'</td>
                                    <td><a href="'.$fixsp.'"><input type="button" value="Fix"></a>
                                    <a href="'.$delsp.'"><input type="button" value="Del"></a></td>
                                </tr>';
                                }
                            ?>
                        </table>
                    </div>

                    <div class="row mb10">
                    <input type="button" value="Select All">
                    <input type="button" value="Del All">
                    <input type="button" value="Del pick">
                    <a href="index.php?act=addsanpham"><input type="button" value="Add"></div></a>
                </form>
            </div>
        </div>
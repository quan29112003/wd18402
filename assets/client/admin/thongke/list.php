<div class="row">
            <div class="row formtitle"><h1>CÁC ĐƠN HÀNG MỚI</h1></div>
            <div class="row frmcontent">
                    <div class="row mb10 frmlist">
                        <table>
                            <tr>
                                <th>MÃ ĐƠN HÀNG</th>
                                <th>TÊN NGƯỜI NHẬN</th>
                                <th>EMAIL</th>
                                <th>SĐT</th>
                                <th>TỔNG TIỀN</th>
                                <th>NGÀY ĐẶT</th>
                            </tr>
                            <?php
                                foreach($listOrder as $order){
                                    extract($order);
                                    echo '<tr>
                                    <td>'.$id_order.'</td>
                                    <td>'.$hoten.'</td>
                                    <td>'.$email.'</td>
                                    <td>'.$sdt.'</td>
                                    <td>$'.$tongtien.'</td>
                                    <td>'.$ngaydathang.'</td>
                                </tr>';
                                }
                            ?>
                        </table>
                    </div>

                    <div class="row mb10">
                </form>
            </div>
        </div>
    <div class="row">
            <div class="row formtitle"><h1>TOP 4 SẢN PHẨM CÓ LƯỢT XEM CAO NHẤT</h1></div>
            <div class="row frmcontent">
                    <div class="row mb10 frmlist">
                        <table>
                            <tr>
                                <th>MÃ SẢN PHẨM</th>
                                <th>HÌNH SẢN PHẨM</th>
                                <th>TÊN SẢN PHẨM</th>
                                <th>GIÁ SẢN PHẨM</th>
                                <th>LƯỢT XEM</th>
                            </tr>
                            <?php
                                foreach($sp_yeu_thich as $sp){
                                    extract($sp);
                                    $hinhpath ="../upload/".$img;
                                    if(is_file($hinhpath)){
                                        $hinh="<img src='".$hinhpath."' height='80'>";
                                    }else{
                                        $hinh ="Can't Upload !";
                                    }
                                    echo '<tr>
                                    <td>'.$id.'</td>
                                    <td>'.$hinh.'</td>
                                    <td>'.$name.'</td>
                                    <td>$'.$price.'</td>
                                    <td>'.$luotxem.'</td>
                                </tr>';
                                }
                            ?>
                        </table>
                    </div>

                    <div class="row mb10">
                </form>
            </div>
        </div>
        <div class="row">
            <div class="row formtitle"><h1>CÁC SẢN PHẨM MỚI VỀ</h1></div>
            <div class="row frmcontent">
                    <div class="row mb10 frmlist">
                        <table>
                            <tr>
                                <th>MÃ SẢN PHẨM</th>
                                <th>ẢNH SẢN PHẨM</th>
                                <th>TÊN SẢN PHẨM</th>
                                <th>GIÁ SẢN PHẨM</th>
                            </tr>
                            <?php
                                foreach($spnew as $sp){
                                    extract($sp);
                                    $hinhpath ="../upload/".$img;
                                    if(is_file($hinhpath)){
                                        $hinh="<img src='".$hinhpath."' height='80'>";
                                    }else{
                                        $hinh ="Can't Upload !";
                                    }
                                    echo '<tr>
                                    <td>'.$id.'</td>
                                    <td>'.$hinh.'</td>
                                    <td>'.$name.'</td>
                                    <td>$'.$price.'</td>
                                </tr>';
                                }
                            ?>
                        </table>
                    </div>

                    <div class="row mb10">
                </form>
            </div>
        </div>
<?php
    session_start();
    include "../model/pdo.php";
    include "../model/sanpham.php";
    include "../global.php";
    include "../model/danhmuc.php";
    include "../model/taikhoan.php";
    include "../model/lienhe.php";
    include "../model/binhluan.php";
    include "../model/img_sp.php";
    include "../model/order.php";
    if ($dsdm = loadall_danhmuc()) {
        if(!empty($_SESSION['cart'])){
            $cart = $_SESSION['cart'];
            $productId = array_column($cart,'id');
            // var_dump($productId);
            $idList = implode(',',$productId);
            $dataDb = loadone_sanphamCart($idList);
        }else{
            $dataDb = '';
        }
        include "view/header.php";
    }
    $spnew = loadall_sanpham_home();
    $spyeuthich = loadall_sanpham_yeuthich();
    if((isset($_GET['act']))&&($_GET['act']!="")){
        $act = $_GET['act'];
        switch ($act) {
            case 'sanpham':
                if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
                    $kyw =$_POST['kyw'];
                }else{
                    $kyw ="";
                }
                if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
                    $iddm = $_GET['iddm'];
                }else{
                    $iddm =0;
                }
                $dm =loadone_danhmuc($iddm);
                $dssp = loadall_sanpham($kyw,$iddm);
                $tendm = load_ten_dm($iddm);
                include "sanpham/listdoc.php";
                break;
            case 'sanphamyeuthich' :
                $spyeuthich = loadall_sanpham_yeuthich();
                include "sanpham/spyeuthich.php";
                break;
            case 'sanphamnew' :
                $spnew = loadall_sanpham_home();
                include "sanpham/spnew.php";
                break;
            case 'sanphamct':
                if(isset($_GET['idsp'])&&($_GET['idsp']>0)){
                    $id = $_GET['idsp'];
                    $onesp = loadone_sanpham($id);
                    extract($onesp);
                    $anhsp = load_anhsp_cungsp($id);
                    extract($anhsp);
                    $luotxem++;
                    update_luotxem($luotxem,$id);
                    $img_sp = $img;
                    $iddm = $iddanhmuc;
                    $sp_cung_loai = load_sanpham_cungloai($id,$iddm);
                    $binhluan_cung_sp = load_binhluan_cungsanpham($id);
                    include "spchitiet.php";
                }else{
                    include "view/trangchu.php";
                }
                break;
            case 'gioithieu':
                include "view/gioithieu.php";
                break;
            case 'lienhe':
                    if(isset($_POST['guilienhe'])&&($_POST['guilienhe'])){
                        $hoten = $_POST['hoten'];
                        $phone = $_POST['phone'];
                        $thongtin = $_POST['thongtin'];
                        insert_lienhe($hoten,$phone,$thongtin);
                        $thongbao ="Gửi thông tin liên hệ thành công!!";
                    }else{
                        $thongbao="";
                    }
                    include "view/lienhe.php";
                    break;
            case 'thoat':
                        unset($_SESSION['user']);
                        include "view/trangchu.php";
                        break;
            case 'dangky':
                if(isset($_POST['dangky'])&&($_POST['dangky'])){
                    $email = $_POST['email'];
                    $user =$_POST['user'];
                    $pass = $_POST['password'];
                    $hoten_user = $_POST['hoten_user'];
                    $address = $_POST['address'];
                    $tel = $_POST['tel'];
                    $listtaikhoan= loadall_taikhoan();
                    foreach ($listtaikhoan as $tk) {
                    extract($tk);
                    if($user===$tk['user'] or $pass<=8){
                        $thongbao2 = "Tên tài khoản bị trùng, vui lòng dùng tên khác !!";
                        $thongbao3= "Mật khẩu phải lớn hơn 8 kí tự !!";
                    }else{
                    insert_taikhoan($email,$user,$pass,$hoten_user,$address,$tel);
                    $thongbao = "Đã đăng kí thành công, vui lòng đăng nhập để sử dụng !!";
                    }
                    }
                }
                        include "taikhoan/dangnhap_dangky.php";
                        break;
            case 'dangnhap':
                if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                    $user =$_POST['user'];
                    $pass = $_POST['pass'];
                    $checkuser = check_user($user,$pass);
                    if(is_array($checkuser)){
                        $_SESSION['user'] = $checkuser;
                        include_once "view/trangchu.php";
                    }else{
                        $thongbao1 = "Tài khoản hoặc mật khẩu không chính xác. Vui lòng kiểm tra lại !";
                    }
                }
                    include "taikhoan/dangnhap_dangky.php";
                    break;
            case 'edit_taikhoan':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $user =$_POST['user'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $tel = $_POST['tel'];
                    $id = $_POST['id'];
                    $hoten_user = $_POST['hoten_user'];
                    update_taikhoan($id,$user,$hoten_user,$pass,$email,$address,$tel);
                    $_SESSION['user'] = check_user($user,$pass);
                    header('Location: index.php?act=edit_taikhoan');
                }
                    include "view/taikhoan/edit_taikhoan.php";
                    break; 
            case 'quenmk':
                if(isset($_POST['guiemail'])&&($_POST['guiemail'])){
                    $email = $_POST['email'];
                    $check_email = check_email($email);
                    if(is_array($check_email)){
                        $thongbao = "Mật khẩu của bạn là: ".$check_email['pass'];
                    }else{
                        $thongbao = "Email này không tồn tại";
                    }
                }
                    include "view/taikhoan/quenmk.php";
                    break; 
            case 'lienhe':
                        include "lienhe.php";
                        break;
            case 'gioithieu':
                        include "gioithieu.php";
                        break;
            case 'binhluan':
                if(isset($_POST['dangbinhluan'])&&($_POST['dangbinhluan'])){
                    $idsp = $_POST['idsp'];
                    $tieude = $_POST['tieude'];
                    $user = $_POST['username'];
                    $noidung = $_POST['binhluan'];
                    $ngaybinhluan = date('h:i:sa d/m/Y');
                    insert_binhluan($idsp,$tieude,$user,$noidung,$ngaybinhluan);
                    $thongbao = "Gửi bình luận thành công !";
                }
                        include "binhluan/formbinhluan.php";
                        break;
            case 'giohang' :
                if(!empty($_SESSION['cart'])){
                    $cart = $_SESSION['cart'];
                    $productId = array_column($cart,'id');
                    // var_dump($productId);
                    $idList = implode(',',$productId);

                    $dataDb = loadone_sanphamCart($idList);
                }
                include "giohang/giohang.php";
                break;
            case 'thanhtoan' :
                if(isset($_SESSION['user'])&&($_SESSION['user'])){
                    if (isset($_SESSION['cart'])) {
                        $cart = $_SESSION['cart'];}
                    include "giohang/thanhtoan.php";
            }else{
                include "taikhoan/dangnhap_dangky.php";
            }
                break;
            case 'confirmthanhtoan' :
                if (isset($_SESSION['cart'])) {
                    $cart = $_SESSION['cart'];    
                if(isset($_POST['confirmthanhtoan'])&&($_POST['confirmthanhtoan'])){
                    // var_dump($_POST['idsp']);die();
                    $hoten_user = $_POST['tenuser'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $tel = $_POST['tel'];
                    $ptthanhtoan = $_POST['ptthanhtoan'];
                    $ptvanchuyen = $_POST['ptvanchuyen'];
                    date_default_timezone_set('Asia/Ho_Chi_Minh');
                    $currentDateTime = date('Y-m-d H:i:s');
                    if (isset($_SESSION['user'])) {
                        $id_user = $_SESSION['user']['id'];
                    } else {
                        $id_user = 0;
                    }
                        $idBill = addOrder($id_user, $hoten_user, $tel, $email, $address, $_SESSION['resultTotal'], $ptthanhtoan,$ptvanchuyen,$currentDateTime);
                    foreach ($cart as $item) {
                        addOrderDetail($idBill, $item['name'], $item['price'], $item['quantity'], $item['price'] * $item['quantity']);
                    }
                    $oneOrder = loadone_order($idBill);
                    unset($_SESSION['cart']);
                    include "taikhoan/thanhtoanthanhcong.php";
                }
            }
                break;
            case 'kiemtradonhang':
                if(isset($_SESSION['user'])&&($_SESSION['user'])){
                    extract($_SESSION['user']);
                    $id_user = $_SESSION['user']['id'];
                    $listorder = loadall_order_id($id_user);
                    include "taikhoan/kiemtradonhang.php";
                }
                break;
            case 'xemspdonhang':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $id = $_GET['id'];
                    $oneOrder = loadone_order($_GET['id']);
                    extract($oneOrder);
                    $listPro = loadall_pro_id($id_order);
                }
                include "taikhoan/xemspdonhang.php";
                break;
            case 'qltk':
                include "taikhoan/qltk.php";
                break;
            case 'updatetk' :
                    if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                        $address = $_POST['address'];
                        $id = $_POST['id'];
                        $hoten_user = $_POST['hoten_user'];
                        update_taikhoan($id,$hoten_user,$address);
                        $thongbao = "Cap nhat thanh cong";
                    }
                    include "taikhoan/qltk.php";
                    break;
            default:
                    include "index.php";
                break;
        }
    }else{
    include "view/trangchu.php";
    }
    if ($dsdm = loadall_danhmuc()) {
        include "view/footer.php";
    }
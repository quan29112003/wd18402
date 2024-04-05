<?php 
    session_start();
include "../model/pdo.php";
include "header.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/binhluan.php";
include "../model/thongke.php";
include "../model/vaitro.php";
include "../model/lienhe.php";
include "../model/img_sp.php";
include "../model/order.php";
//controler
if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch($act){
        case 'adddanhmuc' :
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                $tenloai = $_POST['tenloai'];
                $hinh = $_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if(move_uploaded_file($_FILES["hinh"]["tmp_name"],$target_file)){
                        // echo "File". htmlspecialchars(basename($_FILES["fileToUpLoad"]["name"])). "đã được tải lên";
                    }else{
                        // echo "Không tải được file lên";
                    }
                    insert_danhmuc($tenloai,$hinh);
                $thongbao = "them thanh cong";
            }
            include "danhmuc/add.php";
            break;
        case 'lisdm' :
            $listdanhmuc= loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'deldm' :
            if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_danhmuc($_GET['id']);
            }
            $listdanhmuc= loadall_danhmuc();
            include "danhmuc/list.php";
                break;
        case 'fixdm' :
            if(isset($_GET['id'])&&($_GET['id']>0)){
            $dm =loadone_danhmuc($_GET['id']);
            }
                    include "danhmuc/update.php";
                    break;
        case 'updatedm' :
            if(isset($_POST['update'])&&($_POST['update'])){
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                $hinh = $_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if(move_uploaded_file($_FILES["hinh"]["tmp_name"],$target_file)){
                        // echo "File". htmlspecialchars(basename($_FILES["fileToUpLoad"]["name"])). "đã được tải lên";
                    }else{
                        // echo "Không tải được file lên";
                    }
                    update_danhmuc($id,$tenloai,$hinh);
                $thongbao = "Cap nhat thanh cong";
            }
            $listdanhmuc= loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'xemdm':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $dm =loadone_danhmuc($_GET['id']);
                }
                $iddm = $_GET['id'];
                $listsanpham= loadall_sanpham_danhmuc($iddm);
                include "danhmuc/xemdanhmuc.php";
                break;

            /* controller sản phẩm*/

            case 'addsanpham' :
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    $mota = $_POST['mota'];
                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if(move_uploaded_file($_FILES["hinh"]["tmp_name"],$target_file)){
                        // echo "File". htmlspecialchars(basename($_FILES["fileToUpLoad"]["name"])). "đã được tải lên";
                    }else{
                        // echo "Không tải được file lên";
                    }
                    insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm);
                    $thongbao = "them thanh cong";
                }
                $listdanhmuc= loadall_danhmuc();
                include "sanpham/add.php";
                break;
            case 'listsp' :
                if(isset($_POST['listok'])&&($_POST['listok'])){
                    $kyw = $_POST['kyw'];
                    $iddm = $_POST['iddm'];
                }else{
                    $kyw = '';
                    $iddm = 0;
                }
                $listdanhmuc= loadall_danhmuc();
                $listsanpham= loadall_sanpham($kyw,$iddm);
                include "sanpham/list.php";
                break;
            case 'delsp' :
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_sanpham($_GET['id']);
                }
                $listsanpham= loadall_sanpham("",0);
                include "sanpham/list.php";
                    break;
            case 'fixsp' :
                if(isset($_GET['id'])&&($_GET['id']>0)){
                $sanpham =loadone_sanpham($_GET['id']);
                }
                    $listdanhmuc= loadall_danhmuc();
                        include "sanpham/update.php";
                        break;
            case 'updatesp' :
                if(isset($_POST['update'])&&($_POST['update'])){
                    // var_dump($_POST['idsp']);die();
                    $id = $_POST['idsp'];
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    $mota = $_POST['mota'];
                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if(move_uploaded_file($_FILES["hinh"]["tmp_name"],$target_file)){
                        // echo "File". htmlspecialchars(basename($_FILES["fileToUpLoad"]["name"])). "đã được tải lên";
                    }else{
                        // echo "Không tải được file lên";
                    }
                    update_sanpham($id,$tensp,$giasp,$mota,$hinh,$iddm);
                    $thongbao = "Cap nhat thanh cong";

                }

                $listdanhmuc = loadall_danhmuc();
                $listsanpham= loadall_sanpham("",0);
                include "sanpham/list.php";
                break;
            case 'xemsp':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $id = $_GET['id'];
                    $onesp = loadone_sanpham($id);
                    $binhluan_cung_sp = load_binhluan_cungsanpham($id);
                    $anhsp = load_anhsp_cungsp($id);
                }
                include "sanpham/xemsp.php";
                break;
            case 'addanhsp':
                if(isset($_POST['themanh'])&&($_POST['themanh'])){
                    $idsp = $_POST['idsp'];
                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if(move_uploaded_file($_FILES["hinh"]["tmp_name"],$target_file)){
                        // echo "File". htmlspecialchars(basename($_FILES["fileToUpLoad"]["name"])). "đã được tải lên";
                    }else{
                        // echo "Không tải được file lên";
                    }
                    insert_anhsp($idsp,$hinh);
                    $thongbao = "them thanh cong";
                }
                $listsanpham = loadall_sanpham("",0);
                include "sanpham/anhsp.php";
                break;
            case 'dangnhap':
                if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                    $user =$_POST['user'];
                    $pass = $_POST['pass'];
                    $checkuser = check_user($user,$pass);
                    if(is_array($checkuser)){
                        $_SESSION['user'] = $checkuser;
                        if($_SESSION['user']['role']==1){
                        // $thongbao = "Bạn đã đăng nhập thành công !!";
                        header('Location: index.php');}
                    }else{
                        header('Location:dangnhap.php');
                    }
                }
                    break;
            case 'thoat':
                        unset($_SESSION['user']);
                        header('Location : dangnhap.php');
                        break;
            case 'dskhachhang' :
                    $listtaikhoan= loadall_taikhoan();
                    include "taikhoan/list.php";
                    break;
            case 'thongke' :
                    $sp_yeu_thich = loadall_sanpham_yeuthich();
                    $spnew = loadall_sanpham_home();
                    $listOrder = loadall_donhang_moi();
                    include "thongke/list.php";
                    break;
            case 'dsbinhluan' :
                    $listbinhluan= loadall_binhluan(0);
                    include "binhluan/list.php";
                    break;
            case 'fixtk' :
                if(isset($_GET['id'])&&($_GET['id']>0)){
                $tk = loadone_tk($_GET['id']);
                }
                $listvaitro = loadall_vaitro();
                    include "taikhoan/update.php";
                    break;
            case 'updatetk' :
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $user =$_POST['user'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $tel = $_POST['tel'];
                    $id = $_POST['id'];
                    $role = $_POST['vaitro'];
                    $hoten_user = $_POST['hoten_user'];
                    update_taikhoan_admin($id,$user,$hoten_user,$pass,$email,$address,$tel,$role);
                    $thongbao = "Cap nhat thanh cong";
                }
                $listtaikhoan= loadall_taikhoan();
                $listvaitro = loadall_vaitro();
                include "taikhoan/list.php";
                break;
            case 'deltk' :
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_taikhoan($_GET['id']);
                }
                $listtaikhoan= loadall_taikhoan();
                include "taikhoan/list.php";
                    break;
            case 'listlienhe' :
                $listlienhe= loadall_lienhe();
                include "qllienhe/list.php";
                break;
            case 'xembill':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $id = $_GET['id'];
                    $oneOrder = loadone_order($_GET['id']);
                    extract($oneOrder);
                    $listPro = loadall_pro_id($id_order);
                }
                include "donhang/billsp.php";
                break;
            case 'fixtt':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $oneOrder = loadone_order($_GET['id']);
                }
                $listtrangthai = loadall_trangthai();
                include "donhang/update.php";
                break;
            case 'updatetrangthai' :
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    // var_dump($_POST['idsp']);die();
                    $id = $_POST['id'];
                    $trangthai = $_POST['trangthai'];
                    update_trangthai($trangthai,$id);
                }
                $listOrder = loadall_order();
                include "donhang/list.php";
                break;
        /* controler don hang*/
        case 'listord' :
                if(isset($_POST['listcheck'])&&($_POST['listcheck'])){
                    $kyw = $_POST['kyw'];
                }else{
                    $kyw = '';
                }
                $listOrder= loadall_ord_kw($kyw);
                include "donhang/list.php";
                break;
        default:
            break;
    }
}else{
}

include "footer.php";
?>
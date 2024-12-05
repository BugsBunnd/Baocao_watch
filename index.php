<?php
    session_start();
    if(!isset($_SESSION['mycard'])) $_SESSION['mycard']= [];


    include("model/pdo.php");
    include("model/view_index.php");
    include("model/chitietsanpham.php");
    include("model/view_loaddanhmuc.php");
    include("model/dathang.php");
    include("model/search.php");
    include("model/cart.php");
    include("view/header.php");
    if ((isset($_GET["act"])) && (($_GET["act"]))) {
        $act = $_GET['act'];
        switch ($act) {

            case 'xuhuong':
                $list_xuhuong = load_xuhuong();
                include('view/xuhuong/xuhuong.php');
                break;

            case 'nam':
                $list_nam = load_nam();
                include('view/nam/nam.php');
                break;
            
            case 'nu':
                $list_nu = load_nu();
                include('view/nu/nu.php');
                break;

            case 'luxury':
                $list_luxury = load_luxury();
                include('view/luxury/luxury.php');
                break;

            case 'cucaocap':
                $list_cucapcap = load_cucaocap();
                include('view/cucaocap/cucaocap.php');
                break;
            
            case 'chitietsanpham':
                if(isset($_GET['id']) && ($_GET['id']>0)){
                    $id = $_GET['id'];
                    $sanpham = chitietsp($id);
                }
                include 'view/chitietsanpham/chitietsanpham.php';
                break;


            case 'search':
                if(isset($_POST['kyw'])&&($_POST['kyw']!=""))
                {
                    $kyw = $_POST["kyw"];
                    $list_search = search($kyw);

                    if(is_array($list_search)){
                        $soluong = count($list_search);
                        if($soluong> 0){
                            include('view/search/search.php');
                            break;
                        }else{
                            include('view/search/no_search.php');
                            break; 
                        }
                    }
                }

            case 'giohang':
                if(isset($_POST['muangay'])){
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $anhsp = $_POST['anhsp'];
                    $giaban = $_POST['giaban'];
                    $giagoc = $_POST['giagoc'];
                    $soluong = 1;
                    $spadd = [$id,$name,$anhsp,$giaban,$giagoc,$soluong];
                    array_push($_SESSION['mycard'],$spadd);
                }
                include('view/giohang/giohang.php');
                break;


            case 'delcart':
                if (isset($_GET['idcart'])) {
                    $idcart = intval($_GET['idcart']); // Chuyển đổi ID thành số nguyên để tránh lỗi
                    if (isset($_SESSION['mycard'][$idcart])) {
                        array_splice($_SESSION['mycard'], $idcart, 1); // Xóa phần tử tại vị trí $idcart
                    }
                } else {
                    $_SESSION['mycard'] = []; // Nếu không có ID, xóa toàn bộ giỏ hàng
                }
                header('location:index.php?act=giohang');
                break;

            case 'dathang':
                if(isset($_POST['dathang'])){
                    $gioitinh = $_POST['gioitinh'];
                    $name = $_POST['name'];
                    $sodt  = $_POST['sodt'];
                    $email  = $_POST['email'];
                    $diachi  = $_POST['diachi'];
                    $ghichu  = $_POST['ghichu'];
                    $tongtien = $_POST['tongtien'];
                    $pttt  = $_POST['pttt'];

                    $idbill =  insert_donhang($gioitinh,$name,$diachi,$ghichu,$sodt,$email,$tongtien,$pttt);

                    //lấy dữ liệu từ session['mycard] add vaof dhsanpham sql
                    foreach ($_SESSION['mycard'] as $cart){
                        insert_cart($cart[1],$cart[2],$cart[3],$cart[5],$idbill);
                    }
                    $_SESSION['mycard'] = [];
                    include ('view/giohang/dathangthanhcong.php');
                }
                break;

            default:
                //loadall sản phẩm trang chủ 
                $listsanpham = loadall_sanpham_limit12();
                include("view/home.php");
                break;
        }

    }else{
        //loadall sản phẩm trang chủ 
        $listsanpham = loadall_sanpham_limit12();
        include("view/home.php");
        
    }

    include("view/footer.php");

?>
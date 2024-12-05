<?php
    include("model/pdo.php");
    include("model/view_index.php");
    include("model/chitietsanpham.php");
    include("model/view_loaddanhmuc.php");
    include("model/search.php");
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
            
            case 'giohang':
                include('view/giohang/giohang.php');
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
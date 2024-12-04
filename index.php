<?php
    include("model/pdo.php");
    include("model/view_index.php");
    include("view/header.php");
    if ((isset($_GET["act"])) && (($_GET["act"]))) {
        $act = $_GET['act'];
        switch ($act) {

            case 'xuhuong':
                include('view/xuhuong/xuhuong.php');
                break;

            case 'nam':
                include('view/nam/nam.php');
                break;
            
            case 'nu':
                include('view/nu/nu.php');
                break;

            case 'luxury':
                include('view/luxury/luxury.php');
                break;

            case 'cucaocap':
                include('view/cucaocap/cucaocap.php');
                break;
            
            case 'giohang':
                include('view/giohang/giohang.php');
                break;
    
            case 'chitietsanpham':
                if(isset($_GET['id']) && ($_GET['id']>0)){
                    $id = $_GET['id'];
                    
                }
                include 'view/chitietsanpham/chitietsanpham.php';
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
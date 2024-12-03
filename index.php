<?php
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
    
            default:
                include("view/home.php");
                break;
        }

    }else{
        include("view/home.php");
    }

    include("view/footer.php");

?>
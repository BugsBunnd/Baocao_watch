<?php

    include "../model/pdo.php";
    include "header.php";
    //controler

    if (isset($_GET['act'])){
        $act = $_GET['act'];
        switch ($act){

            case 'danhmuc':
                $sql = "select * from danhmuc order by name";
                $listdanhmuc = pdo_query($sql);
                include 'danhmuc/danhmuc.php';
                break;

            case 'adddm':
                //check click or 0
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])){
                    $name = $_POST['name'];
                    $ghichu = $_POST['ghichu'];

                    $sql = "INSERT INTO danhmuc (name, ghichu) VALUES ('$name', '$ghichu')";
                    pdo_execute($sql);
                    $thongbao= "Thêm danh mục thành công!";


                }
                // Sau khi thêm thành công, chuyển hướng về trang danh mục
                header("Location: index.php?act=danhmuc");
                exit; // Lưu ý phải có exit sau header để dừng chương trình   
                $sql = "select * from danhmuc order by name";
                $listdanhmuc = pdo_query($sql);
                include 'danhmuc/danhmuc.php';
                break;
            
            case 'donhang':
                include 'donhang/donhang.php';
                break;

            case 'sanpham':
                include 'sanpham/sanpham.php';
                break;
            
            default:
                include "home.php";
                break;
            }


    }else{
        include "home.php";
    }


    include "footer.php";

?>
<?php

    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "header.php";
    //controler

    if (isset($_GET['act'])){
        $act = $_GET['act'];
        switch ($act){

            case 'danhmuc':
                $listdanhmuc = loadall();
                include 'danhmuc/danhmuc.php';
                break;

            case 'adddm':
                //check click or 0
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])){
                    $name = $_POST['name'];
                    $ghichu = $_POST['ghichu'];
                    
                    insert_danhmuc($name,$ghichu);
                    // $sql = "INSERT INTO danhmuc (name, ghichu) VALUES ('$name', '$ghichu')";
                    // pdo_execute($sql);
                    $thongbao= "Thêm danh mục thành công!";
                }
                // Sau khi thêm thành công, chuyển hướng về trang danh mục
                header("Location: index.php?act=danhmuc");
                exit; // Lưu ý phải có exit sau header để dừng chương trình   
                break;


            case 'xoadm':
                if(isset($_GET['id']) && ($_GET['id']>0)){
                    $id = $_GET['id'];
                    delete_danhmuc($id);
                }
                header("Location: index.php?act=danhmuc");
                exit;  
                break;

            case "showsp_dm":

                //nếu id có tồn tại và >0
                if(isset($_GET['id']) && ($_GET['id']>0)){
                    //get ra 1 sp để edit
                    $sql = "select * from danhmuc where id=".$_GET['id'];
                    $dm = pdo_query_one($sql);
                }
                include 'danhmuc/updatedm.php';
                break;

            case "updatedm":
                if(isset($_POST["edit_sp"]) && ($_POST["edit_sp"])){
                    $id = $_POST["id"];
                    $name = $_POST["name_edit"];
                    $ghichu = $_POST["ghichu_edit"];
                    updatedm($id,$name,$ghichu);
                    $thongbao= true;

                }

                $listdanhmuc = loadall();
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
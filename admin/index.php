<?php

    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "header.php";
    //controler

    if (isset($_GET['act'])){
        $act = $_GET['act'];
        switch ($act){
            // Danh mục
            case 'danhmuc':
                $listdanhmuc = loadall_danhmuc();
                include 'danhmuc/danhmuc.php';
                break;

            case 'adddm':
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])){
                    $name = $_POST['name'];
                    $ghichu = $_POST['ghichu'];
                    insert_danhmuc($name,$ghichu);
                }
                $listdanhmuc = loadall_danhmuc();
                include 'danhmuc/danhmuc.php';
                break;


            case 'xoadm':
                if(isset($_GET['id']) && ($_GET['id']>0)){
                    $id = $_GET['id'];
                    delete_danhmuc($id);
                }
                $listdanhmuc = loadall_danhmuc();
                include 'danhmuc/danhmuc.php';
                break;

            case "showsp_dm":
                if(isset($_GET['id']) && ($_GET['id']>0)){
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
                }
                $listdanhmuc = loadall_danhmuc();
                include 'danhmuc/danhmuc.php';
                break;

            // Sản phẩm
            case 'sanpham':
                $listsanpham=loadall_sanpham(); 
                $listdanhmuc = loadall_danhmuc(); 
                include 'sanpham/sanpham.php';
                break;

            case 'addsp':
                if (isset($_POST['add_sp']) && ($_POST['add_sp'])){
                    $name = $_POST['name'];
                    $giagoc = $_POST['giagoc'];
                    $giaban = $_POST['giaban'];
                    $tilegiam = $_POST['tilegiam'];
                    $danhmuc = $_POST['danhmuc'];
                    $anhsp = $_POST['anhsp'];
                    $anhchitiet = $_POST['anhchitiet'];
                    $xuatxu = $_POST['xuatxu'];
                    $tenthuonghieu = $_POST['tenthuonghieu'];
                    $doituong = $_POST['doituong'];
                    $loaimay = $_POST['loaimay'];
                    $chatlieuday = $_POST['chatlieuday'];
                    $khangnuoc = $_POST['khangnuoc'];
                    $chatlieukinh = $_POST['chatlieukinh'];

                    $target_dir = "../uploads/"; // Mục lưu ảnh
                    $anhsp = $_FILES['anhsp']['name']; // Lấy tên file
                    $target_file = $target_dir . basename($anhsp);

                    if (move_uploaded_file($_FILES['anhsp']['tmp_name'], $target_file)) {
                        echo "Ảnh sản phẩm đã được upload thành công: " . $anhsp;
                        } else {
                            echo "Lỗi khi upload ảnh sản phẩm.";
                        }

                    insert_sanpham($name, $giagoc, $giaban, $tilegiam, $danhmuc, $anhsp, $anhchitiet, $xuatxu, $tenthuonghieu, $doituong, $loaimay, $chatlieuday, $khangnuoc, $chatlieukinh);
                }
                $listdanhmuc = loadall_danhmuc();
                include 'danhmuc/danhmuc.php';
                break;

            case 'xoasp':
                if(isset($_GET['id']) && ($_GET['id']>0)){
                    $id = $_GET['id'];
                    delete_sanpham($id);
                }
                $listsanpham=loadall_sanpham(); 
                include 'sanpham/sanpham.php';
                break;
        

            case 'donhang':
                include 'donhang/donhang.php';
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
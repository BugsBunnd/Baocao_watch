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
                    $xuatxu = $_POST['xuatxu'];
                    $tenthuonghieu = $_POST['tenthuonghieu'];
                    $doituong = $_POST['doituong'];
                    $loaimay = $_POST['loaimay'];
                    $chatlieuday = $_POST['chatlieuday'];
                    $khangnuoc = $_POST['khangnuoc'];
                    $chatlieukinh = $_POST['chatlieukinh'];

                    //lưu ảnh sản phẩm
                    $target_dir = "../uploads/"; // Mục lưu ảnh
                    $anhsp = $_FILES['anhsp']['name']; // Lấy tên file
                    // Tạo tên file duy nhất bằng cách thêm timestamp
                    $anhsp_name = time() . '_' . basename($anhsp); // Thêm timestamp vào tên file
                    $target_file_anhsp = $target_dir . $anhsp_name;
                    move_uploaded_file($_FILES['anhsp']['tmp_name'], $target_file_anhsp);

                    // Lưu ảnh chi tiết sản phẩm
                    if (isset($_FILES['anhchitiet'])) {
                        $anhchitiet = $_FILES['anhchitiet']; // Mảng chứa thông tin các file

                        // Duyệt qua tất cả các file được upload
                        $file_paths = array(); // Mảng lưu đường dẫn các file đã upload thành công
                        for ($i = 0; $i < count($anhchitiet['name']); $i++) {
                            $filename = $anhchitiet['name'][$i]; // Tên file gốc
                            $unique_name = time() . '_' . basename($filename); // Tạo tên duy nhất cho file
                            $target_anhchitiet = $target_dir . $unique_name; // Đường dẫn lưu file

                            // Di chuyển file vào thư mục
                            if (move_uploaded_file($anhchitiet['tmp_name'][$i], $target_anhchitiet)) {
                                $file_paths[] = $unique_name; // Lưu đường dẫn vào mảng
                            } 
                        }
                        // Chuyển mảng đường dẫn thành chuỗi phân tách bởi dấu phẩy
                    $anhchitiet_str = implode(",", $file_paths);

                    insert_sanpham($name, $giagoc, $giaban, $tilegiam, $iddm, $anhsp_name, isset($anhchitiet_str) ? $anhchitiet_str : '', $xuatxu, $tenthuonghieu, $doituong, $loaimay, $chatlieuday, $khangnuoc, $chatlieukinh);
                        }
                }
                // Lấy danh sách sản phẩm và danh mục để hiển thị trong giao diện
                $listsanpham = loadall_sanpham(); 
                $listdanhmuc = loadall_danhmuc(); 
                include 'sanpham/sanpham.php';
                break;
                    
            case 'xoasp':
                if(isset($_GET['id']) && ($_GET['id']>0)){
                    $id = $_GET['id'];

                    $ctsp = chitietsp($id);
                    //nếu trả về 1 mảng ảnh thì xóa
                    if (is_array($ctsp)){
                        //lấy hình ảnh
                        extract($ctsp);
                        $target_dir = "../uploads/";
                        $tenfile=$target_dir.$anhsp;
                        if(is_file($tenfile)){
                            unlink($tenfile); // xóa ảnh
                        }
                        // Kiểm tra và xóa các ảnh chi tiết
                        if ($anhchitiet) {
                            // Tách các ảnh chi tiết thành mảng, sử dụng dấu ',' làm ký tự phân tách
                            $anhchitiet_arr = explode(',', $anhchitiet);
                        
                            // Duyệt qua từng ảnh và kiểm tra xóa
                            foreach ($anhchitiet_arr as $file_path) {
                                $file_path = trim($file_path); // Loại bỏ khoảng trắng thừa
                                $full_path = $target_dir . $file_path; // Đường dẫn đầy đủ tới ảnh chi tiết
                        
                                // Kiểm tra xem file có tồn tại không và xóa nếu có
                                if (is_file($full_path)) {
                                    unlink($full_path); // Xóa ảnh
                                }
                            }
                        }
                    }
                    delete_sanpham($id);
                }
                $listsanpham=loadall_sanpham(); 
                $listdanhmuc = loadall_danhmuc(); 
                include 'sanpham/sanpham.php';
                break;
            case 'showsp':
                if(isset($_GET['id']) && ($_GET['id']> 0)){
                    $id = $_GET['id'];
                    $sanpham = chitietsp($id);
                }
                $listdanhmuc = loadall_danhmuc(); 
                include 'sanpham/update_sp.php';
                break;
                
            case 'updatesp':
                if(isset($_GET['id']) && ($_GET['id']> 0)){
                    $id = $_GET['id'];
                }


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
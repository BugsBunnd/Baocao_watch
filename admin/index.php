<?php
    session_start();

    // Kiểm tra xem người dùng đã đăng nhập chưa
    if (!isset($_SESSION['s_user']) || !is_array($_SESSION['s_user']) || count($_SESSION['s_user']) == 0) {
        // Nếu chưa đăng nhập, chuyển hướng về trang login.php
        header('Location: login.php');
        exit();
    }

    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/donhang.php";

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
                    $iddm = $_POST['danhmuc'];
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
                header('location: index.php?act=sanpham');
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
                $listsanpham = loadall_sanpham(); 
                $listdanhmuc = loadall_danhmuc(); 
                header('location: index.php?act=sanpham');
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
                if (isset($_POST['updatesp']) && ($_POST['updatesp'])) {
                    // Lấy thông tin từ form
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $giagoc = $_POST['giagoc'];
                    $giaban = $_POST['giaban'];
                    $tilegiam = $_POST['tilegiam'];
                    $iddm = $_POST['iddm'];
                    $xuatxu = $_POST['xuatxu'];
                    $tenthuonghieu = $_POST['tenthuonghieu'];
                    $doituong = $_POST['doituong'];
                    $loaimay = $_POST['loaimay'];
                    $chatlieuday = $_POST['chatlieuday'];
                    $khangnuoc = $_POST['khangnuoc'];
                    $chatlieukinh = $_POST['chatlieukinh'];
                
            
                    $target_dir = "../uploads/";
                    $ctsp = chitietsp($id);
                    // 1. Xử lý ảnh chính (anhsp)
                    if (isset($_FILES['anhsp']) && ($_FILES['anhsp']['error'] == UPLOAD_ERR_OK)) {
                        if (is_array($ctsp)) {
                            extract($ctsp); // Lấy thông tin sản phẩm cũ
                            $tenfile = $target_dir . $anhsp;
                            if (is_file($tenfile)) {
                                unlink($tenfile); // Xóa ảnh sản phẩm cũ
                            }
                        }
                        // Tải ảnh mới lên
                        $anhsp = time() . '_' . basename($_FILES['anhsp']['name']);
                        $target_file_anhsp = $target_dir . $anhsp;
                        if (!move_uploaded_file($_FILES['anhsp']['tmp_name'], $target_file_anhsp)) {
                            die("Lỗi khi tải lên ảnh sản phẩm chính.");
                        }
                    }
                    $target_dir = "../uploads/";
                    $ctsp = chitietsp($id);
                    // 2. Xử lý ảnh chi tiết sản phẩm
                    if (isset($_FILES['anhchitiet']) && !empty($_FILES['anhchitiet']['name'][0])) {
                        if(is_array($ctsp)) {
                            extract($ctsp);
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

                        // Tải ảnh chi tiết mới lên
                        $anhchitiet = $_FILES['anhchitiet']; // Mảng chứa thông tin các file
                        $file_paths = array(); // Mảng lưu đường dẫn các file đã upload thành công
                    
                        // Duyệt qua tất cả các file được upload
                        for ($i = 0; $i < count($anhchitiet['name']); $i++) {
                            $filename = $anhchitiet['name'][$i]; // Tên file gốc
                            $anh_chitiet = time() . '_' . basename($filename); // Tạo tên duy nhất cho file
                            $target_anhchitiet = $target_dir . $anh_chitiet; // Đường dẫn lưu file
                    
                            // Kiểm tra và di chuyển file vào thư mục
                            if (move_uploaded_file($anhchitiet['tmp_name'][$i], $target_anhchitiet)) {
                                $file_paths[] = $anh_chitiet; // Lưu đường dẫn vào mảng
                            } else {
                                echo "Lỗi tải lên ảnh chi tiết: " . $filename;
                            }
                        }
                    
                        // Chuyển mảng đường dẫn thành chuỗi phân tách bởi dấu phẩy
                        if (!empty($file_paths)) {
                            $anhchitiet_str = implode(",", $file_paths); // Cập nhật chuỗi ảnh chi tiết mới
                        } else {
                            $anhchitiet_str = null; // Nếu không có ảnh nào được tải lên
                        }
                    }
                    

                    }
                    var_dump($_POST);
                //update sp
                updatesp($id,$name,$giagoc,$giaban,$tilegiam,$iddm,$xuatxu,$tenthuonghieu,$doituong,$loaimay,$chatlieuday,$khangnuoc,$chatlieukinh,$anhsp,$anhchitiet_str);
                }
                
                // Lấy danh sách sản phẩm và danh mục để hiển thị lại giao diện
                $listsanpham = loadall_sanpham(); 
                $listdanhmuc = loadall_danhmuc(); 
                header('location: index.php?act=sanpham');
                break;
                

            // bang don hang
            case 'donhang':
                $list_donhang = loadall_donhang();
                include 'donhang/donhang.php';
                break;

            case 'xoadh':
                if(isset($_GET['id']) && ($_GET['id']>0)){
                    $id = $_GET['id'];
                    delete_donhang($id);
                }
                $list_donhang = loadall_donhang();
                include 'donhang/donhang.php';
                break;



            case 'show_dh':
                if(isset($_GET['id']) && ($_GET['id']> 0)){
                    $id = $_GET['id'];
                    $donhang = get_donhang($id);
                    $dhsanpham = loadall_dhsanpham($id);
                }
                include 'donhang/chitietdonhang.php';
                break;



            
            //đăng xuất
            case 'dangxuat':
                include 'logout.php';
                break;
    

        
            default:
                $listdanhmuc = loadall_danhmuc();
                include 'danhmuc/danhmuc.php';
                break;
            }


    }else{
        $listdanhmuc = loadall_danhmuc();
        include 'danhmuc/danhmuc.php';
    }


    include "footer.php";

?>
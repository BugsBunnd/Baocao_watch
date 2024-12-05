<?php

    function loadall_sanpham(){
        $sql = "select * from sanpham order by name";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }


    function insert_sanpham($name, $giagoc, $giaban, $tilegiam, $iddm, $anhsp, $anhchitiet, $xuatxu, $tenthuonghieu, $doituong, $loaimay, $chatlieuday, $khangnuoc, $chatlieukinh){
        // Tạo câu lệnh SQL với tất cả các tham số
        $sql = "INSERT INTO `sanpham`(
            `name`, `giagoc`, `giaban`, `tilegiam`, `iddm`, `anhsp`, 
            `anhchitiet`, `xuatxu`, `tenthuonghieu`, `doituong`, 
            `loaimay`, `chatlieuday`, `khangnuoc`, `chatlieukinh`
        ) 
        VALUES (
            '$name', '$giagoc', '$giaban', '$tilegiam', '$iddm', '$anhsp', 
            '$anhchitiet', '$xuatxu', '$tenthuonghieu', '$doituong', 
            '$loaimay', '$chatlieuday', '$khangnuoc', '$chatlieukinh'
        )";
        pdo_execute($sql);
    }

    function delete_sanpham($id){
        $sql = "delete from sanpham where id=".$id;
        pdo_execute($sql);
    }

    function chitietsp($id){
        $sql = "select * from sanpham where id=?";
        return pdo_query_one($sql,$id);
    }


    function updatesp($id, $name, $giagoc, $giaban, $tilegiam, $iddm, $xuatxu, $tenthuonghieu, $doituong, $loaimay, $chatlieuday, $khangnuoc, $chatlieukinh, $anhsp = null, $anhchitiet_str = null) {
        // Khởi tạo câu lệnh cập nhật
        $sql = "UPDATE sanpham SET 
                    name = '".$name."', 
                    giagoc = '".$giagoc."', 
                    giaban = '".$giaban."', 
                    tilegiam = '".$tilegiam."', 
                    iddm = '".$iddm."', 
                    xuatxu = '".$xuatxu."', 
                    tenthuonghieu = '".$tenthuonghieu."', 
                    doituong = '".$doituong."', 
                    loaimay = '".$loaimay."', 
                    chatlieuday = '".$chatlieuday."', 
                    khangnuoc = '".$khangnuoc."', 
                    chatlieukinh = '".$chatlieukinh."'";
    
        // Kiểm tra và cập nhật ảnh chính (anhsp) nếu có và không phải là chuỗi rỗng
        if ($anhsp !== null && $anhsp !== "") {
            $sql .= ", anhsp = '".$anhsp."'";
        }
    
        // Kiểm tra và cập nhật ảnh chi tiết (anhchitiet) nếu có và không phải là chuỗi rỗng
        if ($anhchitiet_str !== null && $anhchitiet_str !== "") {
            $sql .= ", anhchitiet = '".$anhchitiet_str."'";
        }
    
        // Tiếp tục câu lệnh cập nhật với điều kiện WHERE
        $sql .= " WHERE id = ".$id;
    
        // Thực thi câu lệnh SQL
        pdo_execute($sql);
    }
    

    
    
?>
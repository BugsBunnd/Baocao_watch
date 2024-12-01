<?php

    function loadall_sanpham(){
        $sql = "select * from sanpham order by name";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }


    function insert_sanpham($name, $giagoc, $giaban, $tilegiam, $iddm, $anhsp, $anhchitiet, $xuatxu, $tenthuonghieu, $doituong, $loaimay, $chatlieuday, $khangnuoc, $chatlieukinh){
        // Tạo câu lệnh SQL với tất cả các tham số
        $sql = "INSERT INTO `sanpham`(
            `name`, `giagoc`, `giaban`, `tilegiam`, `danhmuc`, `anhsp`, 
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
?>
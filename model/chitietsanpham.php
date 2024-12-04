<?php

    function chitietsp($id){
        $sql = "select * from sanpham where id=?";
        return pdo_query_one($sql,$id);
    }


?>
<?php

    function loadall_donhang(){
        $sql = "select * from donhang";
        $listdanhmuc = pdo_query($sql);
        return $listdanhmuc;
    }


    function delete_donhang($id){
        $sql = "delete from donhang where id=".$id;
        pdo_execute($sql);
    }

    function get_donhang($id){
        $sql = "select * from donhang where id=".$id;
        return pdo_query_one($sql);
    }


    function loadall_dhsanpham($id){
        $sql = "select * from dhsanpham where idbill=".$id;
        return pdo_query($sql);
    }



?>
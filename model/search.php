<?php
    function search($kyw){
        $sql = "SELECT * FROM sanpham WHERE name LIKE '%$kyw%'";
        $list_search = pdo_query($sql);
        return $list_search;
    }
?>
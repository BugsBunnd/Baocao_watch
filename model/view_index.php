<?php

    function loadall_sanpham_limit12(){
    $sql = "select * from sanpham order by name limit 12";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
    }

?>
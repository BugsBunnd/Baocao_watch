<?php
    
    function insert_cart($tensp,$hinhsp,$dogia,$soluong,$idbill){
        $sql = "INSERT INTO dhsanpham (tensp,hinhsp,dongia,soluong,idbill) VALUES ('$tensp','$hinhsp','$dogia','$soluong','$idbill')";
        return pdo_execute($sql);
    }

?>
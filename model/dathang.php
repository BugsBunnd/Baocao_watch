<?php

    function insert_donhang($gioitinh,$name,$diachi,$ghichu,$sodt,$email,$tongtien,$pttt  ){
        $sql = "INSERT INTO donhang (gioitinh, name, diachi, sodt, email,ghichu, tongtien, pttt) VALUES ('$gioitinh','$name','$diachi','$sodt','$email','$ghichu','$tongtien','$pttt')";
        return pdo_execute_return_lastInsertID($sql);
    }

?>

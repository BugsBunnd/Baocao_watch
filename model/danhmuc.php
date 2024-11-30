<?php

    function loadall_danhmuc(){
        $sql = "select * from danhmuc order by name";
        $listdanhmuc = pdo_query($sql);
        return $listdanhmuc;
    }

    function insert_danhmuc($name,$ghichu){
        $sql = "INSERT INTO danhmuc (name, ghichu) VALUES ('$name', '$ghichu')";
        pdo_execute($sql);
    }

    function delete_danhmuc($id){
        $sql = "delete from danhmuc where id=".$id;
        pdo_execute($sql);
    }

    function updatedm($id,$name,$ghichu){
        $sql = "update danhmuc set name='".$name."',ghichu='".$ghichu."' where id=".$id;
        pdo_execute($sql);
    }

?>
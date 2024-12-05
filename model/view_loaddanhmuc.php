<?php

    function load_xuhuong(){
        $sql = "select * from sanpham where iddm=36";
        return pdo_query($sql);
    }

    function load_nam(){
        $sql = "select * from sanpham where iddm=37";
        return pdo_query($sql);
    }

    function load_nu(){
        $sql = "select * from sanpham where iddm=38";
        return pdo_query($sql);
    }

    function load_luxury(){
        $sql = "select * from sanpham where iddm=39";
        return pdo_query($sql);
    }

    function load_cucaocap(){
        $sql = "select * from sanpham where iddm=40";
        return pdo_query($sql);
    }


?>
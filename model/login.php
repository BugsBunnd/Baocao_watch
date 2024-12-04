<?php
    function checkuser($username, $password) {
        $sql = "select * from admin_user where username=? and password=?";
        return pdo_query_one($sql, $username, $password);
    }
?>

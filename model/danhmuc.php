<?php
    function danhmuc_all(){
        $sql = "SELECT * FROM  danhmuc ORDER BY stt DESC";
        return pdo_query($sql);
        }


?>
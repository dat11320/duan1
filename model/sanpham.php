<?php
// require_once 'pdo.php';

    function get_dssp_new(){
        $sql ="SELECT * FROM sanpham ";
        return pdo_query($sql);
        
    }
    
?>
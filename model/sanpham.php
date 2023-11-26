<?php
// require_once 'pdo.php';

    function get_dssp_new(){
        $sql ="SELECT * FROM sanpham";
        return pdo_query($sql);
        
    }
    function sanpham_insert($name, $img, $price, $iddm){
        $sql = "INSERT INTO sanpham(name, img, price, iddm) VALUES (?,?,?,?)";
        pdo_execute($sql, $name, $img, $price, $iddm);
    }

    function sanpham_delete($id){
        $sql = "DELETE FROM sanpham WHERE id=?";
        pdo_execute($sql, $id);
    }
    
?>
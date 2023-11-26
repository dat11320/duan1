<?php
// require_once 'model/pdo.php';

// function user_insert($username, $password, $email){
//     $sql = "INSERT INTO user(username, password, email) VALUES (?, ?, ?)";
//     return pdo_execute_returnid($sql, $username, $password, $email);
// }

// function user_update($username,$password,$email,$diachi,$dienthoai,$role,$id){
//     $sql = "UPDATE user SET username=?,password=?,email=?,diachi=?,dienthoai=?,role=? WHERE id=?";
//     pdo_execute($sql,$username,$password,$email,$diachi,$dienthoai,$role,$id);    
// }
function user_insert($username, $password,$diachi, $dienthoai, $email){
    $sql = "INSERT INTO user (username, password, diachi, dienthoai,email) VALUES (?, ?, ?, ?, ?)";
    pdo_execute($sql, $username, $password,$diachi, $dienthoai, $email);
}

function checkuser($username,$password){
    $sql="select * from user where username=? and password=?";
    return pdo_query_one($sql,$username,$password);
    
}
function get_user($id){
    $sql="Select * from user where id=?";
    return pdo_query_one($sql, $id);
}
// function get_user($id){
//     $sql="Select * from user where id=? ";
//     return pdo_query_one($sql, $id);
// }

// function user_update($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro){
//     $sql = "UPDATE user SET mat_khau=?,ho_ten=?,email=?,hinh=?,kich_hoat=?,vai_tro=? WHERE ma_kh=?";
//     pdo_execute($sql, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat==1, $vai_tro==1, $ma_kh);
// }

// function user_delete($ma_kh){
//     $sql = "DELETE FROM user  WHERE ma_kh=?";
//     if(is_array($ma_kh)){
//         foreach ($ma_kh as $ma) {
//             pdo_execute($sql, $ma);
//         }
//     }
//     else{
//         pdo_execute($sql, $ma_kh);
//     }
// }

// function user_select_all(){
//     $sql = "SELECT * FROM user";
//     return pdo_query($sql);
// }

// function user_select_by_id($ma_kh){
//     $sql = "SELECT * FROM user WHERE ma_kh=?";
//     return pdo_query_one($sql, $ma_kh);
// }

// function user_exist($ma_kh){
//     $sql = "SELECT count(*) FROM user WHERE $ma_kh=?";
//     return pdo_query_value($sql, $ma_kh) > 0;
// }

// function user_select_by_role($vai_tro){
//     $sql = "SELECT * FROM user WHERE vai_tro=?";
//     return pdo_query($sql, $vai_tro);
// }

// function user_change_password($ma_kh, $mat_khau_moi){
//     $sql = "UPDATE user SET mat_khau=? WHERE ma_kh=?";
//     pdo_execute($sql, $mat_khau_moi, $ma_kh);
// }
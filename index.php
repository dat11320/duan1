<?php
   session_start();
   include "model/pdo.php";
   include "model/sanpham.php";
   
   include "model/user.php";
   include "view/header.php";
   $dssp_new['new']=get_dssp_new();
   if(isset($_GET['pg'])){
      $pg=$_GET['pg'];
      switch ($pg) {
         case 'dangxuat':
            unset($_SESSION['username']);  // hủy bỏ biến session
            header('location: index.php'); 
            break;
         case 'dangnhap':
            if((isset($_POST['btnlogin']))&&($_POST['btnlogin'])){
               // input?
               $user=$_POST['username']; // name bên form
               $pass=$_POST['password'];
               // sử lí?
               $arruser=array($user,$pass);
               $_SESSION['username']=$arruser;
               // trả về 
               header('location: index.php'); 
            }

            include "view/login.php";
            break;
         // case 'thoat':
         //    if(isset($_SESSION['user'])&&($_SESSION['user']!="")){
         //       unset($_SESSION['user']);
         //       header('location: index.php');
         //    }
         case 'adduser':
            // Xác định gái trị input
            if(isset($_POST["dangky"])){
                $username=$_POST["username"];
                $password=$_POST["password"];
                $email=$_POST["email"];
                $diachi=$_POST["diachi"];
                $dienthoai=$_POST["dienthoai"];
                
                // sử lý
                user_insert($username, $password, $email, $diachi, $dienthoai);
            }
            //out

            include "view/login.php";
            break;
         case 'dangky':
            include "view/dangky.php";
            break;
         
         case 'userupdate':
            include "view/userupdate.php"; 
            break;
         case 'lienhe':
            include "view/lienhe.php";
            break;
         case 'chitietsanpham':
            include "view/chitietsanpham.php";
            break;
         case 'admin':
            include "../admin/index.php";
            break;
         default:
            include "view/main.php";
            break;
      }
   }else{
      include "view/main.php";
   }
   // git add . chon file tai len
// git commit -m "" de ghi mo ta
// git push gui file len
// tess lại 
// git pull vcxvxcvxcv
/// sửa lại thử 

   include "view/footer.php";
   // echo "# duan1" >> README.md
   // git init
   // git add README.md
   // git commit -m "first commit"
   // git branch -M main
   // git remote add origin https://github.com/dat11320/duan1.git
   // git push -u origin main
   // sdfhkdhsjfk
   // sdlfsdjkflsafj
?>

<?php
   session_start();
   include "model/pdo.php";
//    include "model/user.php";
   include "view/header.php";
   if(isset($_GET['pg'])){
      $pg=$_GET['pg'];
      switch ($pg) {
         case 'dangnhap':
            if((isset($_POST['btnlogin']))&&($_POST['btnlogin'])){
               // input?
               $user=$_POST['user'];
               $pass=$_POST['pass'];
               // xl?
               $isuser=checkuser($user,$pass);
               $_SESSION['user']=$isuser;
               // return
               header('location: index.php');
            }
            include "view/login.php";
            break;
         case 'logout':
            if(isset($_SESSION['user'])&&($_SESSION['user']!="")){
               unset($_SESSION['user']);
               header('location: index.php');
            }
            break;
         case 'userupdate':
            include "view/userupdate.php";
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
   include "view/footer.php";
   // echo "# duan1" >> README.md
   // git init
   // git add README.md
   // git commit -m "first commit"
   // git branch -M main
   // git remote add origin https://github.com/dat11320/duan1.git
   // git push -u origin main
?>
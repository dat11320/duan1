<?php

    session_start();
    if(!isset($_SESSION['giohang'])){
        $_SESSION['giohang']=[];
    }
    include "dao/pdo.php";
    include "dao/sanpham.php";
    
    include "view/header.php";
    $dsspmoi=sanpham_select_all(4);
    $dsspbest=sanpham_select_best(2);
    

    if(!isset($_GET['pg'])){
        include "view/home.php";
    }else{
        switch ($_GET['pg']) {
            case 'sanpham':
                
                break;
            case 'addcart':
                // lấy dử liệu từ form
                if(isset($_POST['addcart'])){
                    $name=$_POST['tensp'];
                    $img=$_POST['img'];
                    $price=$_POST['price'];
                    $soluong=$_POST['soluong'];
                    $sp=[$name, $img, $price, $soluong];
                    // add vào giỏ hàng // lưu vào session
                    array_push($_SESSION['giohang'],$sp);

                }
                echo var_dump($_SESSION['giohang']);

                // include "view/viewcart.php";

                break;
            case 'sanphamchitiet':
                
                break;
            default:
                include "view/home.php";
                break;
        }
    }
    include "view/footer.php";
?>  
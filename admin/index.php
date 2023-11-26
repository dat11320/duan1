<?php
    include "../model/pdo.php";
    include "../model/sanpham.php";
    include "../model/global.php";
    include "../model/danhmuc.php";

    include "view/header.php";
    if (isset($_GET['pg'])) {
        $pg=$_GET['pg'];
        switch ($pg) {
            case 'sanphamlist':
                $dssp_new['new']=get_dssp_new();
                include "view/sanphamlist.php";
                break;
            case 'sanphamadd':
                $danhmuclist=danhmuc_all();
                include "view/sanphamadd.php";
                break;
            case 'addproduct':
                if($_POST['addproduct']){
                    // lấy dử liệu về
                    $name=$_POST['name'];
                    $price=$_POST['price'];
                    $iddm=$_POST['iddm'];
                    $img=$_POST['img'];

                    // inert into

                    // trở về trang dssp
                    $dssp_new['new']=get_dssp_new();
                    include "sanphamlist.php";
                }else{
                    include "view/sanphamadd.php";                    
                }
                break;
            default:
                include "view/home.php";
                break;
        }
    }else{
        include "view/home.php";
    }
        
    
    include "view/footer.php";
?>

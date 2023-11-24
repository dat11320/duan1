<?php
    include "../model/pdo.php";
    include "../model/sanpham.php";

    include "view/header.php";
    if (isset($_GET['pg'])) {
        $pg=$_GET['pg'];
        switch ($pg) {
            case 'sanphamlist':
                include "view/sanphamlist.php";
                break;
            case 'sanphamadd':
                include "view/sanphamadd.php";
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

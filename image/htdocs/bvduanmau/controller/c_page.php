<?php
     if (isset($_GET['act'])) {
        switch ($_GET['act']) {
            case 'home':
                // Lấy dữ liệu
            
                $spKM = sp_KM(3);
                $spDT = sp_DT(3);
                // Hiển thị dữ liệu
                $view_name = 'page_home';
                break;
            case 'cart':
               
                break;
            case 'history':
               
                break;
            default:
                # code...
                break;
        }
    include_once 'view/v_user_layout.php';
    }
    
?>
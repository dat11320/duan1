<?php
    include_once 'config.php';
    include_once './model/m_book.php';
    // include_once './model/m_category.php';
    $spKM = sp_KM(3);
    $spDT = sp_DT(3);


    // Bắt lỗi 
    // print_r($_REQUEST);
    if (isset($_GET['mod'])) {
        switch ($_GET['mod']) {
            case 'page':
                $ctrl_name = 'page';
                break;
            case 'book':
                // $ctrl_name = 'book';
                break;
            case 'user':
                // $ctrl_name = 'user';
                break;
            case 'comment':
                // $ctrl_name = 'comment';
                break;
            case 'category':
                // $ctrl_name = 'category';
                break;
            case 'admin':   
                // $ctrl_name = 'admin';
                break;
            default:
                # code...
                break;
        }
    include_once 'controller/c_'.$ctrl_name.'.php';
    }
    else{
        header('Location: page/home');
    }
   
?>
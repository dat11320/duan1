<?php
    include "../model/pdo.php";
    include "../model/sanpham.php";
    include "../model/danhmuc.php";
    include "../model/global.php";

    include "view/header.php";
    if (isset($_GET['pg'])) {
        $pg=$_GET['pg'];
        switch ($pg) {
            case 'sanphamlist':
                $dssp_new['new']=get_dssp_new();
                include "view/sanphamlist.php";
                break;
            case 'sanphamadd':
                $dsdm=danhmuc_all();
                include "view/sanphamadd.php";
                break;
            case 'delproduct':
                if(isset($_GET['id'])&&($_GET['id'])>0)
                    $id=$_GET['id'];
                    sanpham_delete($id);
                // trở về trang dssp
                $dssp_new['new']=get_dssp_new();
                include "view/sanphamlist.php";
                break;
            case 'addproduct':
                if(isset($_POST['addproduct'])){
                    // lấy dử liệu về
                    $name=$_POST['name'];
                    $price=$_POST['price'];
                    $iddm=$_POST['iddm'];
                    $img=$_FILES['img']['name'];

                    // inert into
                    sanpham_insert($name, $img, $price, $iddm);
                    // upload hình ảnh
                    $target_file=IMG_PATH_ADMIN.$img;
                    move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);

                    // trở về trang dssp
                    $dsdm['new']=get_dssp_new();
                    include "view/sanphamlist.php";
                }else{
                    $dsdm=danhmuc_all();
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

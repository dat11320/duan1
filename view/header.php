<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Star</title>
    <link rel="stylesheet" href="layout/style.css">
    <script src="https://kit.fontawesome.com/bcdf405993.js" crossorigin="anonymous"></script>
</head>
<body>
    <header id="header">
        <div class="header1">
            <div class="contact">    
                <a href="$"><i class="fa-solid fa-mobile-screen"></i>Holine: 0123456554  &emsp; <i class="fa-solid fa-location-dot"></i>Địa chỉ: Happy Star, Tp Hồ Chí Minh, Việt Nam </a>
            </div>
            <div class="contact">
                <p><i class="fa-regular fa-star"></i> &nbsp;Happy Star</p>
            </div>
                
        </div>
        <div class="header2">
            <div class="logo">
                <img src="image/logo.png" alt="">
            </div>
            <div class="timkiem">
                <input type="text" placeholder="Tìm kiếm sản phẩm...">
            </div>
            <div class="icon">
                <ul>
                    <li>
                        <?php
                            if (isset($_SESSION['user'])) {
                                echo ' <a href="index.php?pg=updateinfo"><i class="fa-solid fa-user"></i>'.$_SESSION['user'][0].'</a>';
                                echo ' <a href="index.php?pg=thoat"><i class="fa-solid fa-user"></i>Thoát</a>';
                                
                            }else{
                                echo ' <a href="index.php?pg=dangnhap"><i class="fa-solid fa-user"></i>Đăng nhâp / Đăng kí</a>';
                            }
                        ?>
                       
                    </li>
                    <li>
                        <a href="index.php?pg=giohang"><i class="fa-solid fa-cart-shopping"></i>Giỏ hàng</a>
                    </li>
                </ul>
            </div>

        </div>
        <div class="header3">
            <div class="header3-menu">
                <ul>
                    <li>
                        <a href="index.php">Trang chủ</a>
                    </li>
                    <li>
                        <a href="#sanpham">Sản Phẩm</a>
                    </li>
                    <li>
                        <a href="#">Bánh ngọt & Bánh mì</a>
                    </li>
                    <li>
                        <a href="index.php?pg=lienhe">Liên hệ</a>
                    </li>
                    <li>
                        <a href="#">Hệ thống cửa hàng</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
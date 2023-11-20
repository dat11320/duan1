<?php
    $html_dsspbest='';
    foreach ($dsspbest as $sp) {
        extract($sp);
        $html_dsspbest.='<div class="box25 mr15 mb">
                            <div class="best"></div>
                            <img src="layout/images/'.$img.'" alt="">
                            <span class="price">'.$price.'</span>
                            <button>Đặt hàng</button>

                        </div>';
    }
    $html_dsspmoi='';
    foreach ($dsspmoi as $sp) {
        extract($sp);
        if($bestseller==1){
            $best='<div class="best"></div>';
        }else{
            $best='';
        }
        $html_dsspmoi.='<div class="box25 mr15 mb">
                            '.$best.'
                            <img src="layout/images/'.$img.'" alt="">
                            <span class="price">'.$price.'</span>
                            <form acction="index.php?pg=addcart" method="post">
                                <input type="hidden" name="tensp" value="'.$name.'">
                                <input type="hidden" name="img" value="'.$img.'">
                                <input type="hidden" name="price" value="'.$price.'">
                                <input type="hidden" name="soluong" value="1"> 
                                <button type="submit" name="addcart" >Đặt hàng</button>
                            </form>
                        </div>';
    }



?>
<div class="containerfull">
    <img src="layout/images/banner.webp" alt="">
</div>
<section class="containerfull">
    <div class="container">
        <h1>SẢN PHẨM MỚI</h1><br><br>
        <div class="containerfull">
            <div class="box50 mr15">
                <img src="layout/images/banner2.webp" alt="">
            </div>
            <?=$html_dsspbest?>
            <!-- <div class="box25 mr15">
                <div class="best"></div>
                <img src="layout/images/sp1.webp" alt="">
                <span class="price">$1000</span>
                <button>Đặt hàng</button>
            </div>
            <div class="box25 mr15">
                <div class="best"></div>
                <img src="layout/images/sp2.webp" alt="">
                <span class="price">$1000</span>
                <button>Đặt hàng</button>
            </div> -->
        </div>
        <div class="containerfull mr30">
            <div class="box25 mr15">
                <img src="layout/images/sp1.webp" alt="">
                <span class="price">$1000</span>
                <button>Đặt hàng</button>
            </div>
            <div class="box25 mr15">
                <img src="layout/images/sp2.webp" alt="">
                <span class="price">$1000</span>
                <button>Đặt hàng</button>
            </div>
            <div class="box25 mr15">
                <img src="layout/images/sp3.webp" alt="">
                <span class="price">$1000</span>
                <button>Đặt hàng</button>
            </div>
            <div class="box25 mr15">
                <img src="layout/images/sp4.webp" alt="">
                <span class="price">$1000</span>
                <button>Đặt hàng</button>
            </div>
        </div>

    </div>
</section>
<section class="containerfull bg1 padd50">
    <div class="container">
        <h1>SẢN PHẨM NHIÊU NGƯỜI XEM</h1>
        <div class="row">
            <h2>Bánh mì</h2>
        </div>
        <div class="row">
            <div class="boxnews mr2pt">
                <img src="layout/images/hinh2.webp" alt="">
                <p>11/03/2022</p>
                <p><a href="#">CÁCH NHẬN BIẾT HƯƠNG VỊ CÀ PHÊ</a></p>
                <p>Cùng Arabica, Robusta cũng là loại cà phê nổi tiếng được sử dụng phổ biến ở Việt Nam và nhiều nước
                    khác trên thế giới. Với nhiều đặc điểm riêng, không...</p>
            </div>
            <div class="boxnews mr2pt">
                <img src="layout/images/hinh6.jpg" alt="">
                <p>11/03/2022</p>
                <p><a href="#">SIGNATURE - BIỂU TƯỢNG VĂN HOÁ CÀ PHÊ</a></p>
                <p>Mới đây, các "tín đồ" cà phê đang bàn tán xôn xao về SIGNATURE - Biểu tượng văn hóa cà phê của The
                    Coffee House đã quay trở lại.Một lời...</p>
            </div>
            <div class="boxnews mr2pt">
                <img src="layout/images/hinh3.jpg" alt="">
                <p>11/03/2022</p>
                <p><a href="#">CÀ PHÊ SỮA ESPRESSO THE COFFEE HOUSE</a></p>
                <p>Cà phê sữa Espresso là một lon cà phê sữa giải khát với hương vị cà phê đậm đà từ 100% cà phê Robusta
                    cùng vị sữa béo nhẹ cho bạn một trải nghiệm...</p>
            </div>
        </div>
        <div class="row">
            <h2>Bánh sừng trâu</h2>
        </div>
        <div class="row">
            <div class="boxnews mr2pt">
                <img src="layout/images/hinh7.jpg" alt="">
                <p>11/03/2022</p>
                <p><a href="#">CÁCH NHẬN BIẾT HƯƠNG VỊ CÀ PHÊ</a></p>
                <p>Cùng Arabica, Robusta cũng là loại cà phê nổi tiếng được sử dụng phổ biến ở Việt Nam và nhiều nước
                    khác trên thế giới. Với nhiều đặc điểm riêng, không...</p>
            </div>
            <div class="boxnews mr2pt">
                <img src="layout/images/hinh5.jpg " alt="">
                <p>11/03/2022</p>
                <p><a href="#">BỘ SƯU TẬP CẦU TOÀN KÈO THƠM: "VÍA"</a></p>
                <p>Tết nay vẫn giống Tết xưa, không hề mai một nét văn hoá truyền thống mà còn thêm vào những hoạt động
                    “xin vía” hiện đại, trẻ trung. Ví như...</p>
            </div>
            <div class="boxnews mr2pt">
                <img src="layout/images/hinh4.jpg" alt="">
                <p>11/03/2022</p>
                <p><a href="#">“KHUẤY ĐỂ THẤY TRĂNG" - KHUẤY LÊN</a></p>
                <p>Năm 2022 là năm đề cao sức khỏe tinh thần nên giới trẻ muốn tận hưởng một Trung thu với nhiều trải
                    nghiệm mới mẻ, rôm rả cùng bạn bè...</p>
            </div>
        </div>

    </div>
</section>
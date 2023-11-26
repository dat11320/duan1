<?php
    $html_dssp_new='';
    foreach ($dssp_new['new']as $sp) {
        extract($sp);
        $html_dssp_new='<div class="box25 mr15">
        <div class="best"></div>
        <img src="image/'.$img.'" alt="">
        <h3 style="margin: 8px 0;">'.$name.'</h3>
        <div class="info-product">
            <div>
                
                <div class="price">'.$price.'</div>
                <del>200</del>
                
            </div>
            <div>
                <button style="border-radius: 20px 0 0 20px;">Đặt hàng</button>
                <button style="border-radius: 0 20px 20px 0;"><i class="fa-solid fa-cart-shopping"></i></button>
            </div>
        </div>
        <div class="star">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>
        </div>
        
    </div>';
        
    }
    
 
?>

<div id="main-banner">
        <a href="#"><img src="image/anh1giamgia.webp" width="1475px" height="563px"></a>
    </div>
    <div id="main-gioithieu">
        <div class="main-itemgioithieu">
            <i class="fa-solid fa-cake-candles" style="color: #ffb029;"></i>
            <b>Bộ sưu tập bánh</b>
            <p>Các loại bánh bạn cần</p>
        </div>
        <div class="main-itemgioithieu">
            <i class="fa-solid fa-box" style="color: #ffb029;"></i>
            <b>Miễn phí vận chuyển</b>
            <p>Miễn phí theo đơn đặt hàng </p>
        </div>
        <div class="main-itemgioithieu">
            <i class="fa-solid fa-arrows-rotate" style="color: #ffb029;"></i>
            <b>Hoàn tiền 100%</b>
            <p>Nếu bánh bị hư</p>
        </div>
    </div>
    <main id="main">        
        <div class="main-item">
            <div class="main-item2">
                <img src="image/banh1.jpg" alt="">
            </div>
            <div class="main-item2">
                <img src="image/banh2.jpg" alt="">
            </div>
            
            <div class="main-item2">
                <img src="image/banh3.jpg" alt="">
            </div>
        </div>
        <div class="product-list">
            
        </div>
        <section class="containerfull">
            <div class="container">
                <h1>SẢN PHẨM HOT</h1><br><br>
                <div class="containerfull">
                    <div class="box50 mr15">
                        <img src="image/banh2.jpg" alt="">
                    </div>
                    <div class="box25 mr15">
                        <div class="best"></div>
                        <img src="image/banh7.webp" alt="">
                        <h3 style="margin: 8px 0;">Bánh kem Socola</h3>
                        <div class="info-product">
                            <div>
                                
                                <div class="price">$1000</div>
                                <div class="price">$1000</div>
                                
                            </div>
                            <div>
                                <button style="border-radius: 20px 0 0 20px;">Đặt hàng</button>
                                <button style="border-radius: 0 20px 20px 0;"><i class="fa-solid fa-cart-shopping"></i></button>
                            </div>
                        </div>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        
                    </div>
                    <div class="box25 mr15">
                        <div class="best"></div>
                        <img src="image/banh7.webp" alt="">
                        <h3 style="margin: 8px 0;">Bánh kem Socola</h3>
                        <div class="info-product">
                            <div>
                                
                                <div class="price">$1000</div>
                                <div class="price">$1000</div>
                                
                            </div>
                            <div>
                                <button style="border-radius: 20px 0 0 20px;">Đặt hàng</button>
                                <button style="border-radius: 0 20px 20px 0;"><i class="fa-solid fa-cart-shopping"></i></button>
                            </div>
                        </div>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        
                    </div>
                </div>
                <?=$html_dssp_new;?>
                <!-- <div class="containerfull mr30">
                    <div class="box25 mr15">
                        <div class="best"></div>
                        <img src="image/banh7.webp" alt="">
                        <h3 style="margin: 8px 0;">Bánh kem Socola</h3>
                        <div class="info-product">
                            <div>
                                
                                <div class="price">$1000</div>
                                <div class="price">$1000</div>
                                
                            </div>
                            <div>
                                <button style="border-radius: 20px 0 0 20px;">Đặt hàng</button>
                                <button style="border-radius: 0 20px 20px 0;"><i class="fa-solid fa-cart-shopping"></i></button>
                            </div>
                        </div>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        
                    </div>
                    <div class="box25 mr15">
                        <div class="best"></div>
                        <img src="image/banh7.webp" alt="">
                        <h3 style="margin: 8px 0;">Bánh kem Socola</h3>
                        <div class="info-product">
                            <div>
                                
                                <div class="price">$1000</div>
                                <div class="price">$1000</div>
                                
                            </div>
                            <div>
                                <button style="border-radius: 20px 0 0 20px;">Đặt hàng</button>
                                <button style="border-radius: 0 20px 20px 0;"><i class="fa-solid fa-cart-shopping"></i></button>
                            </div>
                        </div>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        
                    </div>
                    <div class="box25 mr15">
                        <div class="best"></div>
                        <img src="image/banh7.webp" alt="">
                        <h3 style="margin: 8px 0;">Bánh kem Socola</h3>
                        <div class="info-product">
                            <div>
                                
                                <div class="price">$1000</div>
                                <div class="price">$1000</div>
                                
                            </div>
                            <div>
                                <button style="border-radius: 20px 0 0 20px;">Đặt hàng</button>
                                <button style="border-radius: 0 20px 20px 0;"><i class="fa-solid fa-cart-shopping"></i></button>
                            </div>
                        </div>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        
                    </div>
                    <div class="box25 mr15">
                        <div class="best"></div>
                        <img src="image/banh7.webp" alt="">
                        <h3 style="margin: 8px 0;">Bánh kem Socola</h3>
                        <div class="info-product">
                            <div>
                                
                                <div class="price">$1000</div>
                                <div class="price">$1000</div>
                                
                            </div>
                            <div>
                                <button style="border-radius: 20px 0 0 20px;">Đặt hàng</button>
                                <button style="border-radius: 0 20px 20px 0;"><i class="fa-solid fa-cart-shopping"></i></button>
                            </div>
                        </div>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        
                    </div>

                </div>
    
            </div>
        </section>
        <section class="containerfull bg1 padd50">
            <div class="container">
                <h1>DANH MỤC HOT</h1>
                <div class="row">
                    <h2>Bánh mì</h2>
                </div>
                <div class="row">
                    <div class="boxnews mr2pt">
                        <img src="image/banh3.jpg" alt="">
                        <p>11/03/2022</p>
                        <p><a href="#">CÁCH NHẬN BIẾT HƯƠNG VỊ CÀ PHÊ</a></p>
                        <p>Cùng Arabica, Robusta cũng là loại cà phê nổi tiếng được sử dụng phổ biến ở Việt Nam và nhiều nước khác trên thế giới. Với nhiều đặc điểm riêng, không...</p>
                    </div>
                    <div class="boxnews mr2pt">
                        <img src="image/banh8.jpg" alt="">
                        <p>11/03/2022</p>
                        <p><a href="#">SIGNATURE - BIỂU TƯỢNG VĂN HOÁ CÀ PHÊ</a></p>
                        <p>Mới đây, các "tín đồ" cà phê đang bàn tán xôn xao về SIGNATURE - Biểu tượng văn hóa cà phê của The Coffee House đã quay trở lại.Một lời...</p>
                    </div>
                    <div class="boxnews mr2pt">
                        <img src="image/banh5.jpg" alt="">
                        <p>11/03/2022</p>
                        <p><a href="#">CÀ PHÊ SỮA ESPRESSO THE COFFEE HOUSE</a></p>
                        <p>Cà phê sữa Espresso là một lon cà phê sữa giải khát với hương vị cà phê đậm đà từ 100% cà phê Robusta cùng vị sữa béo nhẹ cho bạn một trải nghiệm...</p>
                    </div>
                </div> -->
                <!-- <div class="row">
                    <h2>Bánh sừng trâu</h2>
                </div>
                <div class="row">
                    <div class="boxnews mr2pt">
                        <img src="image/banh3.jpg" alt="">
                        <p>11/03/2022</p>
                        <p><a href="#">CÁCH NHẬN BIẾT HƯƠNG VỊ CÀ PHÊ</a></p>
                        <p>Cùng Arabica, Robusta cũng là loại cà phê nổi tiếng được sử dụng phổ biến ở Việt Nam và nhiều nước khác trên thế giới. Với nhiều đặc điểm riêng, không...</p>
                    </div>
                    <div class="boxnews mr2pt">
                        <img src="image/banh8.jpg " alt="">
                        <p>11/03/2022</p>
                        <p><a href="#">BỘ SƯU TẬP CẦU TOÀN KÈO THƠM: "VÍA"</a></p>
                        <p>Tết nay vẫn giống Tết xưa, không hề mai một nét văn hoá truyền thống mà còn thêm vào những hoạt động “xin vía” hiện đại, trẻ trung. Ví như...</p>
                    </div>
                    <div class="boxnews mr2pt">
                        <img src="image/banh6.webp" alt="">
                        <p>11/03/2022</p>
                        <p><a href="#">“KHUẤY ĐỂ THẤY TRĂNG" - KHUẤY LÊN</a></p>
                        <p>Năm 2022 là năm đề cao sức khỏe tinh thần nên giới trẻ muốn tận hưởng một Trung thu với nhiều trải nghiệm mới mẻ, rôm rả cùng bạn bè...</p>
                    </div>
                </div> -->
    
            </div>
        </section>
    </main>
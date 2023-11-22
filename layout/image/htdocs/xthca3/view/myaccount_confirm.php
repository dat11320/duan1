<?php
    if(isset($_SESSION['s_user'])&&(count($_SESSION['s_user'])>0)){
        extract($_SESSION['s_user']);
        $userinfo=get_user($id);
        extract($userinfo);
    }
?>
<div class="containerfull">
        <div class="bgbanner">ĐĂNG KÝ THÀNH VIÊN</div>
    </div>

    <section class="containerfull">
        <div class="container">
            <div class="boxleft mr2pt menutrai">
                <h1>DÀNH CHO BẠN</h1><br><br>
                 <a href="#">Cập nhật thông tin</a>
                 <a href="#">Lịch sử mua hàng</a>
                 <a href="#">Thoát khỏi hệ thống</a>
            </div>
            <div class="boxright">
                <h1>Thông tin đã được cập nhật</h1><br>
                <div class="containerfull mr30">
                
                    <div class="row">
                        <div class="col-25">
                        <label for="username">Tên đăng nhập</label>
                        </div>
                        <div class="col-75">
                        <?=$username?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                        <label for="password">Mật khẩu</label>
                        </div>
                        <div class="col-75">
                        <?=$password?>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-25">
                        <label for="email">Email</label>
                        </div>
                        <div class="col-75">
                        <?=$email?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                        <label for="email">Địa chỉ </label>
                        </div>
                        <div class="col-75">
                        <?=$diachi?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                        <label for="email"> Điện thoại </label>
                        </div>
                        <div class="col-75">
                        <?=$dienthoai?>
                        </div>
                    </div>
                    
                    
                    
                    
                </div>
            </div>


        </div>
    </section>
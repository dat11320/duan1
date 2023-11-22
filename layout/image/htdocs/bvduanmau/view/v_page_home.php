
    <div class="containerfull">
        <img src="<?=$base_url?>upload/product/banner1.jpg" alt="">
    </div>

    <section class="containerfull"> 
        <div class="containerfull mr30">
            <h1>XE KHUYẾN MÃI</h1><br>
            <?php foreach ($spKM as $sp): ?> 
                <div class="box33 mr15">
                    <img src="http://localhost/bvduanmau/upload/product/<?=$sp['HinhAnh']?>"" alt="">
                    <span class="price"><?=$sp['TenSP']?></span>
                    <span class="price">Giá gốc: <?=number_format((float)$sp['GiaGoc'],0,",",".")?>đ</span>
                    <span class="price">Giá khuyến mãi: <?=number_format((float)$sp['GiaKM'],0,",",".")?>đ</span>
                    <form action="index.php?pg=addcart" method="post">
                        <input type="hidden" name="tensp" value="'.$name.'">
                        <input type="hidden" name="img" value="'.$img.'">
                        <input type="hidden" name="price" value="'.$price.'">
                        <input type="hidden" name="soluong" value="1">
                        <a href="<?=$base_url?>book/detail/<?=$sp['MaSP']?>">
                            <button type="submit" name="sub">Đặt hàng</button>
                        </a>
                    </form>
                </div>
            <?php endforeach;?>

            <h1>XE CAO CẤP</h1><br>
            <?php foreach ($spDT as $sp): ?> 
                <div class="box33 mr15">
                    <img src="http://localhost/bvduanmau/upload/product/<?=$sp['HinhAnh']?>"" alt="">
                    <span class="price"><?=$sp['TenSP']?></span>
                    <span class="price">Giá gốc: <?=number_format((float)$sp['GiaGoc'],0,",",".")?>đ</span>
                    <span class="price">Giá khuyến mãi: <?=number_format((float)$sp['GiaKM'],0,",",".")?>đ</span>
                    <form action="index.php?pg=addcart" method="post">
                        <input type="hidden" name="tensp" value="'.$name.'">
                        <input type="hidden" name="img" value="'.$img.'">
                        <input type="hidden" name="price" value="'.$price.'">
                        <input type="hidden" name="soluong" value="1">
                        <a href="<?=$base_url?>book/detail/<?=$sp['MaSP']?>">
                            <button type="submit" name="sub">Đặt hàng</button>
                        </a>
                    </form>
                </div>
            <?php endforeach;?>
        </div>
    </section>
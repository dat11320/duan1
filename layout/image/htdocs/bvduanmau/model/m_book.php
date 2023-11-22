<?php
    include_once 'm_pdo.php';
    function sp_KM($limit){
        return pdo_query("SELECT * FROM sanpham WHERE GiaKM > 0 ORDER BY MaSP DESC LIMIT $limit");
    }

    function sp_DT($limit){
        return pdo_query("SELECT * FROM sanpham WHERE GiaGoc > 1000000 ORDER BY GiaGoc ASC LIMIT $limit");
    }

   



    /////////////////////////////////////////////////////////////////////////

    // function book_getNew($limit){
    //     return pdo_query("SELECT * FROM sach ORDER BY MaSach DESC LIMIT $limit");
    // }

    // function book_getPin($limit){
    //     return pdo_query("SELECT * FROM sach WHERE GhimTrangChu = 1 LIMIT $limit");
    // }

    // function book_getMostViewed($limit){
    //     return pdo_query("SELECT * FROM sach ORDER BY LuotDoc DESC LIMIT $limit");
    // }

    // function book_getById($id){
    //     return pdo_query_one("SELECT * FROM sach s INNER JOIN chude cd 
    //     ON s.MaCD = cd.MaCD WHERE s.MaSach = $id");
    // }

    // function book_getRandomByCategory($id){
    //     return pdo_query("SELECT * FROM sach WHERE MaCD = $id ORDER BY rand() LIMIT 4");
    // }

    // function book_getByCategory($id){
    //     return pdo_query("SELECT * FROM sach WHERE MaCD = $id");
    // }

    // function book_search($keyword, $page=1){
    //     $batdau = ($page -1)*8; 
    //     1 trang lấy 8 cuốn
    //     Trang 1 bắt đầu từ 0
    //     Trang 2 bắt đầu từ 8
    //     Trang 3 bắt đầu từ 16
    //     Trang n bắt đầu từ (n-1)*8
    //     return pdo_query("SELECT * FROM sach WHERE TuaSach LIKE '%$keyword%' LIMIT $batdau,8");
    // }

    // function book_searchTotal($keyword){
    //     return pdo_query_value("SELECT COUNT(*) FROM sach WHERE TuaSach LIKE '%$keyword%'");
    // }

    // function book_decreaseAmount($MaSach){
    //     pdo_execute("UPDATE sach SET SoLuong = SoLuong -1 WHERE MaSach=?", $MaSach);
    // }

    // function book_increaseAmount($MaSach){
    //     pdo_execute("UPDATE sach SET SoLuong = SoLuong +1 WHERE MaSach=?", $MaSach);
    // }

    // function book_count(){
    //     return pdo_query_value("SELECT COUNT(*) FROM sach");
    // }
?>
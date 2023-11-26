<?php
  

    $html_dssp_new='';
    $i=1;
    foreach ($dssp_new['new']as $sp) {
        extract($sp);
        $html_dssp_new.='<tr>
                          <td>'.$i.'</td>
                          <td><img src="'.IMG_PATH_ADMIN.$img.'" alt="'.$name.'" width="80px"></td>
                          <td>'.$name.'</td>
                          <td>'.$price.'</td>
                          <td>'.$view.'</td>
                          <td>
                            <a href="#" class="btn btn-warning"
                              ><i class="fa-solid fa-pen-to-square"></i> Sửa</a
                            >
                            <a href="#" class="btn btn-danger"
                              ><i class="fa-solid fa-trash"></i> Xóa</a
                            >
                          </td>
                        </tr>';
                      $i++;    
    }

?>

<div class="main-content">
          <h3 class="title-page">Sản phẩm</h3>
          <div class="d-flex justify-content-end">
            <a href="index.php?pg=sanphamadd" class="btn btn-primary mb-2"
              >Thêm sản phẩm</a
            >
          </div>
          <table id="example" class="table table-striped" style="width: 100%">
            <thead>
              <tr>
                <th>STT</th>
                <th><img src="hinh" alt="Hình" width="80px" /></th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Lượt xem</th>
                <th>Thao tác</th>
              </tr>
            </thead>
            <tbody>
            
              <?=$html_dssp_new?>
            </tbody>
            <tfoot>
              
            <tr>
                <th>STT</th>
                <th><img src="hinh" alt="Hình " width="80px" /></th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Lượt xem</th>
                <th>Thao tác</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
    <script src="assets/js/main.js"></script>
    <script>
      new DataTable("#example");
    </script>
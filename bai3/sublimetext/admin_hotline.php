<?php
  require_once('../db/dbHelper.php'); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <script src="js/bootstrap.bundle.min.js"></script>
     <link rel="stylesheet" href="./css/main.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- start-header -->
    <header>
        <header class="img-header" style="background-color: #b1a964" >
            <div>
                <div class="row" style="margin-right: 0px">
                    <a href="#"><img src="http://www.csgt.vn//upload/banner/670_banner-trang.jpg" width="100%" class="img-fluid" /></a>
                </div>
            </div>
        </header>
    </header>
    <!-- end-header -->

    <!-- nav -->
<nav class="navbar navbar-light " style="background-color :#b1a964; text-color: #333 " >
  <div class="container-fluid">
    
    <ul class="nav navbar-nav ">
      <li class="active"><a href="admin_index.php">Trang chủ</a></li>
      <li><a href="admin_hotline.php">Danh sách lỗi vi phạm</a></li>
      <li><a href="admin_list.php">Tin tức</a></li>
      <li><a href="admin_vpgt.php">Tra cứu vi phạm giao thông</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span>Admin</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Đăng Xuất</a></li>
    </ul>
  </div>
</nav>
    <!-- end-nav -->

    <main style="margin-top: 30px; ">
        <div class="container">
            <ul class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.php">Trang chủ </a></li>
                <li class="breadcrumb-item">
                    <a href="">Danh sách lỗi vi phạm</a> </li>
            </ul>
            <!-- title -->
            <h1 style="color : #867c20" >Danh sách các lỗi vi phạm và mức xử phạt  </h1>
            <div class="detail" style="width: 100%; height: auto;">
                <div style="margin-left: 140px; margin-top: 30px; margin-bottom: 30px;">
                
                <button type="button" class="btn btn-default"><a href="formAddLoi.php">Thêm lỗi vi phạm </a></button>
                
                    <!-- table -->

                    <table class="table table-striped" border="2" >
                        <tbody>
                            <tr>
                                <td>
                                    <p align="center"><strong>Mã</strong></p>
                                </td>
                                <td>
                                    <p align="center"><strong>TÊN LỖI VI PHẠM</strong></p>
                                </td>
                                <td>
                                    <p align="center"><strong>HÌNH THỨC XỦ PHẠT</strong></p>
                                </td>
                                <td>
                                    <p align="center"><strong>MỨC PHẠT</strong></p>
                                </td>
                                <td>
                                    <p align="center"><strong>CHỈNH SỬA</strong></p>
                                </td>
                            </tr>
    <?php
    $sql=  'select * from danhSachLoiViPham';
    $danhSachLoi = executeResult($sql);
    $no= 1;
    foreach($danhSachLoi as $ds){
        echo '
            <tr>
              <td>' .($no++).'</td>
              <td>' .$ds['name'].'</td>
              <td>' .$ds['hinhThucXuPhat'].'</td>
              <td>' .$ds['gia'].'</td>
              
              <td><button type="button" class="btn btn-warning"><a href="formAddLoi.php?id='.$ds['id'].'">Edit</a></button>
             
              <button type="button" class="btn btn-danger" onclick="deleteDs('.$ds['id'].')">Delete</button> </a>
              </td>
            </tr>';

        
    }
    require_once('../db/deleteDsLoi.php');
    ?>
                          

                        </tbody>
                    </table>
                    <!-- end-table -->
                </div>
            </div>
        </div>
    </main>

    </div>
    <!-- <h1 style="color : #867c20" >Danh sách các đường dây nóng   </h1>
            <div class="detail" style="width: 100%; height: auto;">
                <div style="margin-left: 140px; margin-top: 30px; margin-bottom: 30px;">
                    <div class="panel panel-primary">
                        <div class="panel-body">Panel Content</div>
                        <div class="panel-footer">Panel Footer</div>
                    </div>
                </div>
            </div>
        </div>
    -->

    <!-- footer -->
    <footer class="bg-dark text-center text-white">
        <!-- Grid container -->
        <div class="container p-4">
        
          
          <h4>SỞ GIAO THÔNG VẬN TẢI HÀ NỘI</h4>
          <h5>Địa chỉ: Khu liên cơ Võ Chí Công, 258 đường Võ Chí Công phường Xuân La, Quận Tây Hồ, Hà Nội</h5>
          <h5>Điện thoại: 0243.3824404 Fax: 0243.3824984 Email: sogtvt@hanoi.gov.vn</h5>
          <h5>Đường dây nóng: 024 85893082</h5>         
      
          <section class="mb-4">
            <p>
              An toàn giao thông là hạnh phúc của mọi nhà!
            </p>
          </section>
          <!-- Section: Text -->
      
          <!-- Section: Links -->
          </div>
    </footer>
    <!-- end-footer -->

    <script type="text/javascript">
        function deleteDs(id){
            $.post('../db/deleteDsLoi.php', {
                'id' :id
            } , function(data){
                 alert("Bạn đã xoá thành công!");
                location.reload();
            })

        }
    </script>
</body>

</html>
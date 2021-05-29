<?php
  

?>
<!DOCTYPE html>
<html>
<head>
    <title>Xử lý vi phạm giao thông</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/main.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
        <header class="img-header" style="background-color: #b1a964" >
            <div>
                <div class="row" style="margin-right: 0px">
                    <a href="#"><img src="http://www.csgt.vn//upload/banner/670_banner-trang.jpg" width="100%" class="img-fluid" /></a>
                </div>
            </div>
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
      <li><a href="login.php"><span class="glyphicon glyphicon-user">Admin</span> 
      <?php
      //echo $_SESSION['userName']; 
      ?>
      </a></li>
      <li><a href="register.php"><span class="glyphicon glyphicon-log-in"></span> Đăng Ký</a></li>
    </ul>
  </div>
</nav>
    <!-- end-nav -->
    <main style="margin-top: 30px; margin-bottom: 30px;">
        <div class="container">
            <ul class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.php">Trang chủ </a></li>
                <li class="breadcrumb-item">
                    <a href="">Sửa thông tin lỗi vi phạm</a> </li>
            </ul>
	<div class="login_container">
        <div style="width: 300px">
        <?php
        require_once('../db/logic_vpgt.php');
        ?>
            <form method="POST">
                <div class="form-group">
                    <label>Biển số xe</label>
                    <input style="display: none" type="text" class="form-control login_input" name="id" value="<?=$id?>">

                    <input type="text" class="form-control login_input" name="bienso"  value="<?=$_bienso?>">
                </div>
                <div class="form-group">
                    <label>Tên phương tiện</label>
                    <input type="text" class="form-control login_input" name="tenVP" value="<?=$_ten?>">
                </div>
                <div class="form-group">
                    <label>Lỗi vi phạm</label>
                    <input type="text" class="form-control login_input" name="loiVP" value="<?=$_loi?>">
                </div>
                <div class="form-group">
                    <label>Vi trí</label>
                    <input type="text" class="form-control login_input" name="vitri" value="<?=$_vitri?>">
                </div>
                <div class="form-group">
                    <label>Ngay vi pham</label>
                    <input type="text" class="form-control login_input" name="ngayVP" value="<?=$_ngay?>">
                </div>
                <div class="form-group">
                    <label>Số tiền nộp phạt</label>
                    <input type="number" class="form-control login_input" name="tienVP" value="<?=$_mucphat?>">
                </div>
                <div class="form-group">
                    <label>Trạng thái</label>
                    <input type="text" class="form-control login_input" name="trangthaiVP" value="<?=$_trangthai?>">
                </div>
                <button type="submit" class="btn btn-primary w-100 " style="margin-left : 120px" >Lưu</button>
                <label><a style="margin-left : 120px; margin-top : 10px;" href="admin_vpgt.php">Xem danh sách ->></a></label>

                <div class="form-group">
                </div>
            </form>
        </div>
    </div>
    </main>
	
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
</body>
</html>
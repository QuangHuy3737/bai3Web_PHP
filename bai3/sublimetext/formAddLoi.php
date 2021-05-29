
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
      <li><a href="login.php"><span class="glyphicon glyphicon-user"></span> 
      Admin
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
                    <a href="admin_index.php">Trang chủ </a></li>
                <li class="breadcrumb-item">
                    <a href="">Sửa thông tin lỗi vi phạm</a> </li>
                
            </ul>
            <?php
            require_once('../db/logic-hotline.php')
            ?>
	<div class="login_container">
        <div style="width: 300px">
            <form method="POST">
                <div class="form-group">
                    <label>Tên lỗi vi phạm </label>
                    <input style="display: none" type="text" class="form-control login_input" name="id" value="<?=$id?>">

                    <input type="text" class="form-control login_input" name="name" value="<?=$_ten?>">
                </div>
                <div class="form-group">
                    <label>Hình thức xử phạt</label>
                    <input type="text" class="form-control login_input" name="hinhthuc" value="<?=$_hinhthuc?>">
                </div>
                <div class="form-group">
                    <label>Mức phạt </label>
                    <input type="text" class="form-control login_input" name="mucphat" value="<?=$_gia?>">
                </div>
                <button type="submit" class="btn btn-primary w-100 " style="margin-left : 120px" >Lưu</button>
                <div class="form-group">
                    <label><a style="margin-left : 120px" href="admin_hotline.php">Xem danh sách ->></a></label>
                  
                    
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
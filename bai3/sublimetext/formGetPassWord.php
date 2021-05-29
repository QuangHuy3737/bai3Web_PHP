
<?php
  require_once('../db/dbHelper.php');
//  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Đăng nhập</title>
    <meta charset="utf-8">
    <!-- <link rel="stylesheet"  href="../sublimetext/css/style.css">  -->
    <link rel="stylesheet" href="./css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- <link rel="stylesheet"  href="../sublimetext/css/style.css">  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet"  href="/sublimetext/style.css">  -->

</head>

<body>
    <!-- start-header -->
    <header>
        <header class="img-header" style="background-color: #b1a964" >
            <div>
                <div class="row" style="margin-right: 0px">
                    <a href="index.php"><img src="http://www.csgt.vn//upload/banner/670_banner-trang.jpg" width="100%" class="img-fluid" /></a>
                </div>
            </div>
        </header>
    </header>
    <!-- end-header -->

    <!-- nav -->
    <nav class="navbar navbar-light" style="background-color :#b1a964; text-color: #333 "  >
        <div class="container-fluid">
            
            <ul class="nav navbar-nav ">
            <li class="active"><a href="index.php">Trang chủ</a></li>
            <li><a href="hotline.php">Đường dây nóng</a></li>
            <li><a href="list.php">Tin tức</a></li>
            <li><a href="vpgt.php">Tra cứu vi phạm giao thông</a></li>
          
            </ul>
            <ul class="nav navbar-nav navbar-right">
            <li><a href="login.php"><span class="glyphicon glyphicon-user"></span> Đăng nhập
            </a></li>
            <li><a href="register.php"><span class="glyphicon glyphicon-log-in"></span> Đăng Ký</a></li>
            </ul>
        </div>
    </nav>
    <!-- end-nav -->

    
    <div class="container-fluid">
        
            <div class="">
                <div class="box-left-home ">
                    <div style="margin-top: 30px; ">
                        <ul class="breadcrumb ">
                            <li class="breadcrumb-item ">
                                <a href="index.php ">Trang chủ </a></li>
                            <li class="breadcrumb-item ">
                                <a href="#">Lấy lại mật khẩu </a></li>
                        </ul>
                    </div>

                    
                </div>
            </div>
    </div>
    <div class="login_container">
        <div style="width: 300px">

<?php
require_once('../db/logic_getPassWord.php');



?>
            <h1 class="login_title">Lấy lại mật khẩu</h1>

            <p class="text-center">Bạn muốn đăng nhập? <a href="login.php">Đăng nhập</a></p>
            <form method="post">
                <div class="form-group">
                    <label>Tài khoản</label>
                    <input type="text" class="form-control login_input" name="username">
                </div>
                <div class="form-group">
                    <label>Mật khẩu mới</label>
                    <input type="password" class="form-control login_input" name="password">
                </div>
                <div class="form-group">
                    <label>Xác nhận mật khẩu mới</label>
                    <input type="password" class="form-control login_input" name="cfpassword">
                </div>
                

                <button type="submit" class="btn btn-primary w-100 " style="margin-bottom : 10px;margin-left : 120px">Lưu</button>
            </form>
        </div>
    </div>

                    
            


    <!-- footer -->
    <!-- Footer -->
    <footer class="bg-dark text-center text-white huy ">
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
  <!-- Footer -->
       <!-- end-footer -->

</body>

</html>
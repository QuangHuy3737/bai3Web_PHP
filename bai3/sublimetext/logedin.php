<?php
require_once('../db/dbHelper.php');
require_once('../db/logic-Login.php');
?>
<!DOCTYPE html>
<html lang="en">



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
<nav class="navbar navbar-light " style="background-color :#b1a964; text-color: #333 " >
  <div class="container-fluid">
    
    <ul class="nav navbar-nav ">
      <li class="active"><a href="index.php">Trang chủ</a></li>
      <li><a href="hotline.php">Danh sách lỗi vi phạm</a></li>
      <li><a href="list.php">Tin tức</a></li>
      <li><a href="vpgt.php">Tra cứu vi phạm giao thông</a></li>
      </ul>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="inforUser.php"><span class="glyphicon glyphicon-user"></span>
      <?php
      if(isset($_SESSION['userName'])){
        echo $_SESSION['userName'];
    }
      else {
          echo "Đăng nhập";
      }
      ?>
      </a></li>
      
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in" style="margin-right: 3px"></span>Đăng Xuất</a></li>
    </ul>
  </div>
</nav>
    <!-- end-nav -->

    <main>
        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-8 ">
                    <div class="box-left-home ">
                        <div style="margin-top: 30px; ">
                            <ul class="breadcrumb ">
                                <li class="breadcrumb-item ">
                                    <a href="index.php ">Trang chủ </a></li>
                                <li class="breadcrumb-item ">
                                    <a href="index.php ">Giới thiệu </a></li>
                            </ul>
                        </div>

                        <div>
                            <h1 style="color : #867c20">Vị trí, chức năng, nhiệm vụ và hệ thống tổ chức của lực lượng Công an nhân dân</h1>
                        </div>

                    </div>

                </div>
                <!-- start-tin-tuc -->
                <div class="col-sm-4 set-ul " style=" margin-top: 80px; ">
                    <div style="border: 1px solid;background-color:rgb(248, 210, 216); border-color: rgb(156, 154, 154); ">
                        <div style="color: red; text-align: center; ">
                            <h3> Tin nóng</h3>
                        </div>
                        <div style="color: red; text-align: center; ">
                            <h3 style="border-bottom: 3px solid; margin-left: 30px; margin-right: 30px; "></h3>
                        </div>
                        <div style="padding-right: 20px; ">

                            <ul>
<?php
require_once('../db/dbHelper.php');
$sql='select * from news ';
$tintuc= executeResult($sql);
foreach($tintuc as $tt){
    echo '<li><a href="#">'.$tt['title'].'</a></li>';
}
?>

                                
                            </ul>
                            <a href="list.php" title="Xem thêm " class="viewall ">Xem thêm &gt;&gt;</a>

                        </div>
                    </div>
                </div>
                <!-- end-tin-tuc -->
            </div>
        </div>
    </main>

    <!-- footer -->
    <!-- Footer -->
    <footer class="bg-dark text-center text-white ">
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
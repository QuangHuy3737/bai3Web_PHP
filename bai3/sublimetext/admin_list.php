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
      <li><a href=""><span class="glyphicon glyphicon-user"></span>Admin</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Đăng xuất</a></li>
    </ul>
  </div>
</nav>
    <!-- end-nav -->
    <main>
        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-12">
                    <div class="box-left-home ">
                        <div style="margin-top: 30px; ">
                            <ul class="breadcrumb" style="margin-left : 35px; margin-right : 35px;">
                                <li class="breadcrumb-item ">
                                    <a href="index.php ">Trang chủ </a></li>
                                <li class="breadcrumb-item ">
                                    <a href="index.php ">Tin tức</a></li>
                            </ul>
                        </div>

              <div class="container-fluid">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h2 class="text-center">Danh sách bài viết</h2>
                  </div>
                        <div class="panel-body">
                            <div class="row">
<?php
                        // ket noi voi mysql
$con = mysqli_connect('localhost' , 'root', '','Bai3');
$sql = "select * from news";
$result = mysqli_query($con ,$sql);
while($row = mysqli_fetch_array($result,1)){
    echo  '<div class="row" >
    <br/> 
                <div class="col-md-4" >
                    <a href="http://www.csgt.vn/tintuc/12786/Khong-lap-dat-camera-len-xe-o-to-kinh-doanh-van-tai-co-the-bi-phat-len-toi-6-trieu-d%C3%B4ng-doi-voi-ca-nhan.html">
                    <img src="'.$row['thumbnail'].'" style="width: 100%">
            
            </div>
    <div class="col-md-8">
        <a href="http://www.csgt.vn/tintuc/12786/Khong-lap-dat-camera-len-xe-o-to-kinh-doanh-van-tai-co-the-bi-phat-len-toi-6-trieu-d%C3%B4ng-doi-voi-ca-nhan.html">
        <p>'.$row['title'].'</p>  
    </div>
</div>';
}
// dong ket noi
mysqli_close($con);
?>
            
			
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
<?php
require_once('../db/dbHelper.php');
require_once('../db/logic-Login.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
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
      <li class="active"><a href="index.php">Trang chủ</a></li>
      <li><a href="hotline.php">Danh sách lỗi vi phạm</a></li>
      <li><a href="list.php">Tin tức</a></li>
      <li><a href="vpgt.php">Tra cứu vi phạm giao thông</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href=""><span class="glyphicon glyphicon-user"></span>
      <?php
      echo $_SESSION['userName'];
      ?>
      </a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Đăng xuất</a></li>
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
                    <a href="">Thông tin tài khoản</a> </li>
            </ul>
            <h1 style="color : #867c20" style="margin-top: 40px; text-align: center;">
                  Thông tin tài khoản 
            </h1>


        <table class="table table-striped" border="2" >
                        <tbody>
                            <tr> 
                                <td>
                                    <p ><strong>Số thứ tự</strong></p>
                                </td> 
                                <td>
                                    <p ><strong>Số căn cước</strong></p>
                                </td>                    
                                <td>
                                    <p ><strong>Tên người dùng</strong></p>
                                </td>
                                <td>
                                    <p ><strong>Tuổi</strong></p>
                                </td>
                                <td>
                                    <p ><strong>Email</strong></p>
                                </td>
                                <td>
                                    <p ><strong>Quê quán</strong></p>
                                </td>
                                <td>
                                    <p ><strong>Phương tiện</strong></p>
                                </td>
                                <td>
                                    <p ><strong>Tên đăng nhập</strong></p>
                                </td>
                                <td>
                                    <p ><strong>Mật khẩu</strong></p>
                                </td>
                                <td>
                                    <p ><strong>Sửa/Xoá</strong></p>
                                </td>
                                
                            </tr>
    <?php
    require_once('../db/dbHelper.php');
    $sql='select * from users where userName like "%'.$_SESSION['userName'].'%"';
    $pt= executeResult($sql);
    $no=1;

    foreach($pt as $ds){
        echo '
            <tr>
                <td>'. ($no++).'</td>
              <td>' .$ds['id'].'</td>
              <td>' .$ds['name'].'</td>
              <td>' .$ds['tuoi'].'</td>
              <td>' .$ds['email'].'</td>
              <td>' .$ds['queQuan'].'</td>
              <td>' .$ds['phuongTien'].'</td>
              <td>' .$ds['userName'].'</td>
              <td>' .$ds['passWord'].'</td>
              
              
              <td><button class="btn btn-warning">Sửa</button>
              <button class="btn btn-default" onclick=>Xoá</button>
              </td>
            </tr>';
        
    }
    ?>
    </tbody>
  </table>
        </div>
        <br>
        <br>
        <div class="container">
            <div style="color: rgb(208, 206, 206); text-align: center; ">
                <h3 style="border-bottom: 1px solid;"></h3>
            </div>
            <br>
            <div style="color:  rgb(208, 206, 206); text-align: center; ">
                <h3 style="border-bottom: 1px solid; "></h3>
            </div>
            
            <br>
        </div>
    </main>

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
      <!-- Footer -->
    <!-- end-footer -->
    <!-- <script type="text/javascript">
        function del(id){
            $.post('../db/deleteViPham.php', {
                'id' :id
            } , function(data){
                 alert("Bạn đã xoá thành công!");
                location.reload();
            })

        } -->
</body>

</html>
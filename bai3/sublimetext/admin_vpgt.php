
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

    <main style="margin-top: 30px; margin-bottom: 30px;">
        <div class="container">
            <ul class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.php">Trang chủ </a></li>
                <li class="breadcrumb-item">
                    <a href="">Tra cứu vi phạm giao thông</a> </li>
            </ul>
            <h1 style="color : #867c20" style="margin-top: 40px; text-align: center;">
                Tra cứu vi phạm giao thông
            </h1>
            <!-- form -->
            <form class="was-validated" method="get">
                <div style="margin-left: 31%">
                    <div class="form-group" style="width: 55%;">
                        <label for="uname" style="font-weight: bold;">Biển kiểm soát</label>
                        <input type="text" class="form-control" id="uname" placeholder="Nhập biển kiểm soát" name="bienSo" required>

                        <div class="invalid-feedback">Vui lòng nhập đúng định dạng biển số xe </div>
                        <!-- <label for="uname" style="font-weight: bold;">Tên phương tiện</label>
                        <input type="text" class="form-control" id="uname" placeholder="Nhập biển kiểm soát" name="ten" required> -->

                        <!-- <div class="invalid-feedback">Vui lòng nhập đủ thông tin</div> -->
                    </div>
                    <br>
                    
                </div>
                <!-- button -->
                <div style="margin-left: 47%;">
                    <button type="submit" class="btn btn-success ">Tra cứu</button>
                </div>
                <button class="btn btn-default colo" style="margin-bottom : 5px; margin-left : 480px; margin-top:10px"><a href="formAddViPham.php">Thêm trường hợp vi phạm</a></button>
        </div>


        </form>
        
       
       
<?php
require_once('../db/dbHelper.php');
$id="";
if(isset($_GET['delete_id'])){
    $id= $_GET['delete_id'];
    $sql = 'delete from viPham where id='.$id;
    execute($sql);
echo '<h2 style="color :red; margin-left : 600px">Xoá thành công!!!</h2>';

}

?>
        <table class="table table-striped" border="2" style="margin-left : 143px; margin-right : 50px ;margin-top : 50px; width : 80%;">
                        <tbody>
                            <tr> 
                                <td>
                                    <p ><strong>STT</strong></p>
                                </td>                    
                                <td>
                                    <p ><strong>Biển số xe</strong></p>
                                </td>
                                <td>
                                    <p ><strong>Tên phương tiện</strong></p>
                                </td>
                                <td>
                                    <p ><strong>Lỗi vi phạm</strong></p>
                                </td>
                                <td>
                                    <p ><strong>Vị trí</strong></p>
                                </td>
                                <td>
                                    <p ><strong>Ngày vi phạm</strong></p>
                                </td>
                                <td>
                                    <p ><strong>Số tiền nộp phạt</strong></p>
                                </td>
                                <td>
                                    <p ><strong>Trạng thái</strong></p>
                                </td>
                                <td>
                                    <p ><strong>Admin</strong></p>
                                </td>
                            </tr>
    <?php
    require_once('../db/dbHelper.php');
    $bienSoXe = $ten="";
    if(!empty($_POST)){
      if(isset($_POST['bienso'])){
        $bienSoXe=$_POST['bienSo'];
      }
      if(isset($_POST['ten'])){
        $ten=$_POST['ten'];
      }
    }
    $pt=[];
    if(isset($_GET['bienSo']) && $_GET['bienSo']!=''){
      $sql='select * from viPham where bienSoXe like  "%'.$_GET['bienSo'].'%"';
      
    }
    else{
      $sql='select * from viPham ';
  
    }
    $pt= executeResult($sql);
    $no=1;

    foreach($pt as $ds){
        echo '
            <tr>
                <td>'. ($no++).'</td>
              <td>' .$ds['bienSoXe'].'</td>
              <td>' .$ds['tenPhuongTien'].'</td>
              <td>' .$ds['loiViPham'].'</td>
              <td>' .$ds['viTri'].'</td>
              <td>' .$ds['ngayViPham'].'</td>
              <td>' .$ds['tienNopPhat'].'</td>
              <td>' .$ds['trangthai'].'</td>
              
              
              <td><button type="button" class="btn btn-warning"><a href="formAddViPham.php?id='.$ds['id'].'">Sửa</a></button>
             
              <button type="button" class="btn btn-danger" ><a href="?delete_id='.$ds['id'].'"> Xoá</a></button>
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
            <div id="texttracuu" style="color:  black;">
                <p>Tra cứu, nộp phạt quyết định xử phạt vi phạm hành chính trong lĩnh vực giao thông đường bộ: </p>
                <p>1. Thuộc thẩm quyền: Cục Cảnh sát giao thông, các đơn vị trực thuộc Cục Cảnh sát giao thông; Phòng Cảnh sát giao thông và các đơn vị đội/trạm thuộc Phòng Cảnh sát giao thông (theo danh sách Đội/Trạm).</p>
                <p>2. Thuộc thẩm quyền của thanh tra giao thông đường bộ.</p>
                <p>3. Người nộp phạt có thể nộp phạt tại cơ quan công an gần nhất nơi lưu trú.</p>
                <p>4. Nộp phạt vào Kho bạc nhà nước thông qua dịch vụ bưu chính công ích .</p>
                
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
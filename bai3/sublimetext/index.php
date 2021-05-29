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
      <li><a href="login.php"><span class="glyphicon glyphicon-user"></span> 
      <?php
      if(isset($_SESSION['userName'])){
        echo $_SESSION['userName'];
    }
      else {
          echo "Đăng nhập";
      }
      ?>
    </a></li>
      <li><a href="register.php"><span class="glyphicon glyphicon-log-in"></span> Đăng Ký</a></li>
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
                            <h1>Vị trí, chức năng, nhiệm vụ và hệ thống tổ chức của lực lượng Công an nhân dân</h1>


                            <div class="desc ">Vị trí, chức năng, nhiệm vụ và hệ thống tổ chức của lực lượng Công an nhân dân được quy định trong Luật Công an nhân dân (sửa đổi) đã được Quốc hội Khoá XIV thông qua ngày 20/11/2018, tại Kỳ họp thứ 6. Luật Công an nhân dân
                                (sửa đổi) có hiệu lực thi hành từ ngày 01/7/2019, trừ trường hợp các quy định về cấp bậc hàm cao nhất là cấp tướng; phong, thăng, giáng, tước cấp bậc hàm cấp tướng; bổ nhiệm, miễn nhiệm, cách chức, giáng chức các chức vụ
                                có cấp bậc hàm cao nhất là cấp tướng có hiệu lực thi hành từ ngày 11/01/2019.</div>


                            <div style="width: 100%; height: auto; ">
                                <div>
                                    <p>&nbsp;</p>

                                    <p><strong>I. Vị trí của Công an nhân dân</strong></p>

                                    <div>
                                        <p>Công an nhân dân là lực lượng vũ trang nhân dân làm nòng cốt trong thực hiện nhiệm vụ bảo vệ an ninh quốc gia, bảo đảm trật tự, an toàn xã hội, đấu tranh phòng, chống tội phạm và vi phạm pháp luật về an ninh quốc
                                            gia, trật tự, an toàn xã hội.</p>

                                        <p><strong>II. Chức năng của Công an nhân dân</strong></p>

                                        <p>Công an nhân dân có chức năng tham mưu với Đảng, Nhà nước về bảo vệ an ninh quốc gia, bảo đảm trật tự, an toàn xã hội, đấu tranh phòng, chống tội phạm và vi phạm pháp luật về an ninh quốc gia, trật tự, an toàn xã
                                            hội; thực hiện quản lý nhà nước về bảo vệ an ninh quốc gia, bảo đảm trật tự, an toàn xã hội, đấu tranh phòng, chống tội phạm và vi phạm pháp luật về an ninh quốc gia, trật tự, an toàn xã hội; đấu tranh phòng,
                                            chống âm mưu, hoạt động của các thế lực thù địch, các loại tội phạm và vi phạm pháp luật về an ninh quốc gia, trật tự, an toàn xã hội.</p>

                                        <p><strong>III. Nhiệm vụ và quyền hạn của Công an nhân dân</strong></p>

                                        <p>1. Thu thập thông tin, phân tích, đánh giá, dự báo tình hình và đề xuất với Đảng, Nhà nước ban hành, chỉ đạo thực hiện đường lối, chính sách, pháp luật, chiến lược bảo vệ an ninh quốc gia, bảo đảm trật tự, an toàn
                                            xã hội, đấu tranh phòng, chống tội phạm và vi phạm pháp luật về an ninh quốc gia, trật tự, an toàn xã hội; tham gia thẩm định, đánh giá tác động về an ninh quốc gia, trật tự, an toàn xã hội đối với quy hoạch,
                                            kế hoạch, dự án phát triển kinh tế - xã hội theo quy định của pháp luật; kết hợp chặt chẽ nhiệm vụ bảo vệ an ninh quốc gia, bảo đảm trật tự, an toàn xã hội, đấu tranh phòng, chống tội phạm và vi phạm pháp luật
                                            về an ninh quốc gia, trật tự, an toàn xã hội với nhiệm vụ phát triển kinh tế - xã hội; phối hợp có hiệu quả hoạt động an ninh với hoạt động quốc phòng và đối ngoại.</p>

                                        <p>2. Chủ động phòng ngừa, phát hiện, ngăn chặn, đấu tranh làm thất bại âm mưu, hoạt động xâm phạm an ninh quốc gia, loại trừ nguy cơ đe dọa an ninh quốc gia; bảo vệ độc lập, chủ quyền, thống nhất và toàn vẹn lãnh
                                            thổ của Tổ quốc; bảo vệ Đảng, Nhà nước, Nhân dân và chế độ xã hội chủ nghĩa; bảo vệ an ninh chính trị, an ninh trong các lĩnh vực tư tưởng - văn hóa, kinh tế, quốc phòng, đối ngoại, thông tin, xã hội, môi trường,
                                            khoa học và công nghệ; bảo vệ các lợi ích khác của quốc gia; bảo vệ khối đại đoàn kết toàn dân tộc; bảo vệ tính mạng, sức khỏe, danh dự, nhân phẩm, tài sản, quyền tự do, dân chủ của công dân, quyền và lợi ích
                                            hợp pháp của cơ quan, tổ chức, cá nhân.</p>

                                        <p>3. Hoạt động tình báo theo quy định của pháp luật.</p>

                                        <p>4. Bảo vệ lãnh đạo cấp cao của Đảng, Nhà nước, khách quốc tế đến thăm, làm việc tại Việt Nam; bảo vệ sự kiện, mục tiêu quan trọng về chính trị, kinh tế, ngoại giao, khoa học - kỹ thuật, văn hóa, xã hội; bảo vệ công
                                            trình quan trọng liên quan đến an ninh quốc gia, cơ quan đại diện nước ngoài, đại diện của tổ chức quốc tế tại Việt Nam; bảo vệ cá nhân nắm giữ hoặc liên quan mật thiết đến bí mật nhà nước; bảo vệ vận chuyển
                                            hàng đặc biệt theo quy định của pháp luật.</p>

                                        <p>5. Thực hiện quản lý về bảo vệ an ninh quốc gia, bảo vệ bí mật nhà nước; chủ trì thực hiện quản lý về nhập cảnh, xuất cảnh, quá cảnh, cư trú của người nước ngoài tại Việt Nam; quản lý xuất cảnh, nhập cảnh của công
                                            dân Việt Nam theo quy định của pháp luật; kiểm soát nhập cảnh, xuất cảnh, quá cảnh tại các cửa khẩu theo quy định của pháp luật; phối hợp với Quân đội nhân dân, các ngành hữu quan và chính quyền địa phương trong
                                            hoạt động quản lý, bảo vệ biên giới quốc gia, cửa khẩu, hải đảo, vùng biển, vùng trời và thực hiện nhiệm vụ bảo vệ an ninh quốc gia, bảo đảm trật tự, an toàn xã hội ở khu vực biên giới theo quy định của pháp
                                            luật, điều ước quốc tế mà nước Cộng hòa xã hội chủ nghĩa Việt Nam là thành viên và thỏa thuận quốc tế có liên quan.</p>

                                        <p>6. Thực hiện quản lý về an ninh mạng, bảo vệ an ninh mạng và phòng, chống tội phạm mạng theo quy định của pháp luật.</p>

                                        <p>7. Thực hiện quản lý về công tác điều tra và phòng, chống tội phạm. Chủ trì thực hiện nhiệm vụ phòng, chống khủng bố, bạo loạn và giải quyết các tình huống phức tạp về an ninh quốc gia, trật tự, an toàn xã hội theo
                                            quy định của pháp luật. Chủ động phòng ngừa, phát hiện, ngăn chặn, đấu tranh chống tội phạm và vi phạm pháp luật về trật tự, an toàn xã hội, bảo vệ môi trường, tài nguyên và an toàn thực phẩm có liên quan đến
                                            môi trường; tiếp nhận, giải quyết tố giác, tin báo về tội phạm, kiến nghị khởi tố; khởi tố, điều tra tội phạm theo quy định của pháp luật; thực hiện công tác thống kê hình sự; phát hiện nguyên nhân, điều kiện
                                            phát sinh tội phạm, vi phạm pháp luật về trật tự, an toàn xã hội, về bảo vệ môi trường và kiến nghị biện pháp khắc phục; giáo dục đối tượng vi phạm pháp luật tại cộng đồng theo quy định của pháp luật.</p>

                                        <p>8. Thực hiện quản lý về thi hành án hình sự, thi hành tạm giữ, tạm giam; quản lý trại giam, trại tạm giam, nhà tạm giữ, cơ sở giáo dục bắt buộc, trường giáo dưỡng; tổ chức thi hành bản án, quyết định về hình sự,
                                            biện pháp tư pháp; thực hiện giám sát, giáo dục người dưới 18 tuổi phạm tội được miễn trách nhiệm hình sự; quản lý đối tượng được tha tù trước thời hạn có điều kiện; thực hiện công tác dẫn giải, áp giải, quản
                                            lý kho vật chứng, bảo vệ phiên tòa và thực hiện nhiệm vụ hỗ trợ tư pháp khác theo quy định của pháp luật.</p>

                                        <p>9. Thực hiện quản lý về xử phạt, xử lý vi phạm hành chính trong lĩnh vực an ninh quốc gia, trật tự, an toàn xã hội; xử phạt vi phạm hành chính và thực hiện các biện pháp xử lý hành chính theo quy định của pháp luật;
                                            bảo đảm an ninh, trật tự trong việc thực hiện quyết định cưỡng chế khi có yêu cầu của cơ quan có thẩm quyền.</p>

                                        <p>10. Thực hiện quản lý về cư trú, cơ sở dữ liệu quốc gia về dân cư và cơ sở dữ liệu căn cước công dân, con dấu, trật tự, an toàn giao thông, trật tự công cộng, vũ khí, vật liệu nổ, tiền chất thuốc nổ, công cụ hỗ
                                            trợ, phòng cháy, chữa cháy và cứu nạn, cứu hộ theo quy định của pháp luật; cấp, quản lý thẻ Căn cước công dân và giấy tờ tùy thân khác; đăng ký, cấp, quản lý biển số phương tiện giao thông cơ giới đường bộ;
                                            thực hiện công tác phòng cháy, chữa cháy, cứu nạn, cứu hộ và thực hiện quản lý về an ninh, trật tự đối với các ngành, nghề đầu tư kinh doanh có điều kiện theo quy định của pháp luật.</p>

                                        <p>11. Chủ trì, phối hợp quản lý và thực hiện công tác tuyên truyền, giáo dục về bảo vệ an ninh quốc gia, bảo đảm trật tự, an toàn xã hội, đấu tranh phòng, chống tội phạm và vi phạm pháp luật về an ninh quốc gia, trật
                                            tự, an toàn xã hội; hướng dẫn, kiểm tra, thanh tra, giải quyết khiếu nại, tố cáo, xử lý vi phạm trong hoạt động bảo vệ an ninh quốc gia, bảo đảm trật tự, an toàn xã hội, đấu tranh phòng, chống tội phạm và vi
                                            phạm pháp luật về an ninh quốc gia, trật tự, an toàn xã hội.</p>

                                        <p>12. Làm nòng cốt xây dựng nền an ninh nhân dân và thế trận an ninh nhân dân, xây dựng phong trào toàn dân bảo vệ an ninh Tổ quốc. Hướng dẫn các cơ quan, tổ chức thực hiện công tác bảo vệ an ninh chính trị nội bộ,
                                            an ninh kinh tế, an ninh tư tưởng - văn hóa, an ninh mạng, an ninh thông tin, truyền thông, an ninh xã hội, an ninh môi trường.</p>

                                        <p>13. Hướng dẫn, huấn luyện nghiệp vụ, bồi dưỡng kiến thức pháp luật đối với các tổ chức quần chúng tham gia bảo vệ an ninh, trật tự tại cơ sở, bảo vệ dân phố, dân phòng, bảo vệ cơ quan, doanh nghiệp theo quy định
                                            của pháp luật.</p>

                                        <p>14. Áp dụng các biện pháp vận động quần chúng, pháp luật, ngoại giao, kinh tế, khoa học - kỹ thuật, nghiệp vụ, vũ trang để bảo vệ an ninh quốc gia, bảo đảm trật tự, an toàn xã hội, đấu tranh phòng, chống tội phạm
                                            và vi phạm pháp luật về an ninh quốc gia, trật tự, an toàn xã hội.</p>

                                        <p>15. Sử dụng vũ khí, vật liệu nổ, công cụ hỗ trợ, vũ lực, phương tiện kỹ thuật nghiệp vụ, phương tiện khác để tấn công, truy bắt tội phạm, ngăn chặn người đang thực hiện hành vi phạm tội hoặc hành vi vi phạm pháp
                                            luật khác và để phòng vệ chính đáng theo quy định của pháp luật.</p>

                                        <p>16. Quyết định hoặc kiến nghị đình chỉ, đình chỉ có thời hạn hoạt động của cơ quan, tổ chức, cá nhân có hành vi gây nguy hại hoặc đe dọa gây nguy hại đến an ninh quốc gia, trật tự, an toàn xã hội; yêu cầu cơ quan,
                                            tổ chức, cá nhân cung cấp thông tin, tài liệu, đồ vật khi có căn cứ xác định liên quan đến hoạt động xâm phạm an ninh quốc gia, trật tự, an toàn xã hội theo quy định của pháp luật. Huy động, trưng dụng theo
                                            quy định của pháp luật phương tiện thông tin, phương tiện giao thông, phương tiện khác và người đang sử dụng, điều khiển phương tiện đó trong trường hợp cấp bách để bảo vệ an ninh quốc gia, bảo đảm trật tự,
                                            an toàn xã hội hoặc để ngăn chặn hậu quả thiệt hại cho xã hội đang xảy ra hoặc có nguy cơ xảy ra.</p>

                                        <p>17. Thực hiện các biện pháp bảo vệ an ninh quốc gia, bảo đảm trật tự, an toàn xã hội theo quy định của pháp luật khi có tình trạng chiến tranh, tình trạng khẩn cấp hoặc khi có nguy cơ đe dọa an ninh quốc gia, trật
                                            tự, an toàn xã hội nhưng chưa đến mức ban bố tình trạng khẩn cấp.</p>

                                        <p>18. Quản lý, phát triển công nghiệp an ninh; nghiên cứu, ứng dụng, huy động thành tựu khoa học và công nghệ, kỹ thuật trong bảo vệ an ninh quốc gia, bảo đảm trật tự, an toàn xã hội, đấu tranh phòng, chống tội phạm,
                                            vi phạm pháp luật về an ninh quốc gia, trật tự, an toàn xã hội và xây dựng Công an nhân dân.</p>

                                        <p>19. Xây dựng Công an nhân dân cách mạng, chính quy, tinh nhuệ, từng bước hiện đại, ưu tiên hiện đại hóa một số lực lượng; làm nòng cốt trong thực hiện nhiệm vụ bảo vệ an ninh quốc gia, bảo đảm trật tự, an toàn xã
                                            hội, đấu tranh phòng, chống tội phạm và vi phạm pháp luật về an ninh quốc gia, trật tự, an toàn xã hội.</p>

                                        <p>20. Thực hiện nghĩa vụ quốc tế; hợp tác quốc tế trong đấu tranh phòng, chống tội phạm, bảo vệ an ninh quốc gia, bảo đảm trật tự, an toàn xã hội và xây dựng Công an nhân dân; thực hiện tương trợ tư pháp về hình sự
                                            theo quy định của pháp luật. Bộ Công an là cơ quan trung ương của nước Cộng hòa xã hội chủ nghĩa Việt Nam trong hoạt động dẫn độ, chuyển giao người đang chấp hành án phạt tù.</p>

                                        <p>21. Thực hiện nhiệm vụ, quyền hạn khác theo quy định của pháp luật.</p>

                                        <p><strong>IV. Hệ thống tổ chức của Công an nhân dân</strong></p>

                                        <p>1. Hệ thống tổ chức của Công an nhân dân bao gồm:</p>

                                        <p>a) Bộ Công an;</p>

                                        <p>b) Công an tỉnh, thành phố trực thuộc trung ương;</p>

                                        <p>c) Công an huyện, quận, thị xã, thành phố thuộc tỉnh, thành phố thuộc thành phố trực thuộc trung ương;</p>

                                        <p>d) Công an xã, phường, thị trấn.</p>

                                        <p>2. Chính phủ quy định cụ thể việc xây dựng Công an xã, thị trấn chính quy.</p>

                                        <p>3. Để đáp ứng yêu cầu bảo vệ an ninh quốc gia, bảo đảm trật tự, an toàn xã hội, Bộ trưởng Bộ Công an quyết định thành lập đồn, trạm Công an và đơn vị độc lập bố trí tại những địa bàn cần thiết.</p>

                                        <p>&nbsp;</p>
                                    </div>
                                </div>
                            </div>

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
    <footer class="bg-dark text-center text-white " style="margin-top : 20px">
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
       <script>
      function onDeleteSession() {
        <?php
          //session_destroy();

        ?>
      }
    </script>
</body>

</html>
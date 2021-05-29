<?php
        require_once('../db/dbHelper.php'); 
        $id1=$bienso=$tenVP=$tienVP=$vitri=$loiVP=$ngayVP=$trangthaiVP="";
          if(!empty($_POST)){
              if(isset($_POST['id'])){
                  $id1=$_POST['id'];
              }
              if(isset($_POST['bienso'])){
                  $bienso=$_POST['bienso'];
              }
              if(isset($_POST['tenVP'])){
                  $tenVP=$_POST['tenVP'];
              }
              if(isset($_POST['loiVP'])){
                  $loiVP=$_POST['loiVP'];
              }
              if(isset($_POST['vitri'])){
                  $vitri=$_POST['vitri'];
              }
              if(isset($_POST['ngayVP'])){
                  $ngayVP=$_POST['ngayVP'];
              }
              if(isset($_POST['tienVP'])){
                  $tienVP=$_POST['tienVP'];
              }
              if(isset($_POST['trangthaiVP'])){
                  $trangthaiVP=$_POST['trangthaiVP'];
              }
              if( $bienso== "" ||$vitri=="" || $tienVP=="" || $tenVP=="" || $loiVP=="" || $trangthaiVP=="" ||$ngayVP==""){
                  echo '<h2 style="color :red">Nhap day du thong tin!!!</h2>';
              }
              
              if($id1 != ''){
                  //update
                  $sql = "update viPham set bienSoXe ='$bienso', tenPhuongTien='$tenVP',loiViPham='$loiVP',viTri='$vitri',ngayViPham='$ngayVP', tienNopPhat='$tienVP',trangthai='$trangthaiVP' where id=".$id1;
                  execute($sql);
                  echo '<h3 style="color :#b1a964">Cập nhật thành công!!!</h3>';
         
                } 
              else{
                  //insert
                      $sql = 'insert into viPham (bienSoXe ,tenPhuongTien, loiViPham,viTri,ngayViPham ,tienNopPhat, trangthai)  value ("'.$bienso.'" ,
                      "'.$tenVP.'" ,"'.$loiVP.'" ,"'.$vitri.'","'.$ngayVP.'","'.$tienVP.'" , "'.$trangthaiVP.'")';
                      execute($sql);
                    echo '<h3 style="color :#b1a964">Lưu thành công!!!</h3>';
              }
              // echo $sql;
              
         //header("Location: admin_vpgt.php");
              
          }
        $id="";
        $_bienso=$_ten=$_mucphat=$_ngay=$_loi=$_trangthai=$_vitri="";
      
        if(isset($_GET['id'])){
            $id=$_GET['id'];
            $sql='select * from viPham  where id= '.$id; // lay thong tin 1 loi khi co duoc id
            $res=executeResult($sql);
            if($res != null && count($res) >0 ){
                  $ds = $res[0];
                  $_bienso =$ds['bienSoXe'];
                  $_ten = $ds['tenPhuongTien'];
                  $_trangthai= $ds['trangthai'];
                  $_mucphat= $ds['tienNopPhat'];
                  $_vitri= $ds['viTri'];
                  $_ngay= $ds['ngayViPham'];
                  $_loi= $ds['loiViPham'];
      
            }
            else{
                $id="";
            }
        } 
         
        ?>
<?php
  require_once('../db/dbHelper.php'); 
  $name=$hinhthuc=$mucphat=$id1="";
    if(!empty($_POST)){
       
        if(isset($_POST['name'])){
            $name=$_POST['name'];
        }
        if(isset($_POST['hinhthuc'])){
            $hinhthuc=$_POST['hinhthuc'];
        }
        if(isset($_POST['mucphat'])){
            $mucphat=$_POST['mucphat'];
        }
        if(isset($_POST['id'])){
            $id1=$_POST['id'];
        }
        if( $name== "" ||$hinhthuc=="" || $mucphat==""){
            echo '<h2 style="color :red">Nhap day du thong tin!!!</h2>';
        }
        

        if($id1 != ''){
            //update
            $sql = "update danhSachLoiViPham set name ='$name', hinhThucXuPhat='$hinhthuc', gia='$mucphat' where id=".$id1;
            execute($sql);
            echo '<h3 style="color :#b1a964; padding-left : 420px">Sửa thành công!!!</h3>';
            
        } 
        
        else{
            //insert
                $sql = 'insert into danhSachLoiViPham (name, hinhThucXuPhat , gia)  values ("'.$name.'" ,
                "'.$hinhthuc.'" ,"'.$mucphat.'")';
                execute($sql);
                echo '<h3 style="color :#b1a964; padding-left : 420px"">Lưu thành công!!!</h3>';
        
        }
        
        //header("Location: admin_hotline.php");
        
    }
  $id="";
  $_ten=$_hinhthuc=$_gia="";
  if(isset($_GET['id'])){
      $id=$_GET['id'];
      $sql='select * from danhSachLoiViPham  where id= '.$id; // lay thong tin 1 loi khi co duoc id
      $res=executeResult($sql);
      if($res != null && count($res) >0 ){
            $ds = $res[0];
            $_ten =$ds['name'];
            $_hinhthuc = $ds['hinhThucXuPhat'];
            $_gia= $ds['gia'];

      }
      else{
          $id="";
      }
  }

?>
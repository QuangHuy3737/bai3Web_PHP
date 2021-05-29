<?php
    require_once('../db/dbHelper.php');
    $id=$name=$tuoi=$que=$phuongtien=$email=$u=$p =$cfp="";
    if(!empty($_POST)){
       
        if(isset($_POST['id'])){
            $id=$_POST['id'];
        }
        if(isset($_POST['name'])){
            $name=$_POST['name'];
        }
        if(isset($_POST['tuoi'])){
            $tuoi=$_POST['tuoi'];
        }
        if(isset($_POST['que'])){
            $que=$_POST['que'];
        }

        if(isset($_POST['phuongtien'])){
            $phuongtien=$_POST['phuongtien'];
        }
        if(isset($_POST['email'])){
            $email=$_POST['email'];
        }
        if(isset($_POST['username'])){
            $u=$_POST['username'];
        }
        if(isset($_POST['password'])){
            $p=$_POST['password'];
        }
        if(isset($_POST['cfpassword'])){
            $cfp=$_POST['cfpassword'];
        }
       
        if( $id==""|| $name==""|| $tuoi=="" || $que==""|| 
            $phuongtien =="" ||$email=="" || $u== "" || $p== ""||$cfp==""){
            echo '<h2 style="color :red">Nhap day du thong tin!!!</h2>';
        }
        if($p != $cfp){
            echo '<h2 style="color :red">Mật khẩu không khớp!!!</h2>';

        }
        


        else {
            $sql1= 'select userName from users where userName like "%' .$_POST['username']. '%" ';
            $res1=executeResult($sql1);
            $checkUserName="";
            foreach($res1 as $user){
                $checkUserName = $user['userName'];
            }
            if( $checkUserName !== "" && $checkUserName === $u ){
                echo '<h2 style="color :red">Tên đăng nhập đã được sử dụng!!!</h2>';

            }          
            else {
                if(!empty($id && $checkUserName !== $u)){
                    $sql = 'insert into users (id, name , tuoi, email,queQuan,phuongTien, userName,passWord)  value ("'.$id.'" ,
                    "'.$name.'" ,"'.$tuoi.'", "'.$email.'", "'.$que.'", "'.$phuongtien.'", "'.$u.'", "'.$p.'" )';
                    execute($sql);
                    echo '<h3 style="color :#b1a964">Đăng ký thành công!!!</h3>';
                    
                    // header("Location: login.php");
                }
            }
        }
    }  
?>
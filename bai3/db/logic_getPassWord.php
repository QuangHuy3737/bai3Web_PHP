<?php
require_once('../db/dbHelper.php');
$u=$p =$cfp="";
if(!empty($_POST)){
   
    if(isset($_POST['username'])){
        $u=$_POST['username'];
    }
    if(isset($_POST['password'])){
        $p=$_POST['password'];
    }
    if(isset($_POST['cfpassword'])){
        $cfp=$_POST['cfpassword'];
    }
    if(  $u== "" || $p== ""||$cfp==""){
            echo '<h2 style="color :red">Nhap day du thong tin!!!</h2>';
    }
    else if($p != $cfp && $p!= ""){
            echo '<h2 style="color :red">Mật khẩu không khớp!!!</h2>';

    }
    else {
        $sql1='select userName,id from users where userName like  "%'.$u.'%"';
        $res = executeResult($sql1);
        
        $checkUserName=$id="";
        foreach($res as $user){
            $checkUserName = $user['userName'];
            $id= $user['id'];
        }

        if( $checkUserName !== "" && $checkUserName !== $u ){
                echo '<h2 style="color :red">Tên đăng nhập không tồn tại!!!</h2>';
        }
        else if($checkUserName!== "" && $id !== "" ) {
            $sql = "update users set passWord ='$p' where id=".$id;
            execute($sql);
            
            echo '<h3 style="color :#b1a964">Lưu thành công!!!</h3>';

        }
        else{
            
            echo '<h3 style="color :#b1a964">Không tìm thấy tên đăng nhập!!!</h3>';

        
        }
}
}
?>
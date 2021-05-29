<?php
    require_once('../db/dbHelper.php');
    $u = $p=$user ="";
    // unset($_SESSION['userName']);
    if(!empty($_POST)){
       
        if(isset($_POST['username'])){
            $u=$_POST['username'];
        }
        if(isset($_POST['password'])){
            $p=$_POST['password'];
        }
        if( $u== "" || $p== ""){
            echo '<h2 style="color :red">Nhap day du thong tin!!!</h2>';
        }
        
        else{
            $_SESSION['userName'] = $u;
            $sql ="select userName ,passWord,isAdmin FROM users where userName='$u' ";
            $users = executeResult($sql);
            foreach($users as $user){
                
                    if($user['userName'] == $u && $user['passWord']== $p && $u!='' ) {
                        if($user['isAdmin']==='1'){
                        
                            header('Location: admin_vpgt.php');
                            die();
                        }
                        else{
                            header('Location: inforUser.php');
                            die();

                        }
                    }
                    
                    else if($p!='' ){
                        echo '<h2 style="color :red">Đăng nhập thất bại !!!</h2>';
                    }

        }
    }
    }
?>